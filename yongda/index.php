<?php
header("Content-type:text/html;charset=utf-8");

//开启调试模式
define("APP_DEBUG",true);

//给系统资源文件路径定义成常量
//前台
define("SITE_URL","http://localhost/");
define("CSS_URL",SITE_URL."yongda/Public/css/");
define("IMG_URL",SITE_URL."yongda/Public/img/");
define("JS_URL",SITE_URL."yongda/Public/js/");
//后台
define("ADMIN_CSS_URL",SITE_URL."yongda/Admin/Public/css/");
define("ADMIN_IMG_URL",SITE_URL."yongda/Admin/Public/img/");
define("ADMIN_JS_URL",SITE_URL."yongda/Admin/Public/js/");

//引入thinkphp核心文件
require "./ThinkPHP/ThinkPHP.php";
