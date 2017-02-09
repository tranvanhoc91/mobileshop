window.addEvent('domready',function(){
	//neu nguoi ta click vao lien ket thi goi ham sendAjaxRequest
	$clink = $$('span.add2cart');
	//alert($clink);
	
	$clink.each(function(el){
		el.addEvent('click',function(){
			url = el.getProperty('rel');
			sendAjaxRequest(url);
		});
	});
})

function sendAjaxRequest(url){
	//displayLoader('commentContener');
	new Ajax(url, {
        method: 'get',
        onComplete: function(result){
        	
		
			//dung javascript de decode lai json thanh mang javascript hieu duoc
			//$mang = eval('(' + result + ')');
			//for(i=0;i<$mang.length;i++) alert($mang[i].id);
			//alert(result);
        	
			if(result=='NOK') alert('Không thêm được');
			else {
				alert('Mua sản phẩm thành công!');
			}
			//updateCart();
			//neu thanh cong thi gan lai lop cua nut
			//lay cai class hien tai cua thang bi bam
			//neu unpublished -> published
			
			//this.loader.setHTML(result);
		}.bind(this),
	}).request();
}

function updateCart(){
	
}






