<?php
defined('_JEXEC') or die('Restricted access');
require_once (MODULE.'/mod_login/mod_login.php');
require_once (MODULE.'/mod_login/helper.php');

 
?>

<div class="unit<?php echo $modPositon; ?>" >   
	<div class="title-block" ><span class="title-block"><?php echo $modTitle; ?></span></div>
	<div class="content-block"> 
		<div id="userlogin">
			<form method="post" name="userlogin" id="form-login" action="user/login/" onsubmit="return validLoginForm(this)" >
				<?php echo $ulogin; ?>
				<!-- 
				<p class="username">
					<input type="text" class="username" name="username" value="Tên đăng nhập" onfocus="if(this.value=='Tên đăng nhập')
			{this.value=''};" onblur="if(this.value==''){this.value='Tên đăng nhập'};" />
				</p>
				
				<p class="password">
					<input type="password" class="password" name="password"  />
				</p>
				
				<p class="button-login">
					<button onclick="checkLogin();" class="login" name="submit" value="login" type="submit"></button>
				</p>
				
				<p class="text-login">
					<span><a class="itemregis" href="index.php?el=user&task=register">Đăng kí tài khoản</a></span><br />
					<span><a class="itemreset" href="index.php?el=user&task=resetpwrd">Quên mật khẩu?</a></span><br />
				</p>
				 -->
			</form>
		</div>
	</div>
</div>