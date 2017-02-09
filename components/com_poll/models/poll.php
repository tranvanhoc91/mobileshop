<?php
//xu ly lien quan den viec nguoi dung binh chon

class PollModelPoll extends Model {
	function __construct() {
		parent::__construct('com_poll');
	}
	
	function action(){
		$this->setView('poll');
		
		$task = Request::get('task','view');
		
		if ($task == 'vote'){
			$this->showResultPoll();
		}else {
			$this->showResultPoll();
		} 
		
		
		parent::action();
	}
	
	function showResultPoll(){
		echo  $str = "trai thai binh";
	}
	
	function getResultPoll(){
		
	}
	
	function excutePoll(){
		
	}
	
}