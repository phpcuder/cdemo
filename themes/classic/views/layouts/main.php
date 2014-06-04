<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />

        <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
        <![endif]-->

        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-1.11.1.min.js"></script>
        <?php
        Yii::app()->clientScript->scriptMap = array(
            'bootstrap.min.css' => false,
            'bootstrap-yii.css' => false,
            'jquery-ui-bootstrap.css' => false,
            'jquery.js' => false,
//            'bootstrap.min.js' => false,
            'bootstrap-noconflict.js' => false,
            'bootbox.min.js' => false,
            'notify.min.js' => false,
        );
        ?>

        <title></title>
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css">
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/loopslider.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/script.js"></script>
    </head>
    <body>
        <div class="wrapper div-clear fl">
                <?php echo $content; ?>
        </div>
        <div class="footer-menu div-clear fl">
            <ul>
                <li><a href="/" title="Home">Home</a></li>
                <li><a href="<?php echo Yii::app()->createUrl('site/maps'); ?>" title="Maps">Maps</a></li>
                <li><a href="<?php echo Yii::app()->createUrl('site/prices'); ?>" title="Prices">Prices</a></li>
                <li><a href="<?php echo Yii::app()->createUrl('site/calender'); ?>" title="Calender">Calender</a></li>
                <li><a href="<?php echo Yii::app()->createUrl('site/contact'); ?>" title="Contact">Contact</a></li>
            </ul>
        </div>
    </body>
</html>