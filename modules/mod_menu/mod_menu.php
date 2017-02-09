<?php
defined('_JEXEC') or die('Restricted access');

require_once(dirname(__FILE__).'/helper.php');


$menuObject = new modMenuHelper();
$menuList = $menuObject->getAllMenu();

