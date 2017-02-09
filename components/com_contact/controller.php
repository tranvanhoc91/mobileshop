<?php
class ContactController extends Controller{

	function __construct(){
		parent::__construct('com_contact');
	}

	function action(){
		$this->setModel('contact');
		parent::action();
	}
}


