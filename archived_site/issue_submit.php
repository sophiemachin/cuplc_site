<?php
  $issue = $_GET['issue'];

  $to = "cuplc-webmaster@srcf.net";

  $subject = "CUPLC website issue";

  $message = "Auto generated website bug report:\n";
  $message .= $issue;

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
        <h2>Report a website issue</h2>

        <p class="reg">Your message has been sent, the problem should be fixed soon.</p>
        <p class="reg"><a href="index.htm" class = "reg">Go back</a>.</p>
      </div>
    </div>
  </body>
</html>
