//domredy roi moi chay cac dong lenh
var $checked = false;

jQuery(function(){
	togleChecked();
	$sp = $('span.ui-checkbox');
	$sp.click(function(){
		togleChecked();
	});	
});

function checkedRequire(){
	//viet cho cac nut tren thanh toolbar
	//lay ve cac nut phai kiem tra truoc khi submit
	$checked_require = $('button.checked_require');
	if($checked != true){
		//alert('Please check item');
		return false;
	} else return true;
}

function togleChecked(){
	var $a = $('input.ui-helper-hidden-accessible');
	
	for(i=0;i<$a.length;i++){
		if($a[i].checked == true) {
			$checked = true;
			break;
		}
	}	
}