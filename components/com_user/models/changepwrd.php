<?php
@session_start();
class UserModelChangepwrd extends Model{
    protected $_dbo;
	var $oldpwrd		=	null;
	var $newpwrd		=	null;
	var $renewpwrd		=	null;
	var $captcha		= 	null;
	private $username;
	private $uid;
    
	function __construct(){
       global $dbo;
	   $this->_dbo = $dbo;
		parent::__construct('com_user');
	}
	
	
	function action(){
		$this->uid	=	$_SESSION['user']->id;
		$this->username	=	$_SESSION['user']->username;
		$this->setView('changepwrd');
		
		if(Request::get('submit') == 'changepwrd'){
			//lay ve cac gia tri request
			$this->getRequestForm();
			if ($this->checkForm() == true){
				if ($this->updatePassword() == true) $success = true;
				else $success = false;
			}else {
				$msgChangePass = dumpSystemMessage($this->dumError(),1);
			}
			$this->assignToView('msgChangePass', $msgChangePass);
			$this->assignToView('success', $success);
		}
		parent::action();
	}
	
	function getRequestForm(){
		$this->oldpwrd		=	addslashes(Request::get('oldpwrd'));
		$this->newpwrd		=	addslashes(Request::get('newpwrd'));
		$this->renewpwrd	=	addslashes(Request::get('renewpwrd'));
		$this->captcha		=	addslashes(Request::get('captcha'));
	}
	
	function updatePassword(){
		$this->_dbo->setQuery("UPDATE `users` SET `password` = md5('{$this->newpwrd}') 
								WHERE id = $this->uid 
								AND `username` = '{$this->username}' ");
		return $this->_dbo->query();
	}
	
	function checkForm(){
		if ($this->checkCurrentPassword() == false) {
			return false;
		}
		if ($this->newpwrd == null){
			$this->setError('Nhập mật khẩu mới', 0);
			return false;
		}
		
		if (strlen($this->newpwrd) < 6){
			$this->setError('Mật khẩu phải có độ dài tối thiểu là 6 kí tự. ', 0);
			return false;
		}
		
		if ($this->renewpwrd == null){
			$this->setError('Nhập lại mật khẩu mới', 0);
			return false;
		}else {
			if ($this->newpwrd != $this->renewpwrd){
				$this->setError('Hai mật khẩu không giống nhau.', 0);
				return false;
			}
		}
		
		if ($this->captcha == null){
			$this->setError('Vui lòng nhập mã bảo vệ', 0);
			return false;
		}else {
			@session_start();
            if($this->captcha != $_SESSION['security_code']){
            	$this->setError('Mã bảo vệ không đúng', 0);
				return false;
            }
		}
		return true;
	}
	
	function checkCurrentPassword(){
		if ($this->oldpwrd == null){
			$this->setError('Nhập mật khẩu hiện tại', 0);
			return false;
		}
		//kiem tra xem pwrd hien tai co dung ko
		$this->_dbo->setQuery("SELECT `password`
						FROM `users` 
						WHERE `password` = md5('$this->oldpwrd') 
							AND `id`= $this->uid 
							AND `username`='$this->username' ");
		$result = $this->_dbo->loadResult();
		//neu khong co tuc la password hien tai nhap vao khong trung khop voi csdl
		if (!$result){
			$this->setError('Mật khẩu hiện tại không đúng. ', 0);
			return false; 
		}
		return true;
	}
	
	public function setError($msg,$type){
		$this->errors[] = $msg;
		$this->numerror += 1;
	}
	
	public function dumError(){
		if ($this->numerror >0){
			foreach ($this->errors AS &$err){
				return $err.'<br />';
			}
		}
	}	
}