<?php
defined('_JEXEC') or die('Restricted access');

class modRelatednewsHelper extends ModuleObject{
	
	function __construct(){
		parent::__construct('mod_relatednews');
	}
	
	static function getCategoryId($alias){
		global $dbo;
		$dbo->setQuery("SELECT id FROM categories WHERE alias = '$alias' ");
		$id = $dbo->loadResult();
		return $id;
	}
	
	static function getList($catid, $id){
		global $dbo;
		$query = "SELECT a.id as id, a.title as title, a.alias as aalias, c.title as ctitle, c.alias as calias,
					DATE_FORMAT(a.created ,' %d/%m/%Y' ) as created
				  FROM articles as a
				  LEFT JOIN categories as c ON a.category_id = c.id
				  WHERE a.published = 1
				  	AND c.published = 1
				  	AND a.trash = 0
				  	AND a.category_id = $catid
				  	AND a.id <> $id
				 ";
		$query .= " ORDER BY a.id, a.created DESC ";
		$query .= " LIMIT 5";
		
		$dbo->setQuery($query);
		$rows = $dbo->loadObjectList();
		return $rows;
	}
	
	function getModuleTitle(){
		global $dbo;
		$dbo->setQuery("SELECT title FROM modules WHERE module = 'mod_relatednews' and  show_title = 1");
		$modtitle = $dbo->loadResult();
		return $modtitle;
	}
	
}