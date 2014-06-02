<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>

        <?php Yii::app()->bootstrap->register(); ?>
    </head>

    <body>


        <?php $url = $this->getId() . '/' . $this->action->getId(); ?>
        <?php
        $this->widget('bootstrap.widgets.TbNavbar', array(
            'items' => array(
                array(
                    'class' => 'bootstrap.widgets.TbMenu',
                    'items' => array(
                        array('label' => Yii::t('general', 'home'), 'url' => array('/site/index')),
                        array('label' => Yii::t('general', 'product'), 'url' => array('/products/index'),
                            'items' => array(
                                array('label' => Yii::t('general', 'area'), 'url' => array('/areas/admin')),
                                array('label' => Yii::t('general', 'category'), 'url' => array('/categories/admin')),
                                array('label' => Yii::t('general', 'posts'), 'url' => array('/posts/admin')),
                            ),
                        ),
                        array('label' => Yii::t('general', 'user'), 'url' => array('/users/index'),
                            'items' => array(
                                array('label' => Yii::t('general', 'index'), 'url' => array('/users/index')),
                                array('label' => Yii::t('general', 'change password'), 'url' => array('/users/changePassword', 'id' => Yii::app()->user->getId())),
                            ),
                        ),
                        array('label' => Yii::t('general', 'about'), 'url' => array('/site/page', 'view' => 'about')),
                        array('label' => Yii::t('general', 'contact'), 'url' => array('/site/contact')),
                        array('label' => Yii::t('general', 'login'), 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                        array('label' => Yii::t('general', 'logout') . ' (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
                    ),
                ),
            ),
        ));
        ?>

        <div class="container" id="page">

            <?php if (isset($this->breadcrumbs)): ?>
                <?php
                $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
                    'links' => $this->breadcrumbs,
                ));
                ?><!-- breadcrumbs -->
            <?php endif ?>

            <?php echo $content; ?>

            <div class="clear"></div>

            <div id="footer">
                Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
                All Rights Reserved.<br/>
                <?php echo Yii::powered(); ?>
            </div><!-- footer -->

        </div><!-- page -->

    </body>
</html>
