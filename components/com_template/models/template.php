<?php

class TemplateModelTemplate extends Model{
	
	function __construct(){
       global $dbo;
	   $this->_dbo = $dbo;
		parent::__construct('com_template');
	}
	
	function action(){
		$this->setView('template');
		$task 	=	Request::get('task');
		$id		=	Request::get('tmpl');
		if ($task == 'changeTmpl') {
			$this->changeTemplate($id);
			//redirect('../');
			header("Location:../mobileshop/");
		}
			
		
		
		
		parent::action();
	}
	
	function changeTemplate($id){
		$this->_dbo->setQuery("UPDATE `templates` SET `default`= 1 WHERE id = $id ");
		$this->_dbo->query();
		
		$this->_dbo->setQuery("UPDATE `templates` SET `default`= 0 WHERE id <> $id ");
		$this->_dbo->query();
	}
	
}