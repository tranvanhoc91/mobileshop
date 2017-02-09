/*
$(document).ready(function(){
	$(".demo").click(function(){
		$('.test').load('test.php');
	});
});
*/




$(document).ready(function(){
	//Neu bam nut ket qua
	var text = "aaa";
	$("#viewPollButton").click(function(){
		
		$("#waiting").show(500);
		$("#message").hide();
		$("#pollForm").hide();
		
		var t = $(".option").val();
		alert(t);
		
		//jQuery.ajax( url [, settings] )
		/*
		$.ajax({
			type : 'POST',
			url : 'post.php',
			dataType : 'json',
			data: {
				//email : $('#email').val()
				//lay ve poll_id qua vote[2]
				$('.option').val();
			},
				success : function(data){
					$('#waiting').hide(500);
					$('#message').removeClass().addClass((data.error === true) ? 'error' : 'success').text(data.msg).show(500);
					if (data.error === true)
						$('#pollForm').show(500);
				},
				error : function(XMLHttpRequest, textStatus, errorThrown) {
					$('#waiting').hide(500);
					$('#message').removeClass().addClass('error')
						.text('There was an error.').show(500);
					$('#pollForm').show(500);
				}
		});
		
		return false;
		*/
	});
	
	
	//Neu bam nut binh chon
	$("#voteButton").click(function(){
		alert("thuc thi roi show");
	});
});
