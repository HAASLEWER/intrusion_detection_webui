<?php include 'partials/header_auth.php'; ?>
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

      <link rel="stylesheet" type="text/css" href="css/live.css" media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Live Stream</title>

      <style type="text/css">
        #videoCanvas {
                /* Always stretch the canvas to 640x480, regardless of its
                internal size. */
                width: 640px;
                height: 480px;
    		padding-left: 0;
    		padding-right: 0;
    		margin-left: auto;
   		margin-right: auto;
    		display: block;		
        }
      </style>

    </head>

    <body>

        <!-- The Canvas size specified here is the "initial" internal resolution. jsmpeg will
                change this internal resolution to whatever the source provides. The size the
                canvas is displayed on the website is dictated by the CSS style.
        -->
	<br />
  <div class="video-container">
        <canvas id="videoCanvas">
                <p>
                        Please use a browser that supports the Canvas Element, like
                        <a href="http://www.google.com/chrome">Chrome</a>,
                        <a href="http://www.mozilla.com/firefox/">Firefox</a>,
                        <a href="http://www.apple.com/safari/">Safari</a> or Internet Explorer 10
                </p>
  </div>
        </canvas>
        <script type="text/javascript" src="js/jsmpg.js"></script>
        <script type="text/javascript">
                // Setup the WebSocket connection and start the player
                var client = new WebSocket( 'ws://154.0.13.81:8084/' );

                var canvas = document.getElementById('videoCanvas');
                var player = new jsmpeg(client, {canvas:canvas});
        </script>
  
             
      </main>

      <?php include 'partials/footer_auth.php'; ?>      

      <script type="text/javascript" src="js/pace.min.js"></script>
      <script type="text/javascript" src="js/js.cookie.js"></script>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>

      <script type="text/javascript" src="js/app.js"></script>
    </body>
  </html>
