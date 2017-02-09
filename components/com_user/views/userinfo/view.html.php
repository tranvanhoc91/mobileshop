<?php

class UserViewUserinfo extends View{
	
	function display(){
		$this->setLayout('default');
		
		$this->_siteDocument->setTitle("Thông tin cá nhân");
	}
	
	
}