<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
        '@modules' => '@app/modules'
    ],
    'timeZone' => 'Asia/Ho_Chi_Minh',
    'modules' => [
        'contrib' => 'app\modules\contrib\Module',
        'main' => 'app\modules\main\Module',
        // 'gridview' => [
        //     'class' => '\kartik\grid\Module'
        //     // enter optional module parameters below - only if you need to
        //     // use your own export download action or custom translation
        //     // message source
        //     // 'downloadAction' => 'gridview/export/download',
        //     // 'i18n' => []
        // ]
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'q',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'formatter' => [
            'dateFormat' => 'dd/MM/yyyy',
            'datetimeFormat' => 'php:d/m/Y, H:i:s',
            'timeZone' => 'UTC'
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
            // 'loginUrl' => ['app/users/auth/login'],
        ],
        'errorHandler' => [
            'errorAction' => 'modules/main/site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
            // 'defaultRoles' => ['systemManager'],
            // uncomment if you want to cache RBAC items hierarchy
            // 'cache' => 'cache',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [],
        ],

    ],
    'language' => 'vi',
    'defaultRoute' => 'main/site/index',
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
    // $config['components']['assetManager']['forceCopy'] = true;
}

return $config;
