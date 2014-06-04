<?php

// uncomment the following to define a path alias
Yii::setPathOfAlias('bootstrap', dirname(__FILE__) . '/../extensions/booster');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'My Web Application',
    // preloading 'log' component
    'preload' => array('log', 'bootstrap'),
    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
		'application.libs.service.*',
        'application.components.widgets.*',
    ),
    'theme' => 'classic',
    'language' => 'en',
    'modules' => array(
        // uncomment the following to enable the Gii tool

        'gii' => array(
            'generatorPaths' => array(
                'bootstrap.gii',
            ),
            'class' => 'system.gii.GiiModule',
            'password' => '123456',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters' => array('127.0.0.1', '::1'),
        ),
    ),
    // application components
    'components' => array(
        'user' => array(
            // enable cookie-based authentication
            'allowAutoLogin' => true,
			'class' => 'WebUser',
            'autoUpdateFlash' => TRUE,
        ),
        // uncomment the following to enable URLs in path-format

        'urlManager' => array(
            'urlFormat' => 'path',
            'rules' => array(
                'site/save-sign-up' => 'site/saveSignUp',
                'site/sign-up' => 'site/signUp',
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ),
            'baseUrl' => '',
        ),
//		'db'=>array(
//			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
//		),
        // uncomment the following to use a MySQL database

        'db' => array(
            'connectionString' => 'mysql:host=localhost;dbname=project1',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ),
        'errorHandler' => array(
            // use 'site/error' action to display errors
            'errorAction' => 'site/error',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
            // uncomment the following to show log messages on web pages
            /*
              array(
              'class' => 'CWebLogRoute',
              ),
             */
            ),
        ),
        'bootstrap' => array(
            'class' => 'application.extensions.booster.components.Bootstrap',
        ),
    ),
    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params' => require(dirname(__FILE__) . '/params.php'),
);