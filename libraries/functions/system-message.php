<?php

function dumpSystemMessage($content,$type=''){
	//$type = 1
	switch ($type){
		case 0: 
			$class = 'msg-success';
			break;
		case 1: 
			$class = 'msg-error';
			break;
		default : 
			$class = 'msg-note';
			break;
	}
	return '<div class="'.$class.'">
			<span class="msg_content">'.$content.'</span>
		 </div>';
}