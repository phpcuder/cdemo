<?php
$this->pageTitle = Yii::app()->name . ' - Error';
$this->breadcrumbs = array(
    'Error',
);
?>

<!--h2>Error <?php // echo $code;  ?></h2-->
<div class="site-error">
    <h3><?php echo Yii::t('general', 'error'); ?>: </h3>
    <div class="error-message"><?php echo CHtml::encode($message); ?></div>
    <div><a class="FRt PTop5" href="javascript:history.go(-1);"><?php echo Yii::t('general', 'back'); ?></a></div>
</div>