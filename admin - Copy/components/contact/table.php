<?php
class TableContact extends Table {
	var $id 					= null;
	var $title					= null;
	var $content				= null;
	var $fullname				= null;
	var $email					= null;
	var $time					= null;
	var $view					= null;
	var $replied				= null;
	var $trash					= null;
	
	function __construct(){
		parent::__construct('contact','id');	
	}
}