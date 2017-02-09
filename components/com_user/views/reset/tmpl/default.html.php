<div class="unitcenter"> 
    <table><tbody><tr><td>   
        <div class="hcattitle-component">
            <h2 class="title_component_other">Quên mật khẩu?</h2>
        </div>  
        {reError}
<div id="reset-password">
	<form id="reset-password" name="reset-password" method="post" action="user/reset/" onsubmit="return validResetPasswordForm(this)">
		<table class="tbl-resetpwrd" border="0" celpacing="0" celpadding="0">
			<tr>
				<td class="labeltext"><label for="name">Tài khoản:</label></td>
				<td><input id="inputtext" type="text" name="username" class="txtusername" size="35" /></td>
			</tr>
			<tr>
				<td class="labeltext"><label for="name">Email:</label></td>
				<td><input id="inputtext" type="text" name="email" class="email validate['required','email'] "  size="35" /></td>
			</tr>
			<tr>
				<td class="labeltext"><label for="name">Mã xác nhận</label></td>
				<td>
					<input id="captcha" type="text" name="captcha" class="captcha validate['required']"  size="10" />
					<img style="padding-top:3px;" height="30" width="72" src="libraries/functions/captcha.php" />
				</td>
			</tr>
		</table>
		
		<div class="btn-reset"><button class="resetbtn" type="submit" name="submit">Submit</button></div>
	</form>
</div>

</td></tr></tbody></table>
</div>