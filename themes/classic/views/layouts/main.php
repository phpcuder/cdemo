
<!doctype html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/slick.css"/>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/loopslider.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/script.js"></script>
    </head>
    <body>
        <div class="wrapper div-clear fl">
            <div class="inner-wrapper">
                <?php echo $content; ?>
            </div>
        </div>
        <div class="footer-menu div-clear fl">
            <ul>
                <li><a href="/" title="Home">Home</a></li>
                <li><a href="maps.html" title="Maps">Maps</a></li>
                <li><a href="prices.html" title="Prices">Prices</a></li>
                <li><a href="calender.html" title="Calender">Calender</a></li>
                <li><a href="<?php echo Yii::app()->createUrl('site/contact'); ?>" title="Contact">Contact</a></li>
            </ul>
        </div>
    </body>
</html>