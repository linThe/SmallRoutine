<?php
	
	header("ContentType:text/html;charset=utf-8") ;
	//服务器地址
	define("SITE_URL", "127.0.0.1") ;
	
	//Home
	define('CSS_URL', '/simple/Home/Public/css/') ;
	define('JS_URL', '/simple/Home/Public/js/') ;
	define('IMG_URL', '/simple/Home/Public/img/') ;
	define("PAGE_URL","/simple/Home/Public/Page/") ;
	
	define('APP_DEBUG', 'true') ;
	require '../ThinkPHP/ThinkPHP.php' ;
?>