
window.addEvent('domready',function(){
	$clink = $$('a.icon-delete');
	$clink.each(function(el){
		el.addEvent('click',function(){
			url = el.getProperty('rel');
			sendAjax(url);
		});
	});
})

function sendAjax(url){
	//displayLoader('commentContener');
	new Ajax(url, {
        method: 'get',
        onComplete: function(result){
        	alert(url);
		}.bind(this),
	}).request();
}

