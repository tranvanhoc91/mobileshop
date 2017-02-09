 <?php 
global $siteDocument;
$siteDocument->addScript('libraries/js/mootools/mootools.js');
$siteDocument->addScript('libraries/plugins/formcheck/formcheck.js');
$siteDocument->addScript('libraries/plugins/formcheck/lang/en.js');
$siteDocument->addStyleSheet('libraries/plugins/formcheck/theme/green/formcheck.css');
$siteDocument->addScript('libraries/js/active-formcheck.js');


 foreach ($this->userinfo AS $user)
 
		ob_start();
			require_once 'components/com_user/views/userinfo/tmpl/default.html.php';
			 $uregis = ob_get_contents();
		ob_end_clean();
		
		if (Request::get('submit') == 'submit')
		$registerError = '<div id="msg_register"><span class="msg">'.$this->userError.'</span></div>';
		$uregis = str_replace('{userError}', $registerError, $uregis);
		
		echo $uregis;
		
 ?>
 
 