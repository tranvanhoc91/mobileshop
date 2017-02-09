<?php 
defined('_JEXEC') or die('Restricted access');
require_once(dirname(__FILE__).'/helper.php');

$loginObject = new modSupportHelper();
$modTitle = $loginObject->getTitleModule();
$modPositon = $loginObject->getPositionModule();



$document = new DOMDocument('1.0', 'UTF-8');
$document->load(MODULE.'/mod_support/mod_support.xml');
$params = $document->getElementsByTagName('param');


?>

