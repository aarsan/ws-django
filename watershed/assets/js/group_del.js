jQuery('document').ready(function($){

	// Attach a function to the 'click' event for our links
	$('a.ajax_link').click(function(){

		var user, data;
		user = $(this).attr('href');
		user = user.substr(1);
		data = {'user':user};
/*
		$.getJSON('$array' {

		});
*/
		$.ajax({
			type: 'POST', // GET is available if we prefer
			url: '/groups/dissolve/'<?php echo $org_ID; ?>,
			data: data,
			success: function(data){
			//success: function(){
				// This function runs if the PHP script is successfully called
				// Here we are simply populating a specified div with the HTML that our script has sent back to us
				$('#data_box').html(data);
				//$('#data_box').html;
				//alert('It Worked!');
			}
		});
		// Always think about using return false on a click event to stop the screen from jumping
		//return false;
	});


});