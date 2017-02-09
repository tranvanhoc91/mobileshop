<?php
class ProductViewCategory extends View{
	var $button;
	var $layout;
	function display(){
		//$this->setLayout('default');
		$this->getLayout();
		$this->button = $this->buildSwitchLayoutButtons();
		
		$this->setLayout($this->layout);
		
		$this->_siteDocument->setTitle($this->title);
		
	}
	
	function getLayout(){
		return $this->layout = addslashes(Request::get('layout','grid'));
	}
	
	function buildSwitchLayoutButtons(){
		$cat_id = Request::get('cat',0);
		$but1 = '<a class="grid" href="?option=com_product&view=default&section='.$this->sectionAlias.'&category='.$this->categoryAlias.'&layout=grid">&nbsp;</a>';
		$but2 = '<a class="list" href="?option=com_product&view=default&section='.$this->sectionAlias.'&category='.$this->categoryAlias.'&layout=list">&nbsp;</a>';
		return '<div class="switch_layout">'.$but1.$but2.'</div>';
	}
	
	
}