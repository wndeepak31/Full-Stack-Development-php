
<?php
    error_reporting(0);
    include_once ("config/connection.php");

    // We need to use sessions, so you should always start sessions using the below code.
    // session_start();
    // If the user is not logged in redirect to the login page...
    /*
    if (!isset($_SESSION['loggedin'])) {
      header('Location: index.php');
      exit;
    }
    */
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once ('tagsHeader.php'); ?>
    <title>E-Commerce</title>
</head>
<body>
    <!-- LOADER -->	
    <div id="loader-overflow">
      <div id="loader3">Please enable JS</div>
    </div>
    
    <div id="wrap" class="boxed">
    <div class="grey-bg">
      <?php include_once ('pageNavbar.php'); ?> 

      <?php include_once ('slider_flex.php'); ?> 

      <?php include_once ('shop_collection.php'); ?>

      <?php include_once ('shop_ad.php'); ?> 

      <?php include_once ('bestSeller.php'); ?> 

      <?php include_once ('shop_info.php'); ?>

      <?php include_once ('clients.php'); ?>

      <?php include_once ('newsLetter.php'); ?>

      <?php include_once ('pageFooter.php'); ?>

    </div>
    </div>  

    <?php include_once ('tagsFooter.php'); ?>
</body>
</html>