<?php


global $siteDocument;

$siteDocument->addScript('components/com_poll/asset/js/poll.js');

class PollController extends Controller{
    protected 	$_dbo;
    
	function __construct(){
	   global $dbo;
	   $this->_dbo = $dbo;
	   parent::__construct('com_poll');
	}
	
	function action(){
		$this->setModel('poll');
		//lay ve task
		/* $task = Request::get('task','view');
		if ($task == 'vote'){
			$this->excuteVote();
			$this->showResult();
		}else {
			$this->showResult();
		} */
		
		parent::action();
	}
	
}
