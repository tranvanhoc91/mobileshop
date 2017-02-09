<?php
class TableManufacturer extends Table {
	var $id 					= null;
	var $name					= null;
	var $email					= null;
	var $description			= null;
	var $url					= null;
	
	function __construct(){
		parent::__construct('manufacturer','id');	
	}
}