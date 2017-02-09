<?php

class UserModelRegister extends Model{
    private  	$_username 			= null;
	private  	$_password 			= null;
	private  	$_use_id 			= null;
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
		$this->setView('register');
		if (Request::get('submit') == 'register' ){
			$check	=	$this->checkUserRegister();
			if ($check == true){
				if ($this->register() == true ){ //dang ki thanh cong
					$success = true;
				}else { //dang ki khong thanh cong
					$success = false;
				}
			}else {
				$msgRegister = dumpSystemMessage($this->dumError(),1);
			}
			$this->assignToView('msgRegister', $msgRegister);
			$this->assignToView('success', $success);
		}
		parent::action();
	}
	
	function checkUserRegister(){
		if ($this->checkUsername() == false){
			return false;
		}
		
		if ($this->_password == null){
			$this->setError('Vui lòng nhập mật khẩu', 0);
			return false;
		}
		
		if (strlen($this->_password) < 6){
			$this->setError('Mật khẩu phải có độ dài tối thiểu là 6 kí tự. ', 0);
			return false;
		}
		
		if ($this->_repwrd == null){
			$this->setError('Nhập lại mật khẩu.', 0);
			return false;
		}
		
		if ($this->_repwrd != $this->_password){
			$this->setError('Hai mật khẩu không giống nhau.', 0);
			return false;
		}
		
		if ($this->checkEmail() == false){
			return false;
		}
		
		if ($this->_captcha == null){
			$this->setError('Vui lòng nhập mã bảo vệ', 0);
			return false;
		}else {
			@session_start();
            if($this->_captcha != $_SESSION['security_code']){
            	$this->setError('Mã bảo vệ không đúng', 0);
				return false;
            }
		}
		
		return true;
	}
	
	function checkUsername(){
		if ($this->_username == null || $this->_username==''){
			$this->setError('Vui lòng nhập tên đăng nhập.', 0);
			return false;
		}
		
		if (preg_match("/[_0-9-]/i", $this->_username)){
			$this->setError('Tên đăng nhập không được chứa kí tự số. ', 0);
			return false;
		}
		
		if (strlen($this->_username) <= 3){
			$this->setError('Tên đăng nhập phải lớn hơn 3 kí tự . ', 0);
			return false;
		}
		
		if (preg_match("/ /i", $this->_username)){
			$this->setError('Tên đăng nhập không được chứa kí tự khoảng trắng. ', 0);
			return false;
		}
		
		$this->_dbo->setQuery("SELECT `username`
						FROM `users` 
						WHERE `username` = '$this->_username' ");
		$result = $this->_dbo->loadResult();
		//neu khong co tra ve gia tri null,neu co tri tra ve username can check
		if ($result){
			$this->setError('Tài khoản này đã tồn tại. ', 0);
			return false; // tuc la chua ton tai username nay
		}
		return true;
	}
	
	
	function checkEmail(){
		if ($this->_email == null || $this->_email == ''){
			$this->setError('Vui lòng nhập email.', 0);
			return false;
		}
		
		if (!ereg("^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-])*[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-])*[@]{1}[_a-zA-Z-]*[.]{1}[_a-zA-z-]{2,4}",$this->_email) ){
			$this->setError('Email không hợp lệ.', 1);
			return false;
		}
		
		$this->_dbo->setQuery("SELECT `email` 
						FROM `users` 
						WHERE `email` = '$this->_email' ");
		$result = $this->_dbo->loadResult();
		//neu khong co tra ve gia tri null,neu co tri tra ve email can check
		if ($result){
			$this->setError('Email này đã tồn tại. ', 0);
			return false; // tuc la chua ton tai email nay
		}
		
		return true;
	}
	
	
	function register(){
		$query = "INSERT INTO `users` SET
                                            `username`    	= 	'{$this->_username}',
                                            `password`    	= 	md5('$this->_password'),
                                            `email`    		= 	'{$this->_email}',
                                            `actived`    	= 	0,
                                            `block`    		= 	0,
                                            `registerDate`  = 	Now(),
                                            `group_id`    	= 	3,
                                            `hash`			= 	'{$this->RandomActiveCode()}'
                                                        
						";
			$this->_dbo->setQuery($query);
			$register = $this->_dbo->query();
			if ($register) return true;
			else return false;
	}
	
	function RandomActiveCode(){
        $string = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVXYZW";
	 	for($i=0; $i <= strlen($string); $i++){
            $possition = mt_rand(0,strlen($string));
            $code    = $code . substr($string,$possition,1);
        }
        return $code;
     }
    
	
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