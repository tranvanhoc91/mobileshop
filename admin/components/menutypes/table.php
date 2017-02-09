<?php
class TableMenutypes extends Table {
	var $id 					= null;
	var $menutype				= null;
	var $title					= null;
	var $description			= null;
	
	function __construct(){
		parent::__construct('menu_type','id');	
	}
}