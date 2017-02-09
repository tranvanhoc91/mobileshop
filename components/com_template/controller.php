<?php
class TemplateController extends Controller{

	function __construct(){
		parent::__construct('com_template');
	}

	function action(){
		$this->setModel('template');
		parent::action();
	}
}


