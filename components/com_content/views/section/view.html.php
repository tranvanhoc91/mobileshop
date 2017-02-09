<?php
class ContentViewSection extends View{
	var $secalias = null;
	var $catalias = null;
	
	function display(){
		$this->setLayout();
		
		$this->_siteDocument->setTitle("Tin tức");
		parent::display();
	}
}