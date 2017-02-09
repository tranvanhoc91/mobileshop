<?php
class TablePoll extends Table {
	var $id 					= null;
	var $title					= null;
	var $access					= null;
	var $enable					= null;
	
	function __construct(){
		parent::__construct('polls','id');	
	}
}