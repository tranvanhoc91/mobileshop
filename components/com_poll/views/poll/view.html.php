<?php
//truy van de hin thi ket qua binh chon

class PollViewPoll extends View{
	
	function display(){
		//$this->setLayout('default');
		parent::display();
	}
	
	//method lay ve id cua poll
	function getPollId(){
		return  (int)Request::get('id');
	}
	
	//method lay ve title cua binh chon hien thoi
	function getTitlePoll($pid){
		$this->_dbo->setQuery("SELECT title FROM polls WHERE id = $pid");
		return $this->_dbo->loadResult();
	}
	
	//Phuong thuc lay ve cac option cua cau binh chon co id = $id
	function getPollOption($pid){
		$this->_dbo->setQuery("SELECT text,hits,id as voteid FROM polls WHERE pollid = $pid");
		return $this->_dbo->loadObjectList();
	}
}