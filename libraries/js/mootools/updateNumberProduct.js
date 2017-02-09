window.addEvent('domready',function(){
	//neu nguoi ta click vao lien ket thi goi ham sendAjaxRequest
	$clink = $$('input.number_product');
	
	$clink.each(function(el){
		el.addEvent('blur',function(){
			//url='index.php?el=order&task=updatenum&format=json';
			url = 'index.php?option=com_cart&task=update';
			//alert(url);
			//lay duoc id cua san pham nay
			$id = this.getProperty('rel');
			$num = this.value;
			
			if($id&&$num){
				url = url + '&id='+$id+'&num='+$num;
				sendAjaxRequest(url);
			}
			//lay duoc gia tri value cua input nay
			//sendAjaxRequest(url);
		});
	});
})



function sendAjaxRequest(url){
	//displayLoader('commentContener');
	new Ajax(url, {
        method: 'get',
        onComplete: function(result){   
			//cap nhat gia tri ben duoi
			$('total').empty().setHTML(formatCurrency(result)).addClass('test');
		}.bind(this),
	}).request();
}



function formatCurrency(num) 
{
   num = num.toString().replace(/\$|\,/g,'');
   if(isNaN(num))
   num = "0";
   sign = (num == (num = Math.abs(num)));
   num = Math.floor(num*100+0.50000000001);
   num = Math.floor(num/100).toString();
   for (var i = 0; i < Math.floor((num.length-(1+i))/3); i++)
   num = num.substring(0,num.length-(4*i+3))+'.'+
   num.substring(num.length-(4*i+3));
   return (((sign)?'':'-') + num);
}