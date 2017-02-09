<?php
class CartController extends Controller{
	var $task;
	function __construct(){
	   parent::__construct('com_cart');
	}
	
	function action(){
		$this->getTask();
		
		switch ($this->task){
			case 'detailcart':
				$this->setModel('detailcart');
				break;
			case 'order':
				$this->setModel('order');
				break;
			default:
				$this->setModel('addcart');
				break;
		}
		parent::action();
	}
	
	function getTask(){
		return $this->task	= addslashes(Request::get('task'));
	}
	
	
}
	
	
	