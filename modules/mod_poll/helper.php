<?php
defined('_JEXEC') or die('Restricted access');

class modPollHelper extends ModuleObject{
	
	function __construct(){
		parent::__construct('mod_poll');
	}
	
	function getPoll(){
		$this->_dbo->setQuery("SELECT id,title FROM polls WHERE `enable` =1 ");
		return $this->_dbo->loadObjectList();
	}
	
	
	function getPollOptions($pid){
		$query = "SELECT id,`option`,defaultChecked 
		FROM poll_option 
		WHERE poll_id = $pid 
			AND published = 1 ";
		$this->_dbo->setQuery($query);
		return $this->_dbo->loadObjectList();
	}
	
}