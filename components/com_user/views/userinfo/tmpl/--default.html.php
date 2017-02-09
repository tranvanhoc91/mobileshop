<div class="unitcenter"> 
    <table><tbody><tr><td>   
        <div class="hcattitle-component">
            <h2 class="title_component_other">Thông tin cá nhân</h2>
        </div>  
        {userError}
<div id="register" >
	<form action="user/userinfo/" name="form-update-info" id="form-userinfo" method="post">
		<table class="user-register" border="0" celpacing="0" celpadding="0">
			<tr><td class="labeltext"><label for="name">Họ lót:</label></td><td>
			<tr>
				<td><input type="text" id="text-register" name="firstname" class="validate['required']" value="<?php if ($user) echo $user->firstname; else echo Request::get('firstname'); ?>" /></td>
			</tr>
			
			<tr><td class="labeltext"><label for="name">Tên:</label></td><td>
			<tr>
				<td><input type="text" id="text-register" name="lastname" class="validate['required']" value="<?php if ($user) echo $user->lastname; else echo Request::get('lastname'); ?>" /></td>
			</tr>
			
			<tr><td class="labeltext"><label for="name">Giới tính:</label></td><td>
			<tr >
				<td style="padding-left:100px;">
				<input  type="radio" name="gender" value="1" <?php if($user && $user->gender==1) echo 'checked="checked"'; ?> />Nam &nbsp;&nbsp;&nbsp;&nbsp;
				<input type="radio" name="gender" value="0" <?php if($user && $user->gender==0) echo 'checked="checked"'; ?> />Nữ</td>
			</tr>
			
			
			<tr><td class="labeltext"><label for="name">Ngày sinh:</label></td><td>
			<tr>
				<td><input type="text" id="text-register" name="birthday" class="validate['required']" value="<?php if ($user) echo $user->birthday; else echo Request::get('birthday'); ?>" /></td>
			</tr>
			
			<tr><td class="labeltext"><label for="name">Mobile:</label></td><td>
			<tr>
				<td><input type="text" id="text-register" name="mobile" class="validate['required']" value="<?php if ($user) echo $user->mobile; else echo Request::get('mobile'); ?>" /></td>
			</tr>
			
			<tr><td class="labeltext"><label for="name">CMND:</label></td><td>
			<tr>
				<td><input type="text" id="text-register" name="ssn" class="validate['required']" value="<?php if ($user) echo $user->ssn; else echo Request::get('ssn'); ?>" /></td>
			</tr>
			
			<tr><td class="labeltext"><label for="name">Nghề nghiệp:</label></td><td>
			<tr>
				<td><input type="text" id="text-register" name="occupation" class="validate['required']" value="<?php if ($user) echo $user->occupation; else echo Request::get('occupation'); ?>" /></td>
			</tr>
			
			<tr><td class="labeltext"><label for="name">Công ty:</label></td><td>
			<tr>
				<td><input type="text" id="text-register" name="company" class="validate['required']" value="<?php if ($user) echo $user->company; else echo Request::get('company'); ?>" /></td>
			</tr>
			
			<tr><td class="labeltext"><label for="name">Địa chỉ</label></td><td>
			<tr>
				<td><input type="text" id="text-register" name="address" class="validate['required']" value="<?php if ($user) echo $user->address; else echo Request::get('address');?>" /></td>
			</tr>
			
			<tr><td class="labeltext"><label for="name">Thành phố:</label></td><td>
			<tr>
				<td><input type="text" id="text-register" name="city" class="validate['required']" value="<?php if ($user) echo $user->city; else echo Request::get('city'); ?>" /></td>
			</tr>
			
			<tr><td class="labeltext"><label for="name">Quốc gia:</label></td><td>
			<tr>
				<td><input type="text" id="text-register" name="country" class="validate['required']" value="<?php if ($user) echo $user->country; else echo Request::get('country'); ?>" /></td>
			</tr>
			<tr>
				<td align="center">
					<button class="btn-reset" type="reset" name="submit" value="reset">Làm lại</button>
					<button class="btn-submit" type="submit" name="submit" value="submit">Hoàn tất</button>
				</td>
			</tr>
		</table>
		<input type="hidden" name="token" value="<?php if ($user) echo $user->token; ?>" />
	</form>
</div>

</td></tr></tbody></table>
</div>