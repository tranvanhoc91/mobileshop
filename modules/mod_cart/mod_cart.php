<?php 
defined('_JEXEC') or die('Restricted access');
require_once(dirname(__FILE__).'/helper.php');
$cartObject = new modCartHelper();
$modTitle = $cartObject->getTitleModule();
$modPositon = $cartObject->getPositionModule();
?>

