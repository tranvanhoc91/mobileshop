jQuery(function(){
	jQuery("a.tab").click(function(){
		//huy class active cua cai a hien tai
		jQuery("a.active").removeClass("active");
		//them active vao class cua tags dc click
		jQuery(this).addClass("active");
		//an cai noi dung cua the tags a cu di
		
		jQuery("div.content").slideUp();
		//Hien noi dung cua tags dc click
		//muon hien noi dung cua tags click lay ve title cua no roi dua vao title show div co id = title
		var content_show = jQuery(this).attr("title");
		jQuery("#" + content_show).slideDown();
	});
});


