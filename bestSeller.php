<!-- SHOP ITEMS -->
<div class="page-section pt-110-b-30-cont">
    <div class="container">
        
    <div class="mb-50">
        <h2 class="section-title pr-0">BEST <span class="bold">SELLERS</span><a href="product.php" class="section-more right">MORE</a>
            </h2>
    </div>

    <div class="row">
        <?php 
        $query_1=mysqli_query( $link , "SELECT * FROM product_master WHERE Publish='Yes' LIMIT 4 " );
        while($view_1=mysqli_fetch_array($query_1)){
            $newStyleName=$view_1['StyleName'];
            $newProdTitle=$view_1['ProdTitle'];
            $newProdCode=$view_1['ProdCode'];
            $newMetalWt=$view_1['MetalWt'];
            $newImage_1_1=$view_1['Image_1_1'];
            $newDia2Price=$view_1['Dia2Price'];

            ?>

            <!-- SHOP Item 1 -->
            <div class="col-sm-6 col-md-3 col-lg-3 wow fadeIn pb-70" >
            
            <div class="post-prev-img">
                <a href="shop-single.html"><img src="prodPictures/<?=$newImage_1_1?>" alt="img"></a>
            </div>
            <!-- <div class="sale-label-cont">
                <span class="sale-label label-danger bg-red">SALE</span>
            </div>   -->
            <div class="post-prev-title mb-5">
                <h3><a class="font-norm a-inv" href="shop-single.html"><?=$newProdTitle?></a></h3>
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
        
               

    </div>

    </div>
</div>