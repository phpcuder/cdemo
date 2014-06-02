<?php
/**
 * Member services
 *
 * @author ThaiDV
 * @final 2010/11/10
 */
class MemberService {

  /**
   * send Email
   *
   * @param string $fromEmail
   * @param string $emailTo
   * @param string $subject
   * @param string $body
   * @param string $fromName
   * @author ThaiDV
   */
  public static function sendEmail($fromEmail, $emailTo, $type, $fromName, $arrayOpinions) {
    $session=Yii::app()->session;
    $session->open();
    $file = '';

    if(file_exists($file)) {
      $lines = file($file);
      $subject = '';
      $body = '';

      foreach ($lines as $kl => $vl) {
        if($kl == '0') {
          $subject = $vl;
        } else {
          $body .= $vl;
        }
      }

      foreach($arrayOpinions as $kao => $vao) {
        $subject = str_replace('{'.$kao.'}', $vao, $subject);
      }

      foreach($arrayOpinions as $kao => $vao) {
        $body = str_replace('{'.$kao.'}', $vao, $body);
      }

      $mailer = Yii::createComponent('application.ext.mailer.EMailer');
      $mailer->Host = Yii::app()->params['hostMail'];
      $mailer->IsSMTP();
      $mailer->IsHTML();
      $mailer->From = $fromEmail;
      $mailer->AddAddress($emailTo);
      $mailer->FromName = $fromName;
      $mailer->CharSet = 'UTF-8';
      $mailer->Subject = $subject;
      $mailer->Body = $body;
      $mailer->Send();
    }
  }

  /**
   * Check access rules
   * @author LamNX
   * @param $controller
   * @param $module
   */
  public static function getAccessRules($action, $controller, $module = null) {
    if(Yii::app()->user->id) {
      $user = Users::model()->findByPk(Yii::app()->user->id);

      if ($user->user_group_id) {
        if(UserGroupActions::model()->getFullAccessFlag($user->user_group_id)) {
          return array('allow',
                  'actions'=>array($action),
                  'users'=>array($user->username),
          );
        } else {
          $criteria = new CDbCriteria;
          $criteria->compare('LOWER(module)',strtolower($module),true);
          $criteria->compare('LOWER(controller)',strtolower($controller),true);
          $criteria->compare('LOWER(action_name)',strtolower($action),true);
          $actionModel = Actions::model()->find($criteria);

          if($actionModel) {
            if(UserGroupActions::model()->existedAction($user->user_group_id, $actionModel->action_id)) {
              return array('allow',
                      'actions'=>array($action),
                      'users'=>array($user->username),
              );
            } else
              return array();
          } else
            return array();
        }
      }
    }      
  }
}