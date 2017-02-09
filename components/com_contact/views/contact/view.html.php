<?php


class ContactViewContact extends View{
	
	function display(){
		
		$this->setLayout('default');
		
		$this->_siteDocument->setTitle("Liên hệ");
	}
}