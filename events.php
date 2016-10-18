<?php include 'partials/header_auth.php'; ?>
  <!DOCTYPE html>
  <html>
    <head>
      <link rel="stylesheet" type="text/css" href="css/pace.css" media="screen,projection"/>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <!-- flowplayer css -->
      <link rel="stylesheet" href="//releases.flowplayer.org/6.0.5/skin/minimalist.css">      
      <!-- App specific styles -->
      <link rel="stylesheet" type="text/css" href="css/styles.css" media="screen,projection"/>
      <link rel="stylesheet" type="text/css" href="css/events.css" media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <title>Events</title>
    </head>

    <body>

      <main>
        <br />
        <div class="container">
          <div class="events_container"></div>

          <div id="image_modal" class="modal">
            <div class="modal-content">
              <img id="image-modal-src" src="img/test1.png" class="dynamic_modal_image" />
            </div>  
            <div class="modal-footer">
              <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
            </div>
          </div>  

        </div>    
      </main>

      <?php include 'partials/footer_auth.php'; ?>    

      <script type="text/javascript" src="js/pace.min.js"></script>
      <script type="text/javascript" src="js/js.cookie.js"></script>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>

      <script type="text/javascript" src="js/app.js"></script>
      <script type="text/javascript" src="js/events.js"></script>
    </body>
  </html>