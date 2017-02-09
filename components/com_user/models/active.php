<?php

class UserModelActive extends Model{
    protected $_dbo;
    private $username;
    private $hash;
	
	function __construct(){
       global $dbo;
	   $this->_dbo = $dbo;
		parent::__construct('com_user');
	}
	
	
	function action(){
		$this->setView('active');
		//lay ve cac gia tri cua username tren url
		$this->username = 	addslashes(Request::get('username'));
		$this->hash		=	addslashes(Request::get('hash'));
		
		$actived = $this->activeAccount(); //true or false;
		$this->assignToView('active', $actived);
		parent::action();
	}
	
	function activeAccount(){
		$query = "SELECT id FROM users WHERE username = '$this->username' AND hash = '$this->hash'";
		$this->_dbo->setQuery($query);
		$result = $this->_dbo->loadResult();
		if ($result) {
			$this->_dbo->setQuery("UPDATE users SET actived = 1 WHERE username='$this->username'");
			$update = $this->_dbo->query();
			if ($update) return true;
			else return false;
		}else return false;
	}
	
	
}