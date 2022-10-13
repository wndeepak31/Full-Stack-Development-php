
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

        <!-- CONTACT PAGE START -->

        <!-- GOOGLE MAP & CONTACT FORM -->
        <div class="page-section" style="padding-top: 50px;">
            <div class="container-fluid">
              <div class="row">
              
                <div class="col-md-6">
                  <div class="row">
                    <!-- <div data-address="580 California Street, San Francisco, CA" id="google-map"></div> -->
                
                <!-- *This is an example of using latitude and longitude if you need to use them instead of an address. Read more in the documentation.* -->
                <div data-latitude="37.792888" data-longitude="-122.404041" id="google-map"></div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="contact-form-cont">
                    <!-- TITLE -->
                    <div class="mb-40">
                      <h2 class="section-title">CONTACT <span class="bold">US</span></h2>
                    </div>
                                  
                    <!-- CONTACT FORM -->
                    <div>
                      <form id="contact-form" action="php/contact-form.php" method="POST">
                      
                        <div class="row">
                          <div class="col-md-12 mb-30">
                            <!-- <label>Your name *</label> -->
                            <input type="text" value="" data-msg-required="Please enter your name" maxlength="100" class="controled" name="name" id="name" placeholder="NAME" required>
                          </div>
                        </div>
                        
                        <div class="row">    
                          <div class="col-md-12 mb-30">
                            <!-- <label>Your email address *</label> -->
                            <input type="email" value="" data-msg-required="Please enter your email address" data-msg-email="Please enter a valid email address" maxlength="100" class="controled" name="email" id="email" placeholder="EMAIL" required>
                            </div>
                        </div>
                    
                        <div class="row">
                          <div class="col-md-12 mb-40">
                            <!-- <label>Message *</label> -->
                            <textarea maxlength="5000" data-msg-required="Please enter your message" rows="3" class="controled" name="message" id="message" placeholder="MESSAGE" required></textarea>
                          </div>
                        </div>
                        
                        <div class="row">
                          <div class="col-md-12 text-center-xxs">
                            <input type="submit" value="SEND MESSAGE" class="button medium gray" data-loading-text="Loading...">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="checkbox small">
                              <label><input type="checkbox" value="privacy" data-msg-required="Please accept the terms" id="agree" name="agree" class="checkbox" required>I agree to the terms of service</label>
                            </div>
                          </div>
                        </div>
                        
                      </form>	
                      <div class="alert alert-success hidden animated fadeIn" id="contactSuccess" >
                        Thanks, your message has been sent to us.
                      </div>
                    
                      <div class="alert alert-danger hidden animated shake" id="contactError">
                        <strong>Error!</strong> There was an error sending your message.
                      </div>
                    </div>
                  </div>
                </div>
                  
              </div>
            </div>
        </div>
        <!-- CONTACT PAGE END -->

        <!-- CONTACT INFO SECTION START -->
        <!-- CONTACT INFO SECTION 1 -->
        <div id="contact-link" class="page-section p-110-cont footer2-black">
            <div class="container">
              <div class="row">
              
                <div class="col-md-4 col-sm-6">
                  <div class="cis-cont">
                    <div class="cis-icon">
                      <div class="icon icon-basic-map"></div>
                    </div>
                    <div class="cis-text">
                      <h3><span class="bold" style="color: white;">ADDRESS</span></h3>
                      <p>790 FOLSOM AVE, SAN FRANCISCO</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="cis-cont">
                    <div class="cis-icon">
                      <div class="icon icon-basic-mail"></div>
                    </div>
                    <div class="cis-text">
                      <h3><span class="bold" style="color: white;">EMAIL</span></h3>
                      <p><a href="mailto:info@haswell.com">INFO@HASWELL.COM</a></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="cis-cont">
                    <div class="cis-icon">
                      <div class="icon icon-basic-smartphone"></div>
                    </div>
                    <div class="cis-text">
                      <h3><span class="bold" style="color: white;">CALL US</span></h3>
                      <p>1-800-312-212, 1-800-311-101</p>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>        
        </div> 
        <!-- CONTACT INFO SECTION END -->

        <?php include_once ('newsLetter.php'); ?>

        <?php include_once ('pageFooter.php'); ?>

    </div>
    </div>  

    <?php include_once ('tagsFooter.php'); ?>
</body>
</html>