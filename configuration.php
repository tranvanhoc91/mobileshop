<?php
class Config{
	/* Site Settings */
	static $sitename 		=	'Hệ thống siêu thị điện thoại di động - MobileShop';
	static $description 	=	'Hệ thống siêu thị điện thoại di động - MobileShop,chuyên cung cấp các sản phẩm điện thoại chính hãng';
	static $keyword			=	'ĐTDĐ,siêu thị điện thoại di động,mobile,điện thoại,điện thoại chính hiệu,mobileshop';
	/* Database Settings */
	static $dbtype = 'mysql';
	static $host = 'localhost';
	static $user = 'root';
	static $password = 'iwatani';
	static $db = 'db_mobileshop';
	/* Server Settings */
	static $gzip = '1';
	static $ftp_host = '127.0.0.1';
	static $ftp_port = '21';
	static $ftp_user = '';
	static $ftp_pass = '';
	static $ftp_root = '';
	static $ftp_enable = '0';
	/*back-end setting*/
	static $title	=	'MobileShop';
	static $loginTitle	=	'MobileShop - Administrator Login';
	static $sologan		=	'HỆ THỐNG SIÊU THỊ ĐIỆN THOẠI DI ĐỘNG - MOBILESHOP';
	static $cpanelTitle	=	'Hệ thống quản trị website - Mobileshop';
	/* Mail Settings */
	static $mailer = 'mail';
	static $mailfrom = 'tranvanhoc.tb@gmail.com';
	static $smtpauth = '0';
	static $smtpsecure = 'none';
	static $smtpport = '25';
	static $smtpuser = '';
	static $smtppass = '';
	static $smtphost = 'localhost';
	/* Cache Settings */
	static $caching = '0';
	static $cachetime = '15';
	static $cache_handler = 'file';
	
	//static $path = "mobileshop";
	static $root		=	'mobileshop';
	static $path	=	'http://localhost/mobileshop/';
}