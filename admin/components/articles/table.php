<?php
class TableArticles extends Table {
	var $id 				= null;
	var $title				= null;
	var $alias 				= null;
	var $introtext 			= null;
	var $fulltext 			= null;
	var $image 				= null;
	var $section_id 		= null;
	var $category_id 		= null;
	var $menu_id 			= null;
	var $author 			= null;
	var $created			= null;
	var $created_by 		= null;
	var $modified			= null;
	var $modified_by		= null;
	var $published			= null;
	var $time_up			= null;
	var $time_down		 	= null;
	var $metakey 			= null;
	var $metadesc 			= null;
	var $hits				= null;
	var $ordering			= null;
	var $access				= null;
	var $trash 				= null;
	
	function __construct(){
		parent::__construct('articles','id');
	}
}

