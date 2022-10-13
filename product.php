<?php

include_once ('config/connection.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once ('tagsHeader.php'); ?>
    <title>E-Commerce</title>
</head>
<body>
    <div id="wrap" class="boxed">
    <div class="container grey-bg">
    <?php include_once ('pageNavbar.php'); ?> 

    <!-- CONTENT START -->
    <div class="page-section p-140-cont">
        <div class="conatiner">
            <div class="row">
                <!-- SORT BY START -->
                <div class="col-sm-12">
                <div class="clearfix mb-70">
                <div class="left font-12">
                    SHOWING 1–10 OF 21 RESULTS
                </div>
                
                <div class="right">
                    <form method="post" action="#" class="form">
                        <select class="select-md">
                            <option>Sort by</option>
                            <option>Price: low to high</option>
                            <option>Price: high to low</option>
                        </select>
                    </form>
                </div>
                </div>
                <!-- SORT BY END -->

                <!-- SHOW PRODUCT START -->
                <div class="row">
                    <?php
                    $query_1=mysqli_query( $link , "SELECT * FROM product_master WHERE Publish='Yes' ");

                    while($result=mysqli_fetch_array($query_1)){
                        $newStyleName=$result['StyleName'];
                        $newProdTitle=$result['ProdTitle'];
                        $newProdCode=$result['ProdCode'];
                        $newMetalWt=$result['MetalWt'];
                        $newImage_1_1=$result['Image_1_1'];
                        $newDia2Price=$result['Dia2Price'];

                        ?>

                        <div class="col-md-3 col-lg-3 pb-80" >
                                
                                <div class="post-prev-img">
                                <a href="productDetails.php"><img src="./prodPictures/<?=$newImage_1_1?>" alt="img"></a>
                                </div>
                                <!-- <div class="sale-label-cont">
                                <span class="sale-label label-danger bg-red">SALE</span>
                                </div>   -->
                                <div class="post-prev-title mb-5">
                                <h3><a class="font-norm a-inv" href="productDetails.php"><?=$newProdTitle?></a></h3>
                                </div>
                                
                                <div class="shop-price-cont">
                                <del>$130.00</del>&nbsp;<strong><?=$newDia2Price?></strong>
                                </div>
                                
                                <div class="post-prev-more-cont clearfix">
                                <div class="shop-add-btn-cont">
                                    <a class="button medium gray-light shop-add-btn" href="#">ADD TO CART</a>
                                </div>
                                <div class="shop-sub-btn-cont" >
                                    <a href="#" class="post-prev-count"><span aria-hidden="true" class="icon_heart_alt"></span></a>
                                    <a href="#" class="post-prev-count dropdown-toggle" data-toggle="dropdown" aria-expanded="false" >
                                    <span aria-hidden="true" class="social_share"></span>
                                    </a>
                                    <ul class="social-menu dropdown-menu dropdown-menu-right" role="menu">
                                    <li><a href="#"><span aria-hidden="true" class="social_facebook"></span></a>
                                    </li>
                                    <li><a href="#"><span aria-hidden="true" class="social_twitter"></span></a></li>
                                    <li><a href="#"><span aria-hidden="true" class="social_dribbble"></span></a></li>
                                    </ul>
                                </div>
                                </div>
                            </div> 

                        <?php

                    
                    }
                    
                    ?>
                    <!-- SHOP Item -->
                    
                </div>
                <!-- SHOW PRODUCT END -->
                
            </div>
        </div>
    </div> 
    
    <!-- CONTENT END -->
      

    </div>
    </div>  
      
    <?php include_once ('pageFooter.php'); ?>

</body>
</html>