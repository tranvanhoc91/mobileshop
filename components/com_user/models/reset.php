<?php

class UserModelReset extends Model{
    private  	$_username 			= null;
	private  	$_password 			= null;
	private  	$_userid 			= null;
	var 		$_repwrd        	= null;
    var 		$_email             = null;
    var 		$_captcha           = null;
	public 		$errors 			= array();
	public 		$numerror 			= 0;
    
	function __construct(){
       global $dbo;
	   $this->_dbo = $dbo;
	   
       	$this->_username 		= addslashes(Request::get('username'));
		$this->_password 		= addslashes(Request::get('password'));
		$this->_repwrd 			= addslashes(Request::get('repwrd'));
		$this->_email 			= addslashes(Request::get('email'));
		$this->_captcha 		= addslashes(Request::get('captcha'));
		
		parent::__construct('com_user');
	}
	
	function action(){
		$this->setView('reset');
		parent::action();
	}
	
}