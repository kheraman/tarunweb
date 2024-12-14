<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Contact </title>

<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

<script language="javascript">




function onsubmitform()
{
	if(document.getElementById('name').value=='')
	{
		alert('Please enter Full Name');
		document.getElementById('name').focus();
		return false;
	}
	if(document.getElementById('email').value=='')
	{
		alert('Please enter Email');
		document.getElementById('email').focus();
		return false;
	}

   var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
   if(!document.getElementById('email').value.match(mailformat))  
   {  
	   alert('Please enter valid Email');
	   document.getElementById('email').focus();
	  
	  return false; 
   }
   if(document.getElementById('subject').value=='')
	{
		alert('Please enter subject');
		document.getElementById('subject').focus();
		return false;
	}
   

	if(document.getElementById('phone').value=='')
	{
		alert('Please enter Phone');
		document.getElementById('phone').focus();
			return false;
	}
	
	  
   if(document.getElementById('message').value=='')
	{
		alert('Please enter Message');
		document.getElementById('message').focus();
		return false;
	}
   if(document.getElementById('captcha').value=='')
	{
		alert('Please enter Captcha');
		document.getElementById('captcha').focus();
		return false;
	}
	
	
}




</script>
</head>

<body>

<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Header Span -->
    <span class="header-span"></span>

    <!-- Main Header-->
     <?php include("header.php");?>
    <!--End Main Header -->

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Contact</h2>
                <span class="divider"></span>
                <div class="text">Explore some of the best tips from around the city from our partners and friends.</div>
            </div>

            <div class="row">
                <!-- Map Column >
                <div class="map-column col-lg-7 col-md-12 col-sm-12">
                    <!-- Business Info Widget >
                    <div class="business-info-widget ls-widget">
                        <div class="widget-title">
                            <h4><span class="icon flaticon-call"></span>Contact Info</h4>
                        </div>
                        <div class="widget-content">
                            <!--div class="map-box">
                                <div class="map-canvas"
                                    data-zoom="12"
                                    data-lat="-37.817085"
                                    data-lng="144.955631"
                                    data-type="roadmap"
                                    data-hue="#ffc400"
                                    data-title="Envato"
                                    data-icon-path="images/icons/map-marker.png"
                                    data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                                </div>
                            </div>

                            <ul class="contact-info-list">
                                <li><span class="icon flaticon-pin"></span> 484 Ellis St, San Francisco, CA 94102,<br> United States</li>
                                <li><span class="icon flaticon-call"></span> <a href="tel:61282369200">+61 2 8236 9200 </a></li>
                                <li><span class="icon flaticon-mail"></span> <a href="mailto:support@listdo.com">support@listdo.com </a></li>
                                <li><span class="icon flaticon-unlink"></span> <a href="www.listdo.com">www.listdo.com</a></li>
                            </ul>

                            <ul class="social-icon-two">
                                <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                <li><a href="#"><span class="fab fa-pinterest"></span></a></li>
                                <li><a href="#"><span class="fab fa-dribbble"></span></a></li>
                                <li><a href="#"><span class="fab fa-google"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div-->

                <div class="contact-column col-lg-12 col-md-12 col-sm-12">
                    <!-- Contact Widget -->
                    <div class="contact-widget ls-widget">
                        <div class="widget-title"><h4><span class="icon flaticon-list"></span>Contact business</h4></div>
                        <div class="widget-content">
                            <!-- Comment Form -->
                            <div class="default-form">
                                <!--Comment Form-->
								<?php
								if($_GET['value'] == "thanks")
								{
									?>
									
									<div class="col-lg-12">
											<div class="row" style="color:green;">		
														Thanks for contacting us. Our representative will get back to you soon. 
											</div>
									</div>
									<div class="col-lg-12">
											&nbsp;
									</div>
									
									<?php
								}
								elseif($_GET['value'] == "oops")
								{	
								?>
									
									<div class="col-lg-12">
											<div class="row" style="color:red;">		
														There is some problem while submitting. Please try later. 
											</div>
									</div>
									<div class="col-lg-12">
											&nbsp;
									</div>
									
									<?php
									}
								?>
                                <form method="post" action="mailer.php" enctype="multipart/form-data" id="contact-form" onsubmit='return onsubmitform()'>
                                    <div class="row clearfix ">
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <div class="response"></div>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <input type="text" name="name" class="username" placeholder="Name *" required>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <input type="email" name="email" class="email" placeholder="Your Email Address *" required>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <input type="text" name="subject" class="subject" placeholder="Subject *" required>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <textarea name="message" placeholder="Message" required=""></textarea>
                                        </div>
                                        
										<div class="col-lg-8 col-md-12 col-sm-12 form-group">
											<label>Please enter the code shown in the image</label> 
											
												<input type='text' name='captcha' id='captcha' value='' class="form-control" > 
													
										</div>
										<div class="col-lg-4 col-md-12 col-sm-12 form-group">
											<div class="form-group message">
													<img src="captcha.php" />
												</div>
										</div>		
										
										<div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <input class="theme-btn btn-style-two" type="submit" id="submit" name="submit-form" />
                                        </div> 
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->

    <!-- Main Footer -->
     <?php include("footer.php");?>
    <!-- End Footer -->

</div><!-- End Page Wrapper -->


<script src="js/jquery.js"></script> 
<script src="js/popper.min.js"></script>
<script src="js/chosen.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery.modal.min.js"></script>
<script src="js/jquery.hideseek.min.js"></script>
<script src="js/mmenu.polyfills.js"></script>
<script src="js/mmenu.js"></script>
<script src="js/appear.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
<!--Google Map APi Key-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2uu6KHbLc_y7fyAVA4dpqSVM4w9ZnnUw"></script>
<script src="js/map-script.js"></script>
<!--End Google Map APi-->
</body>
</html>


