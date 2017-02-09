<?php
defined('_JEXEC') or die('Restricted access');
require_once(dirname(__FILE__).'/helper.php');
	
$document = new DOMDocument('1.0', 'UTF-8');
$document->load(MODULE.'/mod_footer/mod_footer.xml');
$params = $document->getElementsByTagName('params');


$footer = new modFooterHelper();

$tmpl = $footer->getTemplateList();