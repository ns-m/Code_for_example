<?php
//объявляем константы
define("DEBUG", 1);
define("ROOT", dirname(__DIR__));
define("WWW", ROOT . '/public');
define("APP", ROOT . '/app');
define("CORE", ROOT . '/vendor/myShop/core');
define("LIBS", ROOT . '/vendor/myShop/core/libs');
define("CACHE", ROOT . '/temp/cache');
define("CONFIG", ROOT . '/config');
define("LAYOUT", 'IceCream');

//http://myshop/public/index.php убираю пути HTTP
$app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
$app_path = preg_replace("#[^/]+$#", '', $app_path);
$app_path = str_replace('/public/', '', $app_path);

define("PATH", $app_path);
define("ADMIN", PATH . '/site');

require_once ROOT . '/vendor/autoload.php';