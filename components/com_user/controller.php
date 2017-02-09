<?php
class UserController extends Controller{
    protected $_dbo;
	public $task;
	function __construct(){
	   global $dbo;
	   $this->_dbo = $dbo;
	   parent::__construct('com_user');
	}
	
	function action(){
        $this->task = Request::get('task');
        $this->setModel($this->task);
        
		parent::action();
	}
}	
	