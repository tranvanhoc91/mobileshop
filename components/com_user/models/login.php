<?php

class UserModelLogin extends Model{
    protected $_dbo;
    private  $_username 	= null;
	private  $_password 	= null;
	private  $_use_id 		= null;
	
	function __construct(){
       global $dbo;
	   $this->_dbo = $dbo;
	   
		if($this->isLogined()){
				@session_start();
				$this->_username = $_SESSION['user']->username;
				$this->_password = $_SESSION['user']->password;
	            $this->_use_id = $_SESSION['user']->id;
	            
		}
		
		parent::__construct('com_user');
	}
	
	function action(){
		$this->setView('login');
		if (Request::get('submit')=='login'){ 
			if($this->isLogined()==false) { //tuc la chua dang nhap
				if($this->checkLogin()== false) //tuc la co loi
					$msgLogin = dumpSystemMessage($this->dumError(),1);
				else {
					//$msgLogin = dumpSystemMessage('Đăng nhập thành công',0);
					redirect('../'); //nhay ve trang chu 
				}
			}
			$this->assignToView('msgLogin', $msgLogin);
		}
		//redirect('../');
		parent::action();
	}
	
	
	function isLogined(){
		@session_start();
		if(isset($_SESSION['user']) && $_SESSION['user']->id) return true;
		return false;
	}
	
	function checkLogin(){
		//lay cac thong tin
		$this->_username = addslashes(Request::get('username'));
		if(!isset($this->_username) || $this->_username=='' || $this->_username=='Tên đăng nhập') {
			$this->setError('Vui lòng nhập tên đăng nhập. ', 0);
			return false;
		}
		
		$this->_password = addslashes(Request::get('password'));
		if(!$this->_password || $this->_password == '') {
			$this->setError('Vui lòng nhập mật khẩu. ', 0);
			return false;	
		}
		
		$this->_dbo->setQuery("SELECT block,actived
								FROM users 
								WHERE `username`='".$this->_username."' 
										AND `password` = '".md5($this->_password)."' 
							");
		$status = $this->_dbo->loadObjectList();
		if ($status){//neu co du lieu
			foreach ($status as $stt)
			if ($stt->actived == 0) {
				$this->setError('Tài khoản này chưa được kích hoạt. ', 0);
				return false;	
			}
			if ($stt->block == 1) {
				$this->setError('Tài khoản này đã bị khóa. ', 0);
				return false;	
			}
		}
		$this->_dbo->setQuery("SELECT id,username
								FROM users 
								WHERE `username`='".$this->_username."' 
										AND `password` = '".md5($this->_password)."' 
										AND `block` = '0' AND `actived`='1' 
							");
		$user = $this->_dbo->loadObjectList();
		
		if($user){
			require_once('admin/base/class.session.php');
			foreach ($user AS &$u)
			$session = new Session($u->id);
			$session->store();
			
			$user = $this->_dbo->loadObjectList();
		
			foreach ($user AS &$u)
			@session_start();
			//$_SESSION['user'] = new stdClass();
			$_SESSION['user']= $u;
			
			return true;
		}else{
			$this->setError('Tên đăng nhập hoặc mật khẩu không đúng! ', 0);
			return false;	
		}
		
	}//end function checkLogin()
	
	function setError($msg,$type){
		$this->errors[] = $msg;
		$this->numerror += 1;
	}
	
	function dumError(){
		if ($this->numerror >0){
			foreach ($this->errors AS &$err){
				return $err.'<br />';
			}
		}
	}
    
}