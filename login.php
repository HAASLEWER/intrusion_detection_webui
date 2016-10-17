<!DOCTYPE html>
<html>

<head>

<!--Import Google Icon Font-->
<link rel="stylesheet" type="text/css" href="css/pace.css" media="screen,projection"/>
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

<link rel="stylesheet" type="text/css" href="css/styles.css" media="screen,projection"/>

<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<title>Tetrasec - Login</title>

</head>

<body>

<?php include 'partials/header.php'; ?>

<div class="section"></div>
  <main>
    <center>
      <div class="section"></div>

      <h5 class="indigo-text">Please, login into your account</h5>
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

          <form class="col s12">

            <a href="#" style="font-family: arkitech-medium; margin-left: -41px;" class="brand-logo center"><img src="img/tet.png" style="max-height: 50px; vertical-align: middle; margin-right: 10px;">tetrasec</a>

            <div class='row' id="login-error" style="display: none;">
				      <label style="text-align: center;"><div id="login-error-msg"></div></label>
            </div>            

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='email' name='email' id='email' required="" />
                <label for='email' style="text-align: left;">Email</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='password' name='password' id='password' required="" />
                <label for='password' style="text-align: left;">Password</label>
              </div>
              <label style='float: right;'>
        				<a class='pink-text' href='#!'><b>Forgot Password?</b></a>
      			  </label>
            </div>

            <br />
            <center>
              <div class='row'>
                <button type='button' name='btn_login' id='btn_login' class='col s12 btn btn-large waves-effect indigo'>Login</button>
              </div>
            </center>
          </form>
        </div>
      </div>
    </center>

    <div class="section"></div>
    <div class="section"></div>
</main>

<?php include 'partials/footer.php'; ?>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="js/pace.min.js"></script>
<script type="text/javascript" src="js/js.cookie.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript" src="js/login.js"></script>

</body>
</html>