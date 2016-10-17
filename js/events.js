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
	       		createEventList(response.result);     	
	        }
	    }
	} );
});

function changeImage(img) {
  $(".dynamic_modal_image").attr("src", img);
}

function createEventList(items) {
	var ul = '<ul class="collection">';
	items.forEach(function(item, index) {
		var date = new Date(item.datetime).toLocaleString();
		ul += '<li class="collection-item avatar">';
        ul += '<i class="material-icons circle blue">storage</i>';
        ul += '<span class="title">' + date + '</span>';
        ul += '<p>Events <br>';
        ul += '<div class="image-container">';
        ul += '<a href="#image_modal" class="image-modal-trigger" onClick="' + item.image + '"><img src="' + item.image + '" /></a>';
        ul += '</div></p>';
        ul += '<a href="#video_modal" class="secondary-content video-modal-trigger"><i class="material-icons">play_arrow</i></a></li>';

        if (index == items.length-1) {
        	ul += '</ul>';
        	$('.events_container').html(ul);
        }
	});
}