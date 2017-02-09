<?php
defined('_JEXEC') or die('Restricted access');

require_once(dirname(__FILE__).'/helper.php');


$accessoryObject = new modAccessoryHelper;
$modTitle = $accessoryObject->getTitleModule();
$modPositon = $accessoryObject->getPositionModule();

$accessories = $accessoryObject->getAllAccesory();

foreach ($accessories as $accessory) $sectionAlias = $accessory->salias;