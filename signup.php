<?php include 'partials/header.php'; ?>

<!DOCTYPE html>
  <html>
    <head>
      <link rel="stylesheet" type="text/css" href="css/pace.css" media="screen,projection"/>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <!-- App specific styles -->
      <link rel="stylesheet" type="text/css" href="css/styles.css" media="screen,projection"/>
      <link rel="stylesheet" type="text/css" href="css/index.css" media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <title>Tetrasec</title>
    </head>

    <body>

    <div class="section"></div>
      <main>
        <center>
          <div class="section"></div>

          <h5 class="indigo-text">Please, sign-up</h5>
          <div class="section"></div>

          <div class="container">
            <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
              <a href="#" style="font-family: arkitech-medium; margin-left: -41px;" class="brand-logo center"><img src="img/tet.png" style="max-height: 50px; vertical-align: middle; margin-right: 10px;">tetrasec</a>
                <div class="row">
                  <form id="signup_form" class="col s12">
                    <div class="row">
                      <div class="input-field col s6">
                        <input id="name" type="text" class="validate" required="" aria-required="true">
                        <label for="name">Name</label>
                      </div>
                      <div class="input-field col s6">
                        <input id="surname" type="text" class="validate" required="" aria-required="true">
                        <label for="surname">Surname</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="email" type="email" class="validate" required="" aria-required="true">
                        <label for="email">Email</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="password" type="password" class="validate" required="" aria-required="true">
                        <label for="password">Password</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="conf_password" type="password" class="validate" required="" aria-required="true">
                        <label for="conf_password">Confirm Password</label>
                      </div>
                    </div> 
                      <center>
                        <div class="input-field col s12">
                            <button class="btn waves-effect waves-light" id="signup" type="submit" name="action">Submit</button>
                        </div>
                      </center>                  
                  </form>
                </div> 
            </div>
          </div>
        </center>

        <div class="section"></div>
        <div class="section"></div>
    </main>

      <?php include 'partials/footer.php'; ?>
      
      <script type="text/javascript" src="js/pace.min.js"></script>
      <script type="text/javascript" src="js/js.cookie.js"></script>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/particles.min.js"></script>
      <script type="text/javascript" src="js/particlesjs-config.json"></script>

      <script type="text/javascript" src="js/app.js"></script>
      <script type="text/javascript" src="js/signup.js"></script>
    </body>
  </html>