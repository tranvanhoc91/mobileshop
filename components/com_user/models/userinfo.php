<?php
@session_start();

class UserModelUserinfo extends Model{
    protected $_dbo;
	var  $_userid 		= null;
	var  $firstname 	= null;
	var  $lastname	 	= null;
	var  $gender	 	= null;
	var  $birthday	 	= null;
	var  $mobile	 	= null;
	var  $ssn		 	= null;
	var  $occupation 	= null;
	var  $company	 	= null;
	var  $address	 	= null;
	var  $city		 	= null;
	var  $country	 	= null;
	
	function __construct(){
       global $dbo;
	   $this->_dbo = $dbo;
	   $this->_userid = $_SESSION['user']->id;
	   
		parent::__construct('com_user');
	}
	
	function action(){
		$this->setView('userinfo');
		$this->firstname		= addslashes(Request::get('firstname'));
		$this->lastname			= addslashes(Request::get('lastname'));
		$this->gender			= addslashes(Request::get('gender'));
		$this->birthday			= addslashes(Request::get('birthday'));
		$this->mobile			= addslashes(Request::get('mobile'));
		$this->ssn				= addslashes(Request::get('ssn'));
		$this->occupation		= addslashes(Request::get('occupation'));
		$this->company			= addslashes(Request::get('company'));
		$this->address			= addslashes(Request::get('address'));
		$this->city				= addslashes(Request::get('city'));
		$this->country			= addslashes(Request::get('country'));
		
		
		
		$userinfo = $this->getUserInfoLogined();
		$this->assignToView('userinfo', $userinfo);
		
		
		
	   if (Request::get('submit') == 'submit'){
	   		if ($this->checkRequestInfo() == true) {
	   			//Neu co $userinfo tuc la user do da co record thong tin trong bang user_info roi -> tien hanh update
	   			if ($userinfo){
	   				if ( $this->updateUserInfo() == true){
	   					redirect('../');
	   				}
	   			}
	   			//neu chua thi tien hanh insert info cua user do
	   			else $this->insertUserInfo();
	   		}else {
	   			//neu kiem tra cac gia tri nhap vao khong hop le thi bao loi
	   			$errors = $this->dumError(); 
				$this->assignToView('userError', $errors);
	   		}
	   }

		parent::action();
	}
	
	function getUserInfoLogined(){
		//$this->_dbo->setQuery("SELECT * FROM user_info WHERE user_id = $this->_userid ");
		$this->_dbo->setQuery("SELECT user_info.*, sessions.token 
								FROM user_info 
								INNER JOIN sessions ON sessions.user_id = user_info.user_id
								WHERE user_info.user_id = $this->_userid 
									AND ip = '$_SERVER[REMOTE_ADDR]'
								");
		return $this->_dbo->loadObjectList();
	}
	
	function updateUserInfo(){
		$query = "UPDATE `user_info` SET
											`firstname`    	= 	'{$this->firstname}',
                                            `lastname`    	= 	'{$this->lastname}',
                                            `gender`    	= 	'{$this->gender}',
                                            `birthday`    	= 	'{$this->birthday}',
                                            `mobile`    	= 	'{$this->mobile}',
                                            `ssn`    		= 	'{$this->ssn}',
                                            `occupation`  	= 	'{$this->occupation}',
                                            `company`    	= 	'{$this->company}',
                                            `address`    	= 	'{$this->address}',
                                            `city`    		= 	'{$this->city}',
                                            `country`    	= 	'{$this->country}'
                                       WHERE user_id = $this->_userid;
                                            ";
		
		$this->_dbo->setQuery($query);
		$update = $this->_dbo->query();
		if ($update) return true;
		else return false;
	}
	
	function insertUserInfo(){
		$query = "INSERT INTO `user_info` SET
											`firstname`    	= 	'{$this->firstname}',
                                            `lastname`    	= 	'{$this->lastname}',
                                            `gender`    	= 	'{$this->gender}',
                                            `birthday`    	= 	'{$this->birthday}',
                                            `mobile`    	= 	'{$this->mobile}',
                                            `ssn`    		= 	'{$this->ssn}',
                                            `occupation`  	= 	'{$this->occupation}',
                                            `company`    	= 	'{$this->company}',
                                            `address`    	= 	'{$this->address}',
                                            `city`    		= 	'{$this->city}',
                                            `country`    	= 	'{$this->country}',
                                       		user_id = $this->_userid;
                                            ";
		
		$this->_dbo->setQuery($query);
		$insert = $this->_dbo->query();
	}
	
	
	function checkRequestInfo(){
		
		
		if (!$this->gender || $this->gender == null){
			$this->setError('Gender do not inval.', 0);
			return false;
		}
		
		if (is_numeric($this->mobile) == false){
			$this->setError('Mobile do not inval', 0);
			return false;
		}
		
		if (is_numeric($this->ssn) == false){
			$this->setError('CMND do not inval', 0);
			return false;
		}
		
		return true;
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