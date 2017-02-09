function validRequired(field,txtalert)
{
	with (field)
	{
		if (value==null||value=="")
		{
			alert(txtalert);
			return false;
		}
		else
		{
			return true;
		}
	}
}
// Gọi Hàm kiểm tra các trường bắt buộc nhập cho mỗi Field
function validLoginForm(thisform)
{	
	with (thisform)
	{			
		if (validRequired(username,"Vui lòng nhập tên đăng nhập!") == false)
		{	username.focus();	return false;	}	
		if (validRequired(password,"Vui lòng nhập mật khẩu!") == false)
		{	password.focus();	return false;	}	
	}
}
