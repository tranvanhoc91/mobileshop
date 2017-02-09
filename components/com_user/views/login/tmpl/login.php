<div class="unitcenter"> 
    <table><tbody><tr><td>   
        <div class="hcattitle-component">
            <h2 class="title_component_other">Đăng nhập hệ thống</h2>
        </div>  
		<div id="content">
			<div id="system-message"> <?php echo $this->msgLogin; ?></div>
			<div id="com_user_login">
			<form method="post" name="userlogin" id="form-login" action="user/login/" onsubmit="return validLoginForm(this)" >
			<table class="tbl_user_login" border="0" cellpadding="0" cellspacing="0">
				<tr>
					<td width="150"><label>Tên đăng nhập</label></td>
					<td><input type="text" class="username" name="username"   /></td>
				</tr>
				<tr>
					<td><label>Mật khẩu</label></td>
					<td><input type="password" class="password" name="password"  /></td>
				</tr>
				<tr><td style="padding-top:20px;" align="center" colspan="2"><button onclick="checkLogin();" class="login" name="submit" value="login" type="submit">Đăng nhập</button></td></tr>
			</table>
			</form>
			</div>
		</div>
</td></tr></tbody></table>
</div>