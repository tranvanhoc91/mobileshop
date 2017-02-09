<?php
class UserViewChangepwrd extends View{
	
	function display(){
		if (isset($this->success) && $this->success == true) $this->setLayout('message');
		else $this->setLayout();
		$this->checkRegisterScript();
		
		$this->_siteDocument->setTitle("Thay đổi mật khẩu");
		
		
		parent::display();
	}
		
	function checkRegisterScript(){
		$this->_siteDocument->addScript('libraries/js/mootools/core.js');
		$this->_siteDocument->addScript('libraries/js/mootools/more.js');
		$this->_siteDocument->addScript('libraries/plugins/formcheck/lang/en.js');
		$this->_siteDocument->addScript('libraries/plugins/formcheck/formcheck-yui.js');
		$this->_siteDocument->addStyleSheet('libraries/plugins/formcheck/theme/green/formcheck.css');
		$this->_siteDocument->addScript('libraries/js/active-formcheck.js');
	}
}