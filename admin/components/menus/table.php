<?php
class TableMenus extends Table {
	var $id 					= null;
	var $menu_type_id			= null;
	var $parent_id				= null;
	var $title					= null;
	var $alias					= null;
	var $type					= null;
	var $component_id			= null;
	var $catid					= null;
	var $published				= null;
	var $ordering				= null;
	var $access					= null;
	var $params					= null;
	var $home					= null;
	
	function __construct(){
		parent::__construct('menu','id');	
	}
}