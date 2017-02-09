<div class="unitcenter"> 
    <table><tbody><tr><td>   
        <div class="hcattitle-component">
            <h2 class="title_component_other">Đăng kí thành viên</h2>
        </div>  
        <div id="system-message"> <?php echo $this->msgRegister; ?></div>
<div id="register" >
	<form action="user/register/" name="form-register" id="form-register" method="post">
		<table class="user-register" border="0" celpacing="0" celpadding="0">
			<tr><td class="labeltext"><label for="name">Tên đăng nhập:</label></td><td>
			<tr>
				<td><input type="text" id="text-register" name="username" class="validate['required','length[3,-1]']" value="<?=Request::get('username'); ?>" />
				<span class="note">(Tên đăng nhập không được nhỏ hơn 3 kí tự)</span></td>
			</tr>
			
			<tr><td class="labeltext"><label for="name">Mật khẩu:</label></td><td>
			<tr>
				<td><input type="password" id="text-register" name="password" class="password validate['required','length[6,-1]','alphanum'] text-input" />
				<span class="note">(Mật khẩu không được nhỏ hơn 6 kí tự)</span></td>
			</tr>
			
			<tr><td class="labeltext"><label for="name">Nhập lại mật khẩu:</label></td></tr>
			<tr>
				<td><input type="password" id="text-register" name="repwrd" class="repassword validate['required','confirm[password]']" /></td>
			</tr>
			
			<tr><td class="labeltext"><label for="name">Email:</label></td></tr>
			<tr>
				<td><input type="text" id="text-register" name="email" class="email validate['required','email']" value="<?=Request::get('email'); ?>" />
				</td>
			</tr>
			<tr><td class="labeltext"><label for="name">Mã xác nhận</label></td></tr>
			<tr colpan="2">	
				<td>
				<input id="captcha" type="text" name="captcha" class="captcha validate['required']" />
				<img style="padding-top:3px;" height="30" width="72" src="libraries/functions/captcha.php" />
				</td>
			</tr>
		</table>
		<p class="button-register" align="center">
			<button class="register" type="reset" name="reset" >Nhập lại</button>
			<button class="register" type="submit" name="submit" value="register">Đăng kí</button>
		</p>
	</form>
</div>

</td></tr></tbody></table>
</div>