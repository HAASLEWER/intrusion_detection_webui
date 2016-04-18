$( document ).ready(function() {
  // remove flowplayer watermark
  $('a[href$="http://flowplayer.org"]').remove();

  // Initialize video modal
  $('.video-modal-trigger').leanModal();  

  // Initialize image modal
  $('.image-modal-trigger').leanModal();
});

function changeImage(img) {
  $(".dynamic_modal_image").attr("src", img);
}