<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <?php
        Yii::app()->clientScript->scriptMap = array(
            'pager.css' => false,
            'styles.css' => false,
        );
        ?>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
        <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
        <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
        <![endif]-->

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/prettify.css" />
        <script type="text/javascript" src="/js/prettify.js"></script>

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/styles.css"
</head>

<body>
    <?php
    $this->widget(
            'bootstrap.widgets.TbNavbar', array(
                'type' => null, // null or 'inverse'
                'brand' => Yii::app()->name,
                'brandUrl' => '#',
                'collapse' => true, // requires bootstrap-responsive.css
                'fixed' => false,
                'items' => array(
                    array(
                        'class' => 'bootstrap.widgets.TbMenu',
                        'items' => array(
                            array('label' => 'Dashboard', 'url' => '#', 'active' => true),
                            array(
                                'label' => 'Orders',
                                'url' => '/orders/admin',
                            ),
                            array(
                                'label' => 'Customer',
                                'url' => '/customers/admin',
                            ),
                            array('label' => 'Business Types', 'url' => '/businessTypes/admin'),
                        ),
                    ),
                ),
        )
    );
    ?>
    <div class="container" id="page">
        <div class="row">
            <div class="span12">
                <?php echo $content; ?>
            </div>
        </div>
    </div><!-- page -->

</body>
</html>
