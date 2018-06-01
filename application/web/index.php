<?php
//phpinfo();
include_once(__DIR__ . '/../modules/seo/redirects/redirects.php');

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');
defined('YII_CONSOLE') or define('YII_CONSOLE', false);
require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

$config = require(__DIR__ . '/../config/web.php');

(new yii\web\Application($config))->run();
/*$arr = array('a' => '27', 'b' => '12', 'd' => '2alpha2');
$tmpVar = &$arr['c'];
$tmpVar = 2 / $arr['d'];
echo $arr['a'] % $arr['b'] + $arr['c'];

for(;false;){
    echo 123123;
}*/