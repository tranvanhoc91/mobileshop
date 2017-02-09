<?php
class TableSections extends Table {
	var $id 					= null;
	var $alias					= null;
	var $title					= null;
	var $image					= null;
	var $description			= null;
	var $published				= null;
	var $ordering				= null;
	var $access					= null;
	var $type					= null;
	var $params	 				= null; 
	
	
	
	function __construct(){
		parent::__construct('sections','id');	
	}
}