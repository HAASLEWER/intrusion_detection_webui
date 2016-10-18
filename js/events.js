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
    if (item.image) {
        ul += '<li class="collection-item avatar">';
        ul += '<i class="material-icons circle blue">storage</i>';
        ul += '<span class="title">' + date + '</span>';
        ul += '<p>Event <br>';
        ul += '<div class="image-container">';
        ul += '<a href="#image_modal" class="image-modal-trigger" onclick="addImage(\'' + item.image + '\')" data_image_path="' + item.image + '" ><img src="' + item.image + '" /></a>';
        ul += '</div></p>';
        ul += '</li>';
    } else {
        ul += '<li class="collection-item avatar">';
        ul += '<i class="material-icons circle blue">storage</i>';
        ul += '<span class="title">' + date + '</span>';
        ul += '<p>Video <br>';
        ul += '<div class="image-container">';
        ul += '<a href="#video_modal" class="video-modal-trigger" onclick="addVideo(\'' + item.video + '\')" data_image_path="' + item.video + '" ><img src="//lh3.ggpht.com/OOXV4V9YyovafA10xZhq0QgWNwFwCEhMI9kWJ2FDkjMmLa7rDWJmSmnsgOtMWdDGg3A=w300" /></a>';
        ul += '</div></p>';
        ul += '</li>';
    }

    if (index == items.length-1) {
      ul += '</ul>';
      $('.events_container').html(ul);
      $('.image-modal-trigger').leanModal();
      $('.video-modal-trigger').leanModal();
    }      
	});
}

function addImage(image) {	
	$('#image-modal-src').attr("src", image);
}

function addVideo(video) {  
console.log(video);  
  $('#video-modal-src').attr("src", video);
  $("#video")[0].load();
}