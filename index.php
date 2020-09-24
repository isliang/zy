<?php
/**
 * Created by PhpStorm.
 * User: wangshiliang
 * Date: 2020/4/2
 * Time: 15:21
 */
//设置时区
date_default_timezone_set('Asia/Shanghai');
//错误级别
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING & ~E_DEPRECATED & ~E_USER_NOTICE & ~E_STRICT);
//项目代码目录
define("DS", DIRECTORY_SEPARATOR);
$app_path = __DIR__ . DS . 'src';
define("APP_PATH", $app_path);
define("CONFIG_PATH", __DIR__ . DS . 'config');
if (!defined("UPLOAD_PATH")) {
    define("UPLOAD_PATH", __DIR__ . DS . 'upload');
}
//路由配置文件路径
$route_path = CONFIG_PATH . DS . 'Route.php';

//加载autoload
require_once __DIR__ . "/vendor/autoload.php";

$router = new \Ipf\Router\FpmRoute();
try {
    $router->dispatch(null, null);
} catch (\Exception $e) {
    header("HTTP/1.0 404 Not Found");
}
