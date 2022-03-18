<?php
  $to = "cuplc-webmaster@srcf.net";

  $subject = "New Record";

  $message = "New record from " . $_GET['name'] . 
  			 " (" . $_GET['gender'] . ", " . $_GET['bodyweight'] . 
  			 "):\n  Record:   " . $_GET['lift'] . 
  			   "\n  Evidence: " . $_GET['evidence'];

  mail($to,$subject,$message);
?>
<html>
  <head>
    <title>Cambridge University Powerlifting Club</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
  </head>

  <body>

    <div id="main">

      <script src="nav.js"></script>

      <div id="content">
        <h2>Club Records</h2>

        <p class="reg">Your record has been submitted and should be updated soon.</p>
        <p class="reg"><a href="records_club.htm" class = "reg">Go back</a>.</p>
      </div>
    </div>
  </body>
</html>
