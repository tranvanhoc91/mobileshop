<?php

class UserViewLogin extends View{
	
	function display(){
		$this->_siteDocument->setTitle("Đăng nhập");
		
		if ($_SESSION['user']) 
			$this->setLayout('success');
		else 
			$this->setLayout('login');
	}
	
} 