jQuery.noConflict();
(function($) { 
  $(function() {
    // more code using $ as alias to jQuery
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
})(jQuery);
