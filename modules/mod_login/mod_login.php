<?php 
defined('_JEXEC') or die('Restricted access');

require_once(dirname(__FILE__).'/helper.php');

$loginObject = new modLoginHelper();
$modTitle = $loginObject->getTitleModule();
$modPositon = $loginObject->getPositionModule();
@session_start();
	if ($_SESSION['user']){
		$uTokent = $loginObject->getUserToken($_SESSION['user']->id);
		
		$ulogin .= '<p class="show-username">Xin chào <span>'.ucfirst($_SESSION['user']->username).'</span>!</p>';
		$ulogin .= '<div id="user-login-task">';
		$ulogin .= '<p class="account-info"><a href="user/userinfo/">Thông tin cá nhân.</a></p>';
		$ulogin .= '<p class="change-pwrd"><a href="user/changepwrd/">Thay đổi password</a></p>';
		$ulogin .= '<p class="user-logout"><a onclick="return msgAlert(\'Thank you for visit website!\')" href="user/logout/">Thoát</a></p>';
		$ulogin .= '<input type="hidden" name="token" value="'.$uTokent->token.'" />';
		$ulogin .='</div>';
	}else {
		$ulogin = '<p class="username">
					<input type="text" class="username" name="username" value="Tên đăng nhập" onfocus="if(this.value==\'Tên đăng nhập\')
			{this.value=\'\'};" onblur="if(this.value==\'\'){this.value=\'Tên đăng nhập\'};" />
				</p>
				
				<p class="password">
					<input type="password" class="password" name="password"  />
				</p>
				
				<p class="button-login">
					<button onclick="checkLogin();" class="login" name="submit" value="login" type="submit"></button>
				</p>
				
				<p class="text-login">
					<span><a class="itemregis" href="user/register/">Đăng kí tài khoản</a></span><br />
					<span><a class="itemreset" href="user/reset/">Quên mật khẩu?</a></span><br />
				</p>';
	}
	
?>

