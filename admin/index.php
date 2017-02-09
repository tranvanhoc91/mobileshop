<?php
require_once('../configuration.php');
require_once('require.php');

//khoi tao doi tuong ket noi voi database
$dbo = new Database;

$uo = new User;

$task = Request::get('task');
if ($task =='logout') 
	$uo->adminLogout();
	
if($uo->adminIsLogin()==false) {
	if($uo->adminCheckLogin()==false) {
		header('location:login.php');
	}
}

$whitelist = array('categories','articles','cpanel','modules','component',
					'users','menus','article','templates','menutypes',
					'supports','weblinks','config','contact','products','order',
					'contact','manufacturer','poll','revenue',
					'invoice', 'sections','content','language','banner');

//lay doi tuong nguoi dung dang muon thao tac
$component = Request::get('option','cpanel');
//include cac file xay dung man hinh

if($component && in_array($component,$whitelist)){
	require_once('components/'.$component.'/toolbar.'.$component.'.php');
	require_once('components/'.$component.'/admin.'.$component.'.php');
}
require_once(dirname(__FILE__).'/templates/joomlaCMS/index.php');
?>