<div class="unitcenter"> 
    <table><tbody><tr><td>   
        <div class="hcattitle-component">
            <h2 class="title_component_other">Thay đổi mật khẩu</h2>
        </div>  
        <div id="system-message"> <?php echo $this->msgChangePass; ?></div>
<div id="register" >
	<form action="user/changepwrd/" name="form-register" id="form-register" method="post">
		<table class="user-register" border="0" celpacing="0" celpadding="0">
			<tr>
				<td class="labeltext"><label for="name">Mật khẩu hiện tại:</label></td>
				<td><input type="password" id="text-register" name="oldpwrd" class="validate['required'] text-input" /></td>
			</tr>
			
			<tr>
				<td class="labeltext"><label for="name">Mật khẩu mới:</label></td>
				<td><input type="password" id="text-register" name="newpwrd" class="validate['required','length[6,-1]'] text-input" /></td>
			</tr>
			
			<tr>
				<td class="labeltext"><label for="name">Nhập lại mật khẩu mới:</label></td>
				<td><input type="password" id="text-register" name="renewpwrd" class="validate['required']" /></td>
			</tr>
			
			<tr>
				<td class="labeltext"><label for="name">Mã xác nhận:</label></td>
				<td><input id="captcha" type="text" name="captcha" class="captcha validate['required']" />
				<img style="padding-top:3px;" height="30" width="72" src="libraries/functions/captcha.php" /></td>
			</tr>
		</table>
		<p class="button-register" align="center">
			<button class="register" type="submit" name="submit" value="changepwrd">Submit</button>
		</p>
	</form>
</div>

</td></tr></tbody></table>
</div>