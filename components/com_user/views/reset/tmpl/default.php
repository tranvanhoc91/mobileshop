 <?php 
		ob_start();
			require_once 'components/com_user/views/reset/tmpl/default.html.php';
			 $content = ob_get_contents();
		ob_end_clean();
		
		if (Request::get('submit') == 'register')
		$registerError = '<div id="msg_register"><span class="msg">'.$this->registerError.'</span></div>';
		$content = str_replace('{reError}', $registerError, $content);
		
		echo $content;
		
 ?>
 
 