<?php
  session_start();
  include("functions.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Joarc and Gustavwiz">
    <title>Begining work of this project!</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/global.css" rel="stylesheet">
  </head>
  <body>
    <div class="fluid-container">
      <?php if ($_SESSION['logged_in']) { ?>
        <?php include("index.main.php"); ?>
      <?php } else { ?>
        <?php include("index.login.php"); ?>
      <?php } ?>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
