<?php
class TableCategories extends Table {
	var $id 					= null;
	var $parent_id				= null;
	var $title					= null;
	var $description			= null;
	var $alias					= null;
	var $section_id				= null;
	var $published				= null;
	var $ordering				= null;
	var $access					= null;
	var $params					= null;
	
	function __construct(){
		parent::__construct('categories','id');	
	}
}