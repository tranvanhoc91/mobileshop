function msgAlert(msg){
	alert(msg);
	return;
}

function msgConfirm(msg){
	var agree = confirm(msg);
	if(agree) return true;
	else return false;
}