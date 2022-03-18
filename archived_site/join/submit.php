<?php
  $name = $_GET['name'];
  $crsid = $_GET['crsid'];

  $to = "cuplc-treasurer@srcf.net";
  $from = $crsid . "@cam.ac.uk";

  $subject = "Joining CUPLC";
  $subject2 = "Email sent";

  $message = "Auto generated message from " . $name;
  $message .=", who probably wants to join the club.";
  $message2 = "Your email has been sent. We will get in contact with you shortly.";

  $headers = "From:" . $from;

  mail($to,$subject,$message,$headers);
  mail($from,$subject2,$message2);
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
        <h2>Join CUPLC</h2>

        <p class="reg">Your message has been sent, we'll get back to you soon.</p>
        <p class="reg"><a href="../join.htm" class = "reg">Go back</a>.</p>
      </div>
    </div>
  </body>
</html>
