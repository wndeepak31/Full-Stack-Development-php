
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

        <!-- PAGE TITLE START -->
        <div class="page-title-cont page-title-small grey-light-bg">
          <div class="relative container align-left">
            <div class="row">
              
              <div class="col-md-8">
                <h1 class="page-title">WOMEN'S SHOES</h1>
              </div>
              
              <div class="col-md-4">
                <div class="breadcrumbs">
                  <a href="index.php">Home</a><span class="slash-divider">/</span><a href="product.php">SHOP</a><span class="slash-divider">/</span><span class="bread-current">SINGLE</span>
                </div>
              </div>
              
            </div>
          </div>
        </div>
        <!-- PAGE TITLE END -->

        <!-- PRODUCT DETAILS START -->
        <div class="page-section p-140-cont">
        <div class="container">
        <div class="row">
                
        <!-- ITEM PHOTO -->
        <div class="col-md-4 col-sm-12 mb-50" >

        <div class="post-prev-img popup-gallery">
        <a href="assets/images/shop/items/1.jpg"><img src="assets/images/shop/items/1.jpg" alt="img"></a>
        </div>
        <div class="sale-label-cont">
        <span class="sale-label label-danger bg-red">SALE</span>
        </div>  

        <div class="row">
        <div class="popup-gallery">
            
            <div class="col-xs-4 post-prev-img">
            <a href="assets/images/shop/items/1-1.jpg" ><img src="assets/images/shop/items/1-1-box.jpg" alt="img"></a>
            </div>
            
            <div class="col-xs-4 post-prev-img">
            <a href="assets/images/shop/items/1-2.jpg" ><img src="assets/images/shop/items/1-2-box.jpg" alt="img"></a>
            </div>
            
            <div class="col-xs-4 post-prev-img">
            <a href="assets/images/shop/items/1-3.jpg"><img src="assets/images/shop/items/1-3-box.jpg" alt="img"></a>
            </div>
            
        </div>
        </div>

        </div>                
            
        <!-- CONTENT -->
        <div class="col-md-7 col-sm-12 col-md-offset-1 mb-50">

        <h3 class="mt-0 mb-30">WOMEN'S SHOES</h3>

        <hr class="mt-0 mb-30">
        <div class="row">

        <div class="col-xs-6  mt-0 mb-30">
        <del>$130.00</del>
        <strong class="item-price">$98.55</strong>
        </div>

        <div class="col-xs-6 text-right">
        <span class="font-black"><i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i></span>
        <small><span class="slash-divider">/</span> 21 <span class="display-none-767">reviews</span> </small>
        </div>

        </div>

        <hr class="mt-0 mb-30">

        <div class="mb-30">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, molestias, nesciunt quis et excepturi deserunt repellendus libero sit obcaecati enim maiores molestiae eaque. Pariatur, quam nihil rerum unde sed beatae
        </div>

        <hr class="mt-0 mb-30">

        <div class="row">
        <div class="col-sm-6 mb-30">
        <form method="post" action="#" class="form">
            <select class="select-md input-border w-100">
                <option>Select size</option>
                <option>XXL</option>
                <option>XL</option>
                <option>L</option>
                <option>M</option>
                <option>S</option>
            </select>
        </form>
        </div>

        <div class="col-sm-6 mb-30">
        <form method="post" action="#" class="form">
            <select class="select-md input-border w-100">
            <option>Select color</option>
            <option>Black</option>
            <option>Blue</option>
            <option>White</option>
            </select>
        </form>
        </div>
        </div>

        <hr class="mt-0 mb-30">                

        <!-- ADD TO CART -->
        <div class="row mb-30">
        <form method="post" action="#" class="form">
        <div class="col-xs-4 col-sm-2 col-md-2 ">
            <input type="number" class="input-border" min="1" max="100" value="1">
        </div>
        <div class="col-xs-8 col-sm-10 col-md-6">
            <div class="post-prev-more-cont clearfix">
            <div class="shop-add-btn-cont">
                <a class="button medium gray shop-add-btn" href="#">ADD TO CART</a>
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
        </form>
        </div>

        <hr class="mt-0 mb-30">    

        <div class="font-12 lh-20 mb-30">
        <div>SKU: 8084</div>
        <div>Category: <a class="a-dark" href="#"> WOMEN'S SHOESs</a></div>
        <div>Tags: <a class="a-dark" href="#">WOMEN'S SHOES</a>, <a class="a-dark" href="#">blue shirt</a>, <a class="a-dark" href="#">men</a></div>
        </div>


        </div>

        </div>
        </div>

        <div class="container mb-100">
        <div>

        <div class="tabs-3">
        <ul class="nav nav-tabs xs-tabs-transform bootstrap-tabs">
        <li class="active">
        <a href="#one" data-toggle="tab">DESCRIPTION</a>
        </li>
        <li>
        <a href="#two" data-toggle="tab">PARAMETERS</a>
        </li>
        <li>
        <a href="#three" data-toggle="tab">RATINGS</a>
        </li>
        </ul>
        <!-- END nav tabs -->

        <!-- Tab panes -->
        <div class="tab-content">
        <div class="tab-pane fade in active" id="one">
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque mollis lacus augue, a hendrerit leo tristique vitae. Mauris non ipsum molestie, sagittis elit ac, vulputate odio. Fusce quam augue, gravida tincidunt dui nec, tempor iaculis justo.
            Aliquam tortor leo, pharetra non congue sit amet, bibendum sit amet enim. Nullam sit amet malesuada justo.
            </p>
            <p>
            Nunc vulputate semper erat, non iaculis sapien congue sit amet. Duis non nulla volutpat, dignissim leo sit amet, porta nunc. Donec placerat fermentum metus ac scelerisque. In id sollicitudin nulla. Suspendisse potenti. Integer aliquam orci 
            aliquam eros posuere ornare. Fusce augue felis, maximus non lacus vitae, ullamcorper dignissim leo. Ut congue feugiat turpis at aliquam. Donec eros neque, accumsan sed venenatis volutpat, tempor at metus.
            </p>
        </div>
        <div class="tab-pane fade" id="two">
            
            <table class="table table-striped table-bordered mt-30">
            <tbody>
                <tr>
                <th scope="row">Weight</th>
                <td>0.15 kg</td>
                </tr>
                <tr>
                <th scope="row">Size</th>
                <td>XXL, XL, L, M, S</td>
                <tr>
                </tr>
                <th scope="row">Colors</th>
                <td>Blue, Black, White</td>
                </tr>
                <tr>
                <th scope="row">Fabric</th>
                <td>Cotton, Silk & Synthetic</td>
                </tr>
                <tr>
                <th scope="row">Warranty</th>
                <td>3 Months</td>
                </tr>
            </tbody>
            </table>

        </div>

        <div class="tab-pane fade" id="three">

            <div class="mb-30">
            <ul class="media-list text comment-list">

                <!-- Comment Item -->
                <li class="media comment-item">
                    
                <a class="pull-left" href="#"><img class="media-object comment-avatar" src="assets/images/content/avatar-1.png" alt="ava"></a>
                    
                <div class="media-body">
                                        
                    <div class="comment-item-title">
                    <div class="comment-author">
                        <a href="#">Hugh Turner</a>
                    </div>
                    <div class="comment-date">
                        Jul 21, 2015, at 10:10<span class="slash-divider">-</span>
                        <span class="font-black">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        </span>
                    </div>
                    </div>
                    
                    <p class="pb-30">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut ante eleifend eleifend.</p>

                </div>

                </li>
                <!-- End Comment Item -->

                <!-- Comment Item -->
                <li class="media comment-item">
                    
                <a class="pull-left" href="#"><img class="media-object comment-avatar" src="assets/images/content/avatar-1.png" alt="ava"></a>
                                    
                <div class="media-body">
                                        
                    <div class="comment-item-title">
                    <div class="comment-author">
                        <a href="https://1.envato.market/a1gQR">JOHN DOE</a>
                    </div>
                    <div class="comment-date">
                        Jul 21, 2015, at 10:10<span class="slash-divider">-</span>
                        <span class="font-black">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        </span>
                    </div>
                    </div>
                                        
                    <p class="pb-30">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut ante eleifend eleifend.</p>
                    
                </div>

                </li>
                <!-- End Comment Item -->

            </ul>
            </div>
            
            <!-- Add Review -->
            <div class="grey-light-bg leave-comment-cont">
            <!-- TITLE -->
            <h4 class="blog-page-title mt-50 mb-25">ADD REVIEW</h4>              
            <div class="contact-form-container">
                <form id="contact-form" action="#" method="POST">
                <div class="row">
                    <div>
                    <div class="col-md-4 mb-30">
                        <!-- <label>Your name *</label> -->
                        <input type="text" value="" data-msg-required="Please enter your name" maxlength="100" class="controled" name="name" id="name" placeholder="NAME" required="">
                    </div>
                    <div class="col-md-4 mb-30">
                        <!-- <label>Your email address *</label> -->
                        <input type="email" value="" data-msg-required="Please enter your email address" data-msg-email="Please enter a valid email address" maxlength="100" class="controled" name="email" id="email" placeholder="EMAIL" required="">
                    </div>
                    <div class="col-md-4 mb-30">
                        <select class="w-100 uppercase">
                        <option>Select a rating</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        </select>
                    </div>
                    </div>
                </div>
                
                <div class="row">
                    <div>
                    <div class="col-md-12 mb-40">
                        <!-- <label>Message *</label> -->
                        <textarea maxlength="5000" data-msg-required="Please enter your message" rows="3" class="controled" name="message" id="message" placeholder="COMMENT" required=""></textarea>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                    <input type="submit" value="SEND MESSAGE" class="button medium gray" data-loading-text="Loading...">
                    </div>
                </div>
                </form>	
                <div class="alert alert-success hidden animated fadeIn" id="contactSuccess" >
                <strong>Success!</strong> Your message has been sent to us.
                </div>

                <div class="alert alert-danger hidden animated shake" id="contactError">
                <strong>Error!</strong> There was an error sending your message.
                </div>
            </div>
            </div>
            <!-- End Add Review -->
                
        </div>
        </div>
        <!-- END tab panes -->
        </div>
        <!-- END tabs  -->

        </div>
        </div>

        <hr class="mt-0 mb-80"> 

        <!-- RELATED PRODUCTS -->
        <div class="container">
        <div class="row">

        <div class="col-md-12">
        <h4 class="blog-page-title mt-0 mb-40">RELATED PRODUCTS</h4>
        </div>

        <div class="owl-3items-nav owl-carousel owl-arrows-bg" >

                <div class="item mb-0 text-center">

        <!-- SHOP Item 1 -->
        <div>

        <div class="post-prev-img">
        <a href="shop-single.html"><img src="assets/images/shop/items/1.jpg" alt="img"></a>
        </div>

        <div class="post-prev-title mb-5">
        <h3><a class="font-norm a-inv" href="shop-single.html">SUNGLASSES</a></h3>
        </div>

        <div class="shop-price-cont">
        <strong>$90.15</strong>
        </div>

        </div>

        </div>

                <div class="item mb-0 text-center">

        <!-- SHOP Item 1 -->
        <div>

        <div class="post-prev-img">
        <a href="shop-single.html"><img src="assets/images/shop/items/2.jpg" alt="img"></a>
        </div>

        <div class="post-prev-title mb-5">
        <h3><a class="font-norm a-inv" href="shop-single.html">HEM SHELL TOP</a></h3>
        </div>

        <div class="shop-price-cont">
        <strong>$100.75</strong>
        </div>

        </div>

        </div>

        <div class="item mb-0 text-center">

        <!-- SHOP Item 1 -->
        <div >

        <div class="post-prev-img">
        <a href="shop-single.html"><img src="assets/images/shop/items/3.jpg" alt="img"></a>
        </div>

        <div class="post-prev-title mb-5">
        <h3><a class="font-norm a-inv" href="shop-single.html">MEN'S SHOES</a></h3>
        </div>

        <div class="shop-price-cont">
        <strong>$98.55</strong>
        </div>

        </div>

        </div>

        <div class="item mb-0 text-center">

        <!-- SHOP Item 1 -->
        <div  >

        <div class="post-prev-img">
        <a href="shop-single.html"><img src="assets/images/shop/items/4.jpg" alt="img"></a>
        </div>

        <div class="post-prev-title mb-5">
        <h3><a class="font-norm a-inv" href="shop-single.html">WOMEN'S SHOES</a></h3>
        </div>

        <div class="shop-price-cont">
        <strong>$98.55</strong>
        </div>

        </div>

        </div>

        <div class="item mb-0 text-center">

        <!-- SHOP Item 1 -->
        <div >

        <div class="post-prev-img">
        <a href="shop-single.html"><img src="assets/images/shop/items/5.jpg" alt="img"></a>
        </div>

        <div class="post-prev-title mb-5">
        <h3><a class="font-norm a-inv" href="shop-single.html">WOMEN'S SHOES</a></h3>
        </div>

        <div class="shop-price-cont">
        <strong>$70.99</strong>
        </div>

        </div>

        </div>

        <div class="item mb-0 text-center">

        <!-- SHOP Item 1 -->
        <div>

        <div class="post-prev-img">
        <a href="shop-single.html"><img src="assets/images/shop/items/6.jpg" alt="img"></a>
        </div>

        <div class="post-prev-title mb-5">
        <h3><a class="font-norm a-inv" href="shop-single.html">WOMEN'S SHOES</a></h3>
        </div>

        <div class="shop-price-cont">
        <strong>$29.55</strong>
        </div>

        </div>

        </div>

        </div>

        </div>
        </div>
        </div>
    <!-- PRODUCT DETAIL END -->

        <?php include_once ('shop_info.php'); ?>

        <?php include_once ('newsLetter.php'); ?>

        <?php include_once ('pageFooter.php'); ?>

    </div>
    </div>  

    <?php include_once ('tagsFooter.php'); ?>
</body>
</html>