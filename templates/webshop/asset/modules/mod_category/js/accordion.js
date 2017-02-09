$(function() {
	// Ẩn tất cả .accordion trừ accordion đầu tiên
	$("#category-content .accordion").hide();
	
	$("#category-content h3.title-category").click(function(){
		$accordion = $(this).next();
		if ($accordion.is(':hidden') === true) {
			$("#category-content .accordion").slideUp();
			$accordion.slideDown();
		} else {
			$accordion.slideUp();
		}
	});
});