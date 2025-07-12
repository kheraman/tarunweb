<?php


?>
<!DOCTYPE html>
<html lang="zxx">

<?php include("header.php");?>


<script>	

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
<script>
let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>
<style>
* {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
</style>
<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
<base href="https://uscity.io/">
    <?php include("header1.php");?>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <div class="hero-listing set-bg" data-setbg="img/blog-bg.jpg">
    </div>
    <!-- Hero Section End -->

    <!-- About Secton Begin -->
    <section class="about-section">
        <div class="intro-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="about-intro">
                            <div class="rating"><img src="img/circle.png"></div>
                            <div class="intro-text">
                                <h2><?php echo $response['location_info']['name'];?></h2>
                                <p>&nbsp;</p>
                                <!--div class="open">Opens Tomorow at 10am</div>
                                <div class="closed">Closed now</div-->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 offset-lg-1">
                        <div class="intro-share">
                            <div class="share-btn">
                                <!--a href="#" class="share">Share</a-->
                                <a href="Categorylistings/<?php echo $response['location_info']['category_id'];?>"><?php echo $response['location_info']['sub_category_name'];?></a>

                            </div>
                            <div class="share-icon">
                                
                                <?php if($response['location_info']['facebook_url'] !="") { ?>	
							<a href="<?php echo $response['location_info']['facebook_url'];?>" class="facebook-bg"><i class="fa fa-facebook"></i></a>
                            <?php } ?>
							<?php if($response['location_info']['twitter_url'] !="") { ?>	
							<a href="<?php echo $response['location_info']['twitter_url'];?>" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                            <?php } ?>
							<?php if($response['location_info']['googleplus_url'] !="") { ?>							
							<a href="<?php echo $response['location_info']['googleplus_url'];?>" class="google-bg"><i class="fa fa-google-plus"></i></a>
                            <?php } ?>
							
							<?php if($response['location_info']['linkedin_url'] !="") { ?>
							<a href="<?php echo $response['location_info']['linkedin_url'];?>" class="linkedin-bg"><i class="fa fa-linkedin"></i></a>
							<?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="about-left">
                            <div class="about-desc">
                                <h4>Description</h4>
                                <p><?php echo $response['location_info']['description'];?></p>
                            </div>
							<?php $cjson = count($response['location_info']['media_files']);		
								if ($cjson > 1) { //echo $cjson;?>
								
								<div class="about-desc">
                                <h4>Gallery</h4>
										
									
									<div class="swiffy-slider">
										<ul class="slider-container">											
											<?php							
											$json = $response['location_info']['media_files'];																
											foreach($json as $elem)  
											{
												if ($elem['category_name'] != "Logo")
												{	
											   ?>	
												<li><img src="<?php echo $elem['url'];?>" style="height: 450px;width: 100%;">
												
												</li>
											<?php 
												}
											} ?>		
										</ul>
										<button type="button" class="slider-nav"></button>
										<button type="button" class="slider-nav slider-nav-next"></button>

										<!--div class="slider-indicators">
											<button class="active"></button>
											<button></button>
											<button></button>
										</div-->
									</div>

								</div>
								<?php } ?>
									<!--div class="about-video">
										<img src="img/video-bg.jpg" alt="">
										<a href="https://www.youtube.com/watch?v=fySJrtzyMy4" class="pop-up"><i class="fa fa-play"></i></a>
									</div-->
                            
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="about-right">
                            <div class="contact-info">
                                <?php
								if($response['location_info']['hide_address'] == "") 
										{  
								?>
								
								<div class="map">
                                        <?php 
											$address = $response['location_info']['street'].", ".$response['location_info']['city'].", ".$response['location_info']['state_iso'].", ".$response['location_info']['postal_code']; 
										
										
										
										/* Insert address Here */

echo '<iframe width="100%" height="385" frameborder="0" src="https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=' . str_replace(",", "", str_replace(" ", "+", $address)) . '&z=14&output=embed"></iframe>';
   
   
										?>
										
                                    
                                </div>
								
								<?php } ?>
								
                                <div class="contact-text">
                                    <h4>Contact Info</h4>
                                    <!--span>&nbsp;</span-->
                                    <ul>
										<li><?php if($response['location_info']['hide_address'] == "") { ?><i class="flaticon-pin"></i><?php echo $response['location_info']['street'].", "; } ?><?php echo $response['location_info']['city'];?>, <?php echo $response['location_info']['state_iso'];?> - <?php echo $response['location_info']['postal_code'];  ?></li>
										<!--li><b>Sub-Category : </b><?php //echo $response['location_info']['sub_category_name'];?></li-->
                                        <li><b>Phone : </b>+1 <?php echo $response['location_info']['phone'];?></li>
										<?php if($response['location_info']['owner_email'] != "") { ?>
                                        <li><b>Email : </b><?php echo $response['location_info']['owner_email']; ?></li>
										<?php } ?>
										<li><b>Website : </b><a style="color:blue;" href="<?php echo $response['location_info']['biz_url'];?>" target="_blank">Click here..</a></li>
                                    </ul>
                                </div>
								
                            </div>
                            <div class="working-hours">
                                <h4>Working Hours</h4>
                                <ul>
<?php					
										if (isset($response["location_info"]["business_hours"]["days"])) {
										echo "<style> li { list-style-type: none; } .day { font-weight: bold; color: #007BFF; } .closed { color: red; } .time { text-align: right; display: block; } .open24 { color: green; font-weight: bold; } </style>";
										echo "<ul>";
										foreach ($response["location_info"]["business_hours"]["days"] as $day => $details) {
											echo "<li class='day'>" . $day . "</li>";
											if (isset($details["type"])) {
												if ($details["type"] === "closed") {
													echo "<li class='closed'>&nbsp;&nbsp;&nbsp;&nbsp;Closed</li>\n";
													continue;
												} elseif ($details["type"] === "24h") {
													echo "<li class='open24'>&nbsp;&nbsp;&nbsp;&nbsp;Open 24 Hours</li>\n";
													continue;
												}
											}
											if (isset($details["slots"]) && is_array($details["slots"])) {
												echo "<ul>";
												foreach ($details["slots"] as $slot) {
													echo "<li class='time'>&#8226; " . strtoupper($slot["start"]) . " - " . strtoupper($slot["end"]) . "</li>\n";
												}
												echo "</ul>";
											}
										}
										echo "</ul>";
										}	
									?>                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Secton End -->

    <!-- Footer Section Begin -->
    <?php include("footer.php");?>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/main.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
<link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">
</body>

</html>