$(document).ready(function(){
	$hiden = $('#hidden-input');
	$hiden.hide();
	$('a.imgs').click(function(){
		$hiden.slideToggle();
	});
});
