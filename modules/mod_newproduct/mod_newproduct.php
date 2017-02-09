<?php
/**
 * Module lay ve nhung san pham  moi nhat
 */
defined('_JEXEC') or die('Restricted access');


require_once(dirname(__FILE__).'/helper.php');


$modProduct = new modNewproductHelper();

//lay ve tieu de module
$modTitle = $modProduct->getTitleModule();



//lay ve  vi tri cua module
$position = $modProduct->getPositionModule();

//lay ve cac sp moi nhat
$rows = $modProduct->getProducts();


