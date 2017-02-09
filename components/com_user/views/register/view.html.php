
<?php

class UserViewRegister extends View{
	
	function display(){
		$this->_siteDocument->setTitle("Đăng kí thành viên");
		
		$this->checkRegisterScript();
		if ($this->success) $this->setLayout('message');
		else $this->setLayout('register');
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