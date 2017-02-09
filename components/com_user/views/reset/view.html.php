<?php
class UserViewReset extends View{
	
	function display(){
		$this->setLayout('default');
		
		$this->_siteDocument->setTitle("Quên mật khẩu");
	}
}