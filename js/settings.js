$( document ).ready(function() {
  // remove flowplayer watermark
  $('a[href$="http://flowplayer.org"]').remove();

  // Initialize video modal
  $('.video-modal-trigger').leanModal();  

  // Initialize image modal
  $('.image-modal-trigger').leanModal();

  jQuery.ajax( {
    url: 'http://' + api_host + '/users/' + Cookies.get('user_id') + '/?token=' + Cookies.get('token'),
    type: 'GET',
    dataType: 'JSON',
    success: function(response) {
        if (response.success == false) {
          console.log(response);
        } else {
          populateUserForm(response.result[0]);       
        }
    }
  });
});

var password = document.getElementById("password");
var confirm_password = document.getElementById("conf_password");

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;

$('#signup_form').submit(function(){
  //update();

  return false;
});

function validatePassword() { 
  if (password.value !== conf_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

function populateUserForm(info) {
    $('#name').val(info.name);
    $('#surname').val(info.surname);
    $('#email').val(info.email);
    $('#password').val(info.password);   
    if (Cookies.get('user_id') == '57113dae6ecf838da986fa17') {
      $('#camera').val('571145b08305142aaa37d074');
    } else {
      $('#camera').val('');
    }
}

function uodate() {
    var name = $('#name').val();
    var surname = $('#surname').val();
    var email = $('#email').val();
    var password = $('#password').val();
    var payload = {name: name, surname: surname, email: email, password: password, admin: "false", system_id: "222"};

    jQuery.ajax( {
        url: 'http://' + api_host + '/users?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6IjU3MTEzZGFlNmVjZjgzOGRhOTg2ZmExNyIsIm5hbWUiOiJMZWhhbiIsInN1cm5hbWUiOiJDb2V0emVlIiwiZW1haWwiOiJjb2V0emVlbEBsaXZlLmNvLnphIiwiYWRtaW4iOnRydWUsInN5c3RlbV9pZCI6IiIsImlhdCI6MTQ3NjUzMzk1MSwiZXhwIjoxNDg2NTMzOTUwfQ.Eb6IMloV8xKCWoaUgL-JuDS09m7Trh4SE8v-v-YAJEI',
        type: 'PUT',
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