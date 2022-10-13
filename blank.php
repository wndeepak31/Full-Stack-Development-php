
<?php
    error_reporting(0);
    include_once ("config/connection.php");
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

 

      <?php include_once ('newsLetter.php'); ?>

      <?php include_once ('pageFooter.php'); ?>

    </div>
    </div>  

    <?php include_once ('tagsFooter.php'); ?>
</body>
</html>