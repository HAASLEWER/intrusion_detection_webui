$(function() {
	$("#btn_login").on( "click", function() {
		jQuery.ajax( {
		    url: 'http://' + api_host + '/auth',
		    type: 'POST',
		    dataType: 'JSON',
		    data: { email: $('#email').val(), password: $('#password').val() },
		    success: function(response) {
		        if (response.success == false) {
		        	$('#login-error').show();
		        	$('#login-error-msg').html(response.message);
		        } else {
		        	Cookies.set('token', response.token);	
		        	Cookies.set('user_id', response.user_id);	        	
					window.location = "events.php";	        	
		        }
		    }
		} );	
	});
	
	$("#password").keyup(function(event){
	    if(event.keyCode == 13){
	        $("#btn_login").click();
	    }
	});	
});