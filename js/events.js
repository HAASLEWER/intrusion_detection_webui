$( document ).ready(function() {
  // remove flowplayer watermark
  $('a[href$="http://flowplayer.org"]').remove();

  // Initialize video modal
  $('.video-modal-trigger').leanModal();  

  // Initialize image modal
  $('.image-modal-trigger').leanModal();

	jQuery.ajax( {
	    url: 'http://' + api_host + '/events?token=' + Cookies.get('token'),
	    type: 'GET',
	    dataType: 'JSON',
	    success: function(response) {
	        if (response.success == false) {
	        	console.log(response);
	        } else {
	        	console.log(response);        	
	        }
	    }
	} );
});

function changeImage(img) {
  $(".dynamic_modal_image").attr("src", img);
}