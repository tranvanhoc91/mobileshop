<?php 
defined('_JEXEC') or die('Restricted access');


require_once(dirname(__FILE__).'/helper.php');

$categoryObject = new modCategoryHelper();


//lay ve title cua module 
$modTitle = $categoryObject->getTitleModule();

//lay ve vi tri dat module
$modPosition = $categoryObject->getPositionModule();

//lay ve cac categories
$categories = $categoryObject->getCategory();

foreach ($categories as $category) $sectionAlias = $category->salias;


?>

