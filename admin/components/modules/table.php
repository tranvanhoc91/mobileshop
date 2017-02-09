<?php
class TableModules extends Table {
	var $id 			= null;
	var $title			= null;
    var $module			= null;
	var $position 	    = null;
	var $access		    = null;
	var $published		= null;
	var $ordering		= null;
	var $show_title		= null;
	var $params 		= null;
	
	function __construct(){
		parent::__construct('modules','id');
	}
}

