<?php
class CartViewOrder extends View{
	
	function display(){
		$this->_siteDocument->setTitle("Đặt hàng online");
		
		@session_start();
		if ($_SESSION['user']){
			if (!$this->success){
				$this->setLayout('customer');
				$this->checkValidField();
			}
			else  
				$this->setLayout('success');
		}else{
			$layout = Request::get('layout');
			if ($layout && $layout == 'customer'){
				if (!$this->success){
					$this->setLayout('customer');
					$this->checkValidField();
				}else  
					$this->setLayout('success');
			}else $this->setLayout('massage');	
		}
		
	}
	
	function checkValidField(){
		$this->_siteDocument->addScript('libraries/js/mootools/core.js');
		$this->_siteDocument->addScript('libraries/js/mootools/more.js');
		$this->_siteDocument->addScript('libraries/plugins/formcheck/lang/en.js');
		$this->_siteDocument->addScript('libraries/plugins/formcheck/formcheck-yui.js');
		$this->_siteDocument->addStyleSheet('libraries/plugins/formcheck/theme/green/formcheck.css');
		$this->_siteDocument->addScript('libraries/js/active-formcheck.js');
	}
	
	
}