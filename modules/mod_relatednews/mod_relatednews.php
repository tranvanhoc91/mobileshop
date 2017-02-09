<?php

/**
 * Lay ve nhung bai viet cung category voi bai viet dang xem
 */


defined('_JEXEC') or die('Restricted access');

require_once(dirname(__FILE__).'/helper.php');

$category = addslashes(Request::get('category'));
$id = (int)Request::get('id');

if ($category){
	$catid = modRelatednewsHelper::getCategoryId($category);
	$relatedArticles = modRelatednewsHelper::getList($catid, $id);
	$moduletitle = modRelatednewsHelper::getModuleTitle();
}
