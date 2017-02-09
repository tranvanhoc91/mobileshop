<?php


class TemplateViewTemplate extends View{
	
	function display(){
		
		//redirect('../');
		
		$this->setLayout();
		parent::display();
	}
}