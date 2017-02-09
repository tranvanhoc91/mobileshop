<?php
class TableComponent extends Table {
	var $id 					= null;
	var $title					= null;
	var $component				= null;
	var $link					= null;
	var $ordering				= null;
	var $published				= null;
	var $access					= null;
	var $params					= null;
	
	function __construct(){
		parent::__construct('components','id');	
	}
}