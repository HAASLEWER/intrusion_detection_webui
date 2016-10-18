$( document ).ready(function() {
  // remove flowplayer watermark
  $('a[href$="http://flowplayer.org"]').remove();

  // Initialize video modal
  $('.video-modal-trigger').leanModal();  

  // Initialize image modal
  $('.image-modal-trigger').leanModal();
});

var password = document.getElementById("password");
var confirm_password = document.getElementById("conf_password");

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;

$('#signup_form').submit(function(){
  signUp();

  return false;
});

function validatePassword() { 
  if (password.value !== conf_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

function signUp() {
    var name = $('#email').val();
    var surname = $('#email').val();
    var email = $('#email').val();
    var password = $('#email').val();
    var conf_password = $('#email').val();
    var payload = {name: name, surname: surname, email: email, password: password, admin: "false", system_id: "222"};

    jQuery.ajax( {
        url: 'http://' + api_host + '/users',
        type: 'POST',
        dataType: 'JSON',
        data: payload,
        success: function(response) {
            if (response.success == false) {
              $('#login-error').show();
              $('#login-error-msg').html(response.message);
            } else {               
              window.location = "login.php";           
            }
        }
    } );
}