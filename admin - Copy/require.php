<?php
require_once('base/class.request.php');
require_once('base/class.database.php');
require_once('base/class.message.php');
require_once('base/class.table.php');
require_once('base/class.session.php');
require_once('base/class.user.php');
require_once('base/class.toolbar.php');
require_once('base/class.upload.php');

function dump($var){
	echo '<div style="position:fixed; bottom:20px; right:20px; width:500px; height:300px; border:solid 2px #f00;background:#fff; color:#000;overflow:auto;"><pre style="line-height:20px; font-size:12px;">';
	var_dump($var);
	echo '</pre></div>';
}

function redirect($url){
	$port = $_SERVER['SERVER_PORT']==80? '':':'.$_SERVER['SERVER_PORT'];
	$url = 'http://'.$_SERVER['HTTP_HOST'].$port.'/'.Config::$root.'/admin/'.$url;
	echo '<script language="javascript">';
	echo 	'window.location="'.$url.'";';
	echo '</script>';
}

function includeTable(){
	$component = Request::get('option');
	if($component){
		//inluce
		require_once("components/$component/table.php");
		//khoi tao
		$component = 'Table'.ucfirst($component);
		$tb  = new $component();
		return $tb;
	}
}

function UploadFile($fileName,$dir,$rename,$prefix){
		require_once 'base/class.upload.php';
		$upload = new Upload ($fileName);
	    $upload->setFileExtension('jpg|gif|bmw|jpeg|png');
	    $upload->setFileSize(1000);
	    $upload->setUploadDir($dir);
	    
	    if($upload->CheckError() == true){
	    	$upload_errors = $upload->errors;
	        foreach($upload_errors as $error){
	        	Message::setMessage($error,1);
	        }
	    }
	    else{
	      	if($rename==0){    //khong cho phep doi ten
		        $source = $upload->fileTMP;
		        $des = $upload->uploadDir . $upload->fileName;
	        }else{    //$rename == true.   tuc la cho phep doi ten file upload len
	        	$upload->newfileName = $prefix . time() . '.' . $upload->fileExtension;
	            $source = $upload->fileTMP;
	            $des = $upload->uploadDir.$upload->newfileName;
	        }
	        copy($source,$des);
	    }
	    return $upload->newfileName;
	}
	
function convertString($str) {
		//$str = preg_replace("/(-|+|*|^|%)/" , '', $str);//loai cac ki hieu dac biet
		$str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
		$str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
		$str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
		$str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
		$str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
		$str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
		$str = preg_replace("/(đ)/", 'd', $str);
		$str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'a', $str);
		$str = preg_replace("/(B)/", 'b', $str);
		$str = preg_replace("/(C)/", 'c', $str);
		$str = preg_replace("/(Đ|D)/", 'd', $str);
		$str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'e', $str);
		$str = preg_replace("/(F)/", 'f', $str);
		$str = preg_replace("/(G)/", 'g', $str);
		$str = preg_replace("/(H)/", 'h', $str);
		$str = preg_replace("/(J)/", 'j', $str);
		$str = preg_replace("/(K)/", 'k', $str);
		$str = preg_replace("/(L)/", 'l', $str);
		$str = preg_replace("/(M)/", 'm', $str);
		$str = preg_replace("/(N)/", 'n', $str);
		$str = preg_replace("/(V)/", 'v', $str);
		$str = preg_replace("/(X)/", 'x', $str);
		$str = preg_replace("/(T)/", 't', $str);
		$str = preg_replace("/(R)/", 'r', $str);
		$str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'i', $str);
		$str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'o', $str);
		$str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'u', $str);
		$str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'y', $str);
		$str = preg_replace('/"/','', $str);
		$str = preg_replace('/(\/)/','', $str);
		$str = preg_replace('/(\\\)/','', $str);
		$str = preg_replace('/(~)/',' ', $str);
		$str = preg_replace('/(`)/',' ', $str);
		//$str = preg_replace('/(|)/',' ', $str);
		$str = preg_replace('/(  )/',' ', $str);
		$str = preg_replace('/(-)/',' ', $str);
		//$str = preg_replace('/(.)/','', $str);
		//$str = preg_replace('/(?)/','', $str);
		$str = preg_replace('/(:)/','', $str);
		//$str = preg_replace('/(;)/','', $str);
		$str = preg_replace('/(\+)/','', $str);
		$str = preg_replace('/(\,)/','', $str);
		$str = preg_replace('/(\;)/','', $str);
//		$str = preg_replace('/(()/','', $str);
//		$str = preg_replace('/(\)\)/','', $str);
//		$str = preg_replace('/([)/','', $str);
//		$str = preg_replace('/(])/','', $str);
		$str = preg_replace('/(\*)/','', $str);
//		$str = preg_replace('/(^)/','', $str);
		//$str = str_replace(" ", "-", str_replace("&*#39;","",$str));
		return $str;
	}
?>
