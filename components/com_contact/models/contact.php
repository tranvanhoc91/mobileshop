<?php

class ContactModelContact extends Model{
	
	function __construct(){
       global $dbo;
	   $this->_dbo = $dbo;
	            
		parent::__construct('com_contact');
	}
	
	function action(){
		$this->setView('contact');
		
		//get chi nhanh cua cong ty
		$departments = $this->getDepartments();
		$this->assignToView('department', $departments);
		
		if ($this->insertContact()){
			$message = dumpSystemMessage('Message has been sent successfully.Thank you for your contact.');
		}else {
			$message = dumpSystemMessage($this->dumError(),1);
		}
		
		$this->assignToView('message', $message);
		parent::action();
	}
	
	function getDepartments(){
		$query = "SELECT * FROM department";
		$this->_dbo->setQuery($query);
		return $this->_dbo->loadObjectList();
	}
	
	
	function checkEmail($email){
		if ($email == null || $email == ''){
			$this->setError('Vui lòng nhập email.', 0);
			return false;
		}
		
		if (!ereg("^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-])*[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-])*[@]{1}[_a-zA-Z-]*[.]{1}[_a-zA-z-]{2,4}",$email) ){
			$this->setError('Email không hợp lệ.', 1);
			return false;
		}
		
		return  true;
	}
	
	function insertContact(){
		$name 		= Request::get('fullname');
		$email 		= Request::get('email');
		$title  	= Request::get('title');
		$content  	= Request::get('content');
		$address 	= Request::get('address');
		
		if ($this->checkEmail($email)) {
			$query = "INSERT INTO `contact` SET
                                            `title`    	= 	'{$title}',
                                            `content`    	= 	'{$content}',
                                            `email`    		= 	'{$email}',
                                            `fullname`		=	'{$name}',
                                            `address`		=	'{$address}',
                                            `view`    	= 	0,
                                            `trash`    		= 	0,
                                            `time`  = 	Now()";
			$this->_dbo->setQuery($query);
			if ($this->_dbo->query())
				return true;
			else 
				return false;
		}else 
			return false;
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