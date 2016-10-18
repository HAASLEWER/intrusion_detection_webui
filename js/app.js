var api_host = '154.0.13.81:8080';

$(document).ready(function() {
	// Initialize collapse button
	$(".button-collapse").sideNav();
	// Initialize paralax container
	$('.parallax').parallax();

	checkToken();
});

function checkToken() {	
	var location = window.location;
	var token = Cookies.get('token');
	var user_id = Cookies.get('user_id')

	if (location.pathname == '/login.php') {
		return;
	}

	if (token == null || token == '') {
		window.location = '/login.php'
	}
}

function getParameterByName(name, url, cb) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    cb(decodeURIComponent(results[2].replace(/\+/g, " ")));
}

$(document).ajaxStart(function() { Pace.restart(); })