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

      <main>
        <div class="parallax-container">
          <div class="parallax"><img src="img/parallax.jpg"></div>
          <div id="particles-js"></div>
        </div>

        <div class="container icon-container">
          <div class="section">
            <div class="row">
              <div class="col s12 m4">
                <div class="icon-block">
                  <h2 class="center brown-text"><i class="material-icons">https</i></h2>
                  <h5 class="center">Automate Security Monitoring</h5>

                  <p class="light">By utilizing elements and principles of Computer Vision, Tetrasec was able to create a framework that incorporates software automation and closed circuit television in a way that provides users with immediate notification on threates. Additionally, a single underlying responsive system across all platforms allows for a unified user experience.</p>
                </div>
              </div>

              <div class="col s12 m4">
                <div class="icon-block">
                  <h2 class="center brown-text"><i class="material-icons">fingerprint</i></h2>
                  <h5 class="center">Identify Threats in Real Time</h5>

                  <p class="light">Tetrasec allows you to check on the safety of your loved ones live, from anywhere in the world and from any device.</p>
                </div>
              </div>

              <div class="col s12 m4">
                <div class="icon-block">
                  <h2 class="center brown-text"><i class="material-icons">speaker_phone</i></h2>
                  <h5 class="center">Immediate Threat Notifications</h5>

                  <p class="light">Be alerted the moment a threat is identified, with personalised notifications that include images of the detected threat so that you can take action immediately.</p>
                </div>
              </div>
            </div>
          </div>
        </div>   
             
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
      <script type="text/javascript" src="js/index.js"></script>
    </body>
  </html>