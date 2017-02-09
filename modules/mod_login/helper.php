<?php
defined('_JEXEC') or die('Restricted access');

class modLoginHelper extends ModuleObject{
	
	function __construct(){
		
		parent::__construct('mod_login');
	}
	
	function getUserToken($uid){
		$this->_dbo->setQuery("SELECT token FROM sessions WHERE user_id = $uid AND ip = '".$_SERVER['REMOTE_ADDR']."' ");
		return $this->_dbo->loadObject();
	}
}