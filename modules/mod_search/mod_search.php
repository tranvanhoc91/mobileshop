<?php 
defined('_JEXEC') or die('Restricted access');

require_once(dirname(__FILE__).'/helper.php');

$searchObject = new modSearchHelper();
$modTitle = $searchObject->getTitleModule();
$modPositon = $searchObject->getPositionModule();

?>

