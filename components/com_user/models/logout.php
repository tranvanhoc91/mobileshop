<?php

class UserModelLogout extends Model{
    protected $_dbo;
    private $uid;
    private $token;
    
    
	function __construct(){
       global $dbo;
	   $this->_dbo = $dbo;
	   
	   @session_start();
		$this->uid = $_SESSION['user']->id;
		parent::__construct('com_user');
	}
	
	function action(){
        if (Request::get('task') =='logout')   $this->logout();
        
        //Neu trong bang session ma khong co record nao thi co nghia khong co user nao dang nhap.tranh lay nham session tu website khac
       // $sessionData = $this->getSesionUserDB();
        //if ($sessionData == null) $this->logout();
        
        redirect('../');
        //$this->setView('logout');
		parent::action();
	}
	
	function logout(){
		//Huy $_SESSION tuong ung
		//lay ve token va kiem tra token cua user dang dang nhap
		$this->token = $this->getUserToken($this->uid);
		//Xoa session cua user logout trong bang sessions
		$this->_dbo->setQuery("DELETE FROM sessions WHERE user_id = $this->uid AND token = '".$this->token->token."'");
		$this->_dbo->query();
		
		$lastvisit = date("Y-m-d H:i:s");
		$this->_dbo->setQuery("UPDATE `users` SET `lastvisitDate`= '$lastvisit' WHERE id= $this->uid ");
		$this->_dbo->query();
		
		$_SESSION['user'] = null;
	}
	
	function getSesionUserDB(){
		$this->_dbo->setQuery("SELECT id FROM sessions WHERE user_id = $this->uid AND ip = '".$_SERVER['REMOTE_ADDR']."' ");
		return $this->_dbo->loadObject();
	}
	
	function getUserToken($uid){
		$this->_dbo->setQuery("SELECT token FROM sessions WHERE user_id = $uid AND ip = '".$_SERVER['REMOTE_ADDR']."' ");
		return $this->_dbo->loadObject();
	}
}