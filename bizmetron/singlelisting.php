<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Listing Single </title>
<base href="https://bizmetron.com/">
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
</head>

<body>

<div class="page-wrapper">

    <!-- Preloader -->
    
<?php include("header.php");  ?>
   
    <header class="main-header">
        
        <!-- Main box -->
       
            

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
            <!--Nav Box-->
            
 
<?php
function getCountryCode($countryName) {
    $filePath = 'country_codes.json';
    if (!file_exists($filePath)) return 'Country code file missing';

    $jsonData = json_decode(file_get_contents($filePath), true);
    if (json_last_error() !== JSON_ERROR_NONE) return 'Invalid JSON';

    $countryName = strtolower(trim($countryName));

    foreach ($jsonData as $name => $code) {
        if (strtolower($name) === $countryName) return $code;
    }

    return 'Country not found';
}
 

?>           
        

        <!-- Mobile Header -->
        

        <!-- Mobile Nav -->
        <div id="nav-mobile"></div>

        <!-- Header Search -->
        <div class="search-popup">
            <span class="search-back-drop"></span>
            
            <div class="search-inner">
                <button class="close-search"><span class="fa fa-times"></span></button>
                <form method="post" action="blog-showcase.html">
                    <div class="form-group">
                        <input type="search" name="search-field" value="" placeholder="Search..." required="">
                        <button type="submit"><i class="flaticon-magnifying-glass"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Header Search -->

    </header>
    <!--End Main Header -->

    <!-- Listing Banner -->
    <section class="listing-banner">
        <div class="background-layer pink-gradient");"></div>

        <div class="auto-container">
            <!-- Content Box -->
            <div class="content-box">
                <!--div class="rating">
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="title">(7 review)</span>
                </div>
                <figure class="image"><img src="images/resource/listing-icon-1.jpg" alt=""></figure-->
                
                <h1 style="color:white"><?php echo $response['location_info']['name'];?><span class="icon icon-verified"></span></h1>
				<div class="text" style="font-size:22px;"> <?php echo $response['location_info']['sub_category_name'];?></div>
				<div class="text" style="font-size:22px;"><?php if($response['location_info']['hide_address'] == "") {  echo $response['location_info']['street'].", "; }?><?php echo $response['location_info']['city'];?>, 
                <?php if($response['location_info']['state_name'] != NULL) echo $response['location_info']['state_name'].", ";?><?php if($response['location_info']['country_name'] != "")echo $response['location_info']['country_name'];?> - <?php echo $response['location_info']['postal_code'];?><br>
				<span class="icon flaticon-phone-call-1"></span>  <?php echo getCountryCode($response['location_info']['country_name'])."  ".$response['location_info']['phone'];?><br><span class="icon flaticon-unlink"></span>  Website : <a style="color:white;" href="<?php echo $response['location_info']['biz_url'];?>" target="_blank"><u>Click here..</u></a></div>
            </div>

			<div class="listing-options">
                <ul class="options-list">    
                    <?php if($response['location_info']['facebook_url'] !="") { ?>
					<li><a href="<?php echo $response['location_info']['facebook_url'];?>"><span class="fab fa-facebook"></span></a></li>
					<?php } ?>
					<?php if($response['location_info']['twitter_url'] !="") { ?>
					<li><a href="<?php echo $response['location_info']['twitter_url'];?>"><span class="fab fa-twitter"></span></a></li>
					<?php } ?>
					<?php if($response['location_info']['googleplus_url'] !="") { ?>
					<li><a href="<?php echo $response['location_info']['googleplus_url'];?>"><span class="fab fa-google-plus"></span></a></li>
					<?php } ?>
					<?php if($response['location_info']['linkedin_url'] !="") { ?>
					<li><a href="<?php echo $response['location_info']['linkedin_url'];?>"><span class="fab fa-linkedin"></span></a></li>
					<?php } ?>
					
                </ul>
            </div>
									

            <!-- Listing Options >
            <div class="listing-options">
                <ul class="options-list">    
                    <li><a href="#"><span class="icon flaticon-compass"></span> Get Directions</a></li>
                    <li><a href="#"><span class="icon flaticon-phone-call-1"></span> Call Now</a></li>
                    <li><a href="#"> Website</a></li>
                    <li><a href="#"><span class="icon flaticon-heart"></span> Save </a></li>
                    <li><a href="social-share.html" class="call-modal"><span class="icon flaticon-share"></span> Share </a></li>
                    <li><a href="#"><span class="icon flaticon-comment-1"></span> Write a review </a></li>
                    <li><a href="report-listing.html" class="call-modal"><span class="icon flaticon-flag"></span> Report </a></li>
                </ul>
            </div-->
        </div>
    </section>
    <!-- End Listing Banner -->

    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container bg_alice">
        <div class="auto-container">
            <div class="row">
                <!--Content Side-->
                <div class="content-side col-lg-9 col-md-12 col-sm-12">
                    <!-- Listing Single -->
                    <div class="listing-single">
                        <!-- Description Widget -->
                        <div class="description-widget ls-widget">
                            <div class="widget-title"><h4><span class="icon flaticon-menu"></span> Description</h4></div>
                            <div class="widget-content">
                                <p><?php echo $response['location_info']['description'];?></p>
                            </div>
                        </div>

                        <!-- Features Widget >
                        <div class="features-widget ls-widget">
                            <div class="widget-title"><h4><span class="icon flaticon-list"></span> Listing Features</h4></div>
                            <div class="widget-content">
                                <ul class="listing-features">
                                    <li><span class="icon flaticon-reservation"></span> Full Bar</li>
                                    <li><span class="icon flaticon-headphones"></span> Reservations</li>
                                    <li><span class="icon flaticon-armchair"></span> Seating</li>
                                    <li><span class="icon flaticon-beer"></span> Serves Alcohol</li>
                                    <li><span class="icon flaticon-parking"></span> Valet Parking</li>
                                    <li><span class="icon flaticon-service"></span> Waitstaff</li>
                                    <li><span class="icon flaticon-disability"></span> Wheelchair Accessible</li>
                                    <li><span class="icon flaticon-wifi"></span> Wifi</li>
                                </ul>
                            </div>
                        </div>
					<?php $cjson = count($response['location_info']['media_files']);		
						if ($cjson > 0) { ?>
                        <!-- Gallery Widget -->
                        <div class="gallery-widget ls-widget">
                            <div class="widget-title"><h4><span class="icon flaticon-gallery"></span> Gallery</h4></div>
                            <div class="widget-content">
                                <ul class="listing-gallery">
                                    <!-- Gallery Item -->
                                    <?php							
							$json = $response['location_info']['media_files'];	
													
							foreach($json as $elem)  
							{
								if ($elem['category_name'] != "Logo")
								{	
							   ?>
									<li class="gallery-item">
                                        <div class="inner-box">
                                            <a href="<?php echo $elem['url'];?>" title="Gallery">
                                            <img src="<?php echo $elem['url'];?>" alt="gallery" class="img-fluid">
                                        </a>
                                            <div class="overlay">
											
											 
											<a href="<?php echo $elem['url'];?>" class="lightbox-image" data-fancybox="ls-gallery"><span class="icon flaticon-magnifying-glass"></span></a></div>
                                        </div>
                                    </li>
								<?php 
								}
							} ?>
                                    <!-- Gallery Item >
                                    <li class="gallery-item">
                                        <div class="inner-box">
                                            <figure class="image"><img src="images/gallery/1-2.jpg" alt=""></figure>
                                            <div class="overlay"><a href="images/gallery/1-2.jpg" class="lightbox-image" data-fancybox="ls-gallery"><span class="icon flaticon-magnifying-glass"></span></a></div>
                                        </div>
                                    </li>

                                    <!-- Gallery Item >
                                    <li class="gallery-item">
                                        <div class="inner-box">
                                            <figure class="image"><img src="images/gallery/1-3.jpg" alt=""></figure>
                                            <div class="overlay"><a href="images/gallery/1-3.jpg" class="lightbox-image" data-fancybox="ls-gallery"><span class="icon flaticon-magnifying-glass"></span></a></div>
                                        </div>
                                    </li>

                                    <!-- Gallery Item >
                                    <li class="gallery-item">
                                        <div class="inner-box">
                                            <figure class="image"><img src="images/gallery/1-4.jpg" alt=""></figure>
                                            <div class="overlay"><a href="images/gallery/1-4.jpg" class="lightbox-image" data-fancybox="ls-gallery"><span class="icon flaticon-magnifying-glass"></span></a></div>
                                        </div>
                                    </li>

                                    <!-- Gallery Item >
                                    <li class="gallery-item">
                                        <div class="inner-box">
                                            <figure class="image"><img src="images/gallery/1-5.jpg" alt=""></figure>
                                            <div class="overlay"><a href="images/gallery/1-5.jpg" class="lightbox-image" data-fancybox="ls-gallery"><span class="icon flaticon-magnifying-glass"></span></a></div>
                                        </div>
                                    </li>

                                    <!-- Gallery Item >
                                    <li class="gallery-item">
                                        <div class="inner-box">
                                            <figure class="image"><img src="images/gallery/1-6.jpg" alt=""></figure>
                                            <div class="overlay"><a href="images/gallery/1-6.jpg" class="lightbox-image" data-fancybox="ls-gallery"><span class="icon flaticon-magnifying-glass"></span></a></div>
                                        </div>
                                    </li>

                                    <!-- Gallery Item >
                                    <li class="gallery-item">
                                        <div class="inner-box">
                                            <figure class="image"><img src="images/gallery/1-7.jpg" alt=""></figure>
                                            <div class="overlay"><a href="images/gallery/1-7.jpg" class="lightbox-image" data-fancybox="ls-gallery"><span class="icon flaticon-magnifying-glass"></span></a></div>
                                        </div>
                                    </li>

                                    <!-- Gallery Item >
                                    <li class="gallery-item">
                                        <div class="inner-box">
                                            <figure class="image"><img src="images/gallery/1-8.jpg" alt=""></figure>
                                            <div class="overlay"><a href="images/gallery/1-8.jpg" class="lightbox-image" data-fancybox="ls-gallery"><span class="icon flaticon-magnifying-glass"></span></a></div>
                                        </div>
                                    </li-->
                                </ul>
                            </div>
                        </div>
						<?php } ?>
                        <!-- Average Reviews Widget >
                        <div class="average-reviews-widget ls-widget">
                            <div class="widget-title"><h4><span class="icon flaticon-star-1"></span> Average Reviews</h4></div>
                            <div class="widget-content">
                                <div class="review-outer">
                                    <!-- Review Box >
                                    <div class="review-box">
                                        <h1>4.7</h1>
                                        <span class="title">Out of 5.0</span>
                                        <ul class="rating">
                                            <li><span class="fa fa-star"></span></li>
                                            <li><span class="fa fa-star"></span></li>
                                            <li><span class="fa fa-star"></span></li>
                                            <li><span class="fa fa-star"></span></li>
                                            <li><span class="fa fa-star"></span></li>
                                        </ul>
                                    </div>

                                    <div class="rating-bars">
                                        <!-- Rating Bars >
                                        <div class="rating-bars-item">
                                            <span class="rating-bars-name">Quality</span>
                                            <span class="rating-bars-inner">
                                                <span class="rating-bars-rating" data-rating="4.8">
                                                    <span class="rating-bars-rating-inner"></span>
                                                </span>
                                                <strong>4.8</strong>
                                            </span>
                                        </div>

                                        <!-- Rating Bars >
                                        <div class="rating-bars-item">
                                            <span class="rating-bars-name">Location</span>
                                            <span class="rating-bars-inner">
                                                <span class="rating-bars-rating" data-rating="1.4">
                                                    <span class="rating-bars-rating-inner"></span>
                                                </span>
                                                <strong>1.4</strong>
                                            </span>
                                        </div>

                                        <!-- Rating Bars >
                                        <div class="rating-bars-item">
                                            <span class="rating-bars-name">Space</span>
                                            <span class="rating-bars-inner">
                                                <span class="rating-bars-rating" data-rating="3.2">
                                                    <span class="rating-bars-rating-inner"></span>
                                                </span>
                                                <strong>3.2</strong>
                                            </span>
                                        </div>

                                        <!-- Rating Bars >
                                        <div class="rating-bars-item">
                                            <span class="rating-bars-name">Service</span>
                                            <span class="rating-bars-inner">
                                                <span class="rating-bars-rating" data-rating="5.0">
                                                    <span class="rating-bars-rating-inner"></span>
                                                </span>
                                                <strong>5.0</strong>
                                            </span>
                                        </div>

                                        <!-- Rating Bars >
                                        <div class="rating-bars-item">
                                            <span class="rating-bars-name">Price</span>
                                            <span class="rating-bars-inner">
                                                <span class="rating-bars-rating" data-rating="4.8">
                                                    <span class="rating-bars-rating-inner"></span>
                                                </span>
                                                <strong>4.8</strong>
                                            </span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div-->

                        <!-- Comments Widget >
                        <div class="comments-widget ls-widget">
                            <div class="widget-title"><h4><span class="icon flaticon-consulting-message"></span> 7 Reviews For Bear Restaurant</h4></div>
                            <div class="widget-content">
                                <!-- Comment Box >
                                <div class="comment-box">
                                    <!-- Comment >
                                    <div class="comment">
                                        <div class="user-thumb"><img src="images/resource/avatar-1.jpg" alt=""></div>
                                        <div class="user-name">Adam Gilchrist</div>
                                        <div class="comment-info">
                                            <ul class="rating">
                                                <li><span class="fa fa-star"></span></li>
                                                <li><span class="fa fa-star"></span></li>
                                                <li><span class="fa fa-star"></span></li>
                                                <li><span class="fa fa-star"></span></li>
                                                <li><span class="fa fa-star"></span></li>
                                            </ul>
                                            <div class="comment-time">April 25, 2019 at 10:46 am</div>
                                        </div>
                                        <span class="title">Really cool and surprisingly affordable</span>
                                        <div class="text">Morbi velit eros, sagittis in facilisis non, rhoncus et erat. Nam posuere ultricies tortor imperdiet vitae. Curabitur lacinia neque non metus </div>
                                        <ul class="review-images">
                                            <li class="image"><a href="images/resource/review-img-1.jpg" class="lightbox-image" data-fancybox="reivews"><img src="images/resource/review-img-1.jpg" alt=""></a></li>

                                            <li class="image"><a href="images/resource/review-img-2.jpg" class="lightbox-image" data-fancybox="reivews"><img src="images/resource/review-img-2.jpg" alt=""></a></li>

                                            <li class="image"><a href="images/resource/review-img-3.jpg" class="lightbox-image" data-fancybox="reivews"><img src="images/resource/review-img-3.jpg" alt=""></a></li>

                                            <li class="image"><a href="images/resource/review-img-4.jpg" class="lightbox-image" data-fancybox="reivews"><img src="images/resource/review-img-4.jpg" alt=""></a></li>
                                        </ul>

                                        <div class="rate-reveiw">
                                            <div class="text">Was This Review...?</div>
                                            <ul class="options">
                                                <li><a href="#" class="like"><span class="icon flaticon-like"></span> Like</a></li>
                                                <li><a href="#" class="dislike"><span class="icon flaticon-dislike"></span> Dislike</a></li>
                                                <li><a href="#" class="love"><span class="icon flaticon-heart"></span> Love</a></li>
                                            </ul>
                                        </div>
                                        <div class="reply"><a href="#" class="reply-btn"><span class="icon flaticon-left"></span> Reply</a></div>
                                    </div>

                                    <!-- Comment >
                                    <div class="comment reply-comment">
                                        <div class="user-thumb"><img src="images/resource/avatar-2.jpg" alt=""></div>
                                        <div class="user-name">Simon</div>
                                        <div class="comment-info">
                                            <ul class="rating">
                                                <li><span class="fa fa-star"></span></li>
                                                <li><span class="fa fa-star"></span></li>
                                                <li><span class="fa fa-star"></span></li>
                                                <li><span class="fa fa-star"></span></li>
                                                <li><span class="fa fa-star"></span></li>
                                            </ul>
                                            <div class="comment-time">April 25, 2019 at 10:46 am</div>
                                        </div>
                                        <span class="title">Really cool and surprisingly affordable</span>
                                        <div class="text">Morbi velit eros, sagittis in facilisis non, rhoncus et erat. Nam posuere ultricies tortor imperdiet vitae. Curabitur lacinia neque non metus </div>
                                    </div>
                                </div>

                                <!-- Comment Box >
                                <div class="comment-box">
                                    <!-- Comment >
                                    <div class="comment">
                                        <div class="user-thumb"><img src="images/resource/avatar-3.jpg" alt=""></div>
                                        <div class="user-name">Adam Gilchrist</div>
                                        <div class="comment-info">
                                            <ul class="rating">
                                                <li><span class="fa fa-star"></span></li>
                                                <li><span class="fa fa-star"></span></li>
                                                <li><span class="fa fa-star"></span></li>
                                                <li><span class="fa fa-star"></span></li>
                                                <li><span class="fa fa-star"></span></li>
                                            </ul>
                                            <div class="comment-time">April 25, 2019 at 10:46 am</div>
                                        </div>
                                        <span class="title">Really cool and surprisingly affordable</span>
                                        <div class="text">Morbi velit eros, sagittis in facilisis non, rhoncus et erat. Nam posuere ultricies tortor imperdiet vitae. Curabitur lacinia neque non metus </div>
                                        <div class="rate-reveiw">
                                            <div class="text">Was This Review...?</div>
                                            <ul class="options">
                                                <li><a href="#" class="like"><span class="icon flaticon-like"></span> Like</a></li>
                                                <li><a href="#" class="dislike"><span class="icon flaticon-dislike"></span> Dislike</a></li>
                                                <li><a href="#" class="love"><span class="icon flaticon-heart"></span> Love</a></li>
                                            </ul>
                                        </div>
                                        <div class="reply"><a href="#" class="reply-btn"><span class="icon flaticon-left"></span> Reply</a></div>
                                    </div>
                                </div>
                            </div>
                        </div-->
						<!-- Business Info Widget -->
                        <div class="business-info-widget ls-widget">
                            <?php
							if($response['location_info']['hide_address'] == "") { 
							?>
							
							<div class="widget-title">
                                <h4><span class="icon flaticon-menu"></span>Business Info</h4>
                            </div>
                            <div class="widget-content">
                                <div class="map-box">
                                    <div class="map-canvas"
                                        data-zoom="12"
                                        data-lat="<?php echo $response['location_info']['geopoint']['lat'];?>"
                                        data-lng="<?php echo $response['location_info']['geopoint']['lon'];?>"
                                        data-type="roadmap"
                                        data-hue="#ffc400"
                                        data-title="<?php echo $response['location_info']['name'];?>"
                                        data-icon-path="images/icons/map-marker.png"
                                        data-content=" <?php  echo $response['location_info']['street'].", "; ?><?php echo $response['location_info']['city'];?> - <?php echo $response['location_info']['postal_code'];?><br><a href='mailto:<?php echo $response['location_info']['owner_email'];?>'><?php echo $response['location_info']['owner_email'];?></a><br>Phone : <?php echo $response['location_info']['phone'];?>">
                                    </div>
                                </div>

                                
								
                            </div>
							<?php } ?>
                        </div>
                        <!-- Comments Form Widget -->
                        <div class="comments-form-widget ls-widget">
                            <div class="widget-title"><h4><span class="icon flaticon-consulting-message"></span> Add a Review</h4></div>
                            <div class="widget-content">
                                <!-- Subratings Container >
                                <div class="sub-ratings-container">
                                    <!-- Subrating #1 >
                                    <div class="add-sub-rating">
                                        <div class="sub-rating-title">Quality</div>
                                        <div class="sub-rating-stars">
                                            <!-- Leave Rating >
                                            <form class="leave-rating">
                                                <input type="radio" name="rating" id="rating-1" value="1"/>
                                                <label for="rating-1" class="fa fa-star"></label>
                                                <input type="radio" name="rating" id="rating-2" value="2"/>
                                                <label for="rating-2" class="fa fa-star"></label>
                                                <input type="radio" name="rating" id="rating-3" value="3"/>
                                                <label for="rating-3" class="fa fa-star"></label>
                                                <input type="radio" name="rating" id="rating-4" value="4"/>
                                                <label for="rating-4" class="fa fa-star"></label>
                                                <input type="radio" name="rating" id="rating-5" value="5"/>
                                                <label for="rating-5" class="fa fa-star"></label>
                                            </form>
                                        </div>
                                    </div>

                                    <!-- Subrating #2 >
                                    <div class="add-sub-rating">
                                        <div class="sub-rating-title">Location</div>
                                        <div class="sub-rating-stars">
                                            <!-- Leave Rating >
                                            <div class="clearfix"></div>
                                            <form class="leave-rating">
                                                <input type="radio" name="rating" id="rating-11" value="1"/>
                                                <label for="rating-11" class="fa fa-star"></label>
                                                <input type="radio" name="rating" id="rating-12" value="2"/>
                                                <label for="rating-12" class="fa fa-star"></label>
                                                <input type="radio" name="rating" id="rating-13" value="3"/>
                                                <label for="rating-13" class="fa fa-star"></label>
                                                <input type="radio" name="rating" id="rating-14" value="4"/>
                                                <label for="rating-14" class="fa fa-star"></label>
                                                <input type="radio" name="rating" id="rating-15" value="5"/>
                                                <label for="rating-15" class="fa fa-star"></label>
                                            </form>
                                        </div>
                                    </div>

                                    <!-- Subrating #3 >
                                    <div class="add-sub-rating">
                                        <div class="sub-rating-title">Price</div>
                                        <div class="sub-rating-stars">
                                            <!-- Leave Rating >
                                            <div class="clearfix"></div>
                                            <form class="leave-rating">
                                                <input type="radio" name="rating" id="rating-21" value="1"/>
                                                <label for="rating-21" class="fa fa-star"></label>
                                                <input type="radio" name="rating" id="rating-22" value="2"/>
                                                <label for="rating-22" class="fa fa-star"></label>
                                                <input type="radio" name="rating" id="rating-23" value="3"/>
                                                <label for="rating-23" class="fa fa-star"></label>
                                                <input type="radio" name="rating" id="rating-24" value="4"/>
                                                <label for="rating-24" class="fa fa-star"></label>
                                                <input type="radio" name="rating" id="rating-25" value="5"/>
                                                <label for="rating-25" class="fa fa-star"></label>
                                            </form>
                                        </div>
                                    </div>
                                    
                                    <!-- Subrating #4 >
                                    <div class="add-sub-rating">
                                        <div class="sub-rating-title">Space</div>
                                        <div class="sub-rating-stars">
                                            <!-- Leave Rating >
                                            <div class="clearfix"></div>
                                            <form class="leave-rating">
                                                <input type="radio" name="rating" id="rating-31" value="1"/>
                                                <label for="rating-31" class="fa fa-star"></label>
                                                <input type="radio" name="rating" id="rating-32" value="2"/>
                                                <label for="rating-32" class="fa fa-star"></label>
                                                <input type="radio" name="rating" id="rating-33" value="3"/>
                                                <label for="rating-33" class="fa fa-star"></label>
                                                <input type="radio" name="rating" id="rating-34" value="4"/>
                                                <label for="rating-34" class="fa fa-star"></label>
                                                <input type="radio" name="rating" id="rating-35" value="5"/>
                                                <label for="rating-35" class="fa fa-star"></label>
                                            </form>
                                        </div>
                                    </div>  

                                     <!-- Subrating #4 >
                                    <div class="add-sub-rating">
                                        <div class="sub-rating-title">Service</div>
                                        <div class="sub-rating-stars">
                                            <!-- Leave Rating >
                                            <div class="clearfix"></div>
                                            <form class="leave-rating">
                                                <input type="radio" name="rating" id="rating-36" value="1"/>
                                                <label for="rating-36" class="fa fa-star"></label>
                                                <input type="radio" name="rating" id="rating-37" value="2"/>
                                                <label for="rating-37" class="fa fa-star"></label>
                                                <input type="radio" name="rating" id="rating-38" value="3"/>
                                                <label for="rating-38" class="fa fa-star"></label>
                                                <input type="radio" name="rating" id="rating-39" value="4"/>
                                                <label for="rating-39" class="fa fa-star"></label>
                                                <input type="radio" name="rating" id="rating-40" value="5"/>
                                                <label for="rating-40" class="fa fa-star"></label>
                                            </form>
                                        </div>
                                    </div>  
                                </div-->
                                <!-- Subratings Container / End >

                                <div class="uploading-outer">
                                    <div class="uploadButton">
                                        <input class="uploadButton-input" type="file"  name="attachments[]" accept="image/*, application/pdf" id="upload" multiple/>
                                        <label class="uploadButton-button ripple-effect" for="upload">Add Photos</label>
                                        <span class="uploadButton-file-name"></span>
                                    </div>
                                </div-->
								<?php
								if(isset($_GET['value']))
								{
									?>
									
									
									<div class="row" style="color:green;">	
											<div class="col-lg-12">								
														Thanks for contacting us. Our representative will get back to you soon. 
											</div>
									</div>
									<div class="col-lg-12">
											&nbsp;
									</div>
									
									<?php
								}
								?>
                                <!-- Comment Form -->
                                <div class="comment-form default-form">
                                    <!--Comment Form-->
                                    <form method="post" action="contactlisting.php" enctype="multipart/form-data" onsubmit='return onsubmitform()'>
                                        <div class="row clearfix">
                                            <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                                <input type="text" name="name" placeholder="Name" required>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                                <input type="email" name="email" placeholder="Email" required>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                <textarea class="darma" name="message" placeholder="Write Comment"required></textarea>
                                            </div>
											<div class="col-lg-8 col-md-12 col-sm-12 form-group">		
												<div class="form-group message">
														<label>Please enter the code shown in the image</label> 						
														<input type='text' name='captcha' id='captcha' value='' required class="form-control" > 
												</div>                 
												<input type="hidden" name="lid" value="<?php echo $_GET["lid"];?>">
											</div>
											<div class="col-lg-4 col-md-12 col-sm-12 form-group">
												<div class="form-group message" class="col-md-4">
															<img src="captcha.php" />
												</div>
											</div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                <button class="theme-btn btn-style-two" type="submit" name="submit-form">Submit Review</button>
                                            </div> 
                                        </div>
                                    </form>
                                </div>
                                <!--End Comment Form -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Side -->
                <div class="sidebar-side col-lg-3 col-md-12 col-sm-12">
                    <aside class="sidebar">
                        <!-- Timing Widget -->
                        <div class="timing-widget ls-widget">
                            <div class="widget-title">
                                <h4><span class="icon flaticon-menu"></span>Opening Hours</h4>
                                <!--span class="status">Open Now</span-->
                            </div>
                            <div class="widget-content">
                                <ul class="timing-list">
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
									?>  
                                </ul>
                            </div>
                        </div>

                        <!-- Business Info Widget >
                        <div class="business-info-widget ls-widget">
                            <div class="widget-title">
                                <h4><span class="icon flaticon-menu"></span>Business Info</h4>
                            </div>
                            <div class="widget-content">
                                <div class="map-box">
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
                        </div-->

                        <!-- Price Range Widget >
                        <div class="price-range-widget ls-widget">
                            <div class="widget-title">
                                <h4><span class="icon flaticon-menu"></span>Price Range</h4>
                            </div>
                            <div class="widget-content">
                                <div class="range-slider-one clearfix">
                                    <div class="price-range-slider"></div>
                                    <div class="btn-outer">
                                        <div class="input-box">
                                            <div class="title">Price:</div>
                                            <div class="input"><input type="text" class="property-amount" name="field-name" readonly></div>
                                        </div>
                                        <div class="btn-box">
                                            <a href="#" class="theme-btn btn-style-two">Filtter</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Categories Widget >
                        <div class="categories-widget ls-widget">
                            <div class="widget-title"><h4><span class="icon flaticon-menu"></span>Categories</h4></div>
                            <div class="widget-content">
                                <ul class="categories-list">
                                    <li class="rest"><a href="#"><span class="icon flaticon-chef"></span> restaurant</a></li>
                                    <li class="art"><a href="#"><span class="icon flaticon-museum-1"></span> Art & History</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Statistic Widget >
                        <div class="statistic-widget ls-widget">
                            <div class="widget-title"><h4><span class="icon flaticon-menu"></span>Categories</h4></div>
                            <div class="widget-content">
                                <ul class="statistic-list">
                                    <li><span class="icon flaticon-view"></span> 8490 Views </li>
                                    <li><span class="icon flaticon-star"></span> 22 Ratings </li>
                                    <li><span class="icon flaticon-heart"></span> 152 Favorites </li>
                                    <li><span class="icon flaticon-share"></span> 50 Shares </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Contact Widget >
                        <div class="contact-widget ls-widget">
                            <div class="widget-title"><h4><span class="icon flaticon-phone-call-1"></span>Contact business</h4></div>
                            <div class="widget-content">
                                <!-- Comment Form >
                                <div class="default-form">
                                    <!--Comment Form>
                                    <form>
                                        <div class="row clearfix">
                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                <input type="text" name="username" placeholder="Name" required>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                <input type="email" name="email" placeholder="Your Email Address" required>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                <textarea class="darma" name="message" placeholder="Write Comment"></textarea>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                <button class="theme-btn btn-style-two" type="submit" name="submit-form">Submit Review</button>
                                            </div> 
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div-->
						<?php
							$numbers = range(1, 2000);
							shuffle($numbers);
							$numbers = array_slice($numbers, 0, 3);
							//print_r($numbers);
						?>	
                        <!-- Nearby Widget -->
                        <div class="nearby-widget ls-widget">
                            <div class="widget-title"><h4><span class="icon flaticon-map"></span> Most Recent Listings</h4></div>
                            <div class="widget-content">
                                <!-- Listing Block Six -->
                                <?php
								$sql = "select * from listing_master where id in (".$numbers[0].",".$numbers[1].",".$numbers[2].")";							
								$result = mysqli_query($con,$sql);							
										
										//die;
								
								while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
									{	
								?>
								<div class="listing-block-six">
                                    <div class="inner-box">
                                        <!--div class="image-box">
                                            <figure class="image"><a href="listing-single.html"><img src="images/resource/listing/3-1.jpg" alt=""></a></figure>
                                        </div-->
                                        <div class="content">
                                            <h3><a href="listing-single.html"><?php echo $row["name"];?> <span class="icon icon-verified"></span> </a></h3>
                                            <ul class="info">
                                                <li><span class="flaticon-pin"></span> <?php echo $row["street"];?>, <?php echo $row["city"];?>-<?php echo $row["postal_code"];?><br>Phone : <?php echo $row["phone"];?></li>
                                            </ul>
                                            <!--div class="rating">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="title">(7 review)</span>
                                            </div-->
                                        </div>
                                    </div>
                                </div>
								<?php } ?>
                                <!-- Listing Block Six >
                                <div class="listing-block-six">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><a href="listing-single.html"><img src="images/resource/listing/3-2.jpg" alt=""></a></figure>
                                        </div>
                                        <div class="content">
                                            <h3><a href="listing-single.html">Private Hotel-Spa <span class="icon icon-verified"></span> </a></h3>
                                            <ul class="info">
                                                <li><span class="flaticon-pin"></span> Santa Monica, CA</li>
                                            </ul>
                                            <div class="rating">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="title">(7 review)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Listing Block Six >
                                <div class="listing-block-six">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><a href="listing-single.html"><img src="images/resource/listing/3-3.jpg" alt=""></a></figure>
                                        </div>
                                        <div class="content">
                                            <h3><a href="listing-single.html">Moonlight Restourant <span class="icon icon-verified"></span> </a></h3>
                                            <ul class="info">
                                                <li><span class="flaticon-pin"></span> Santa Monica, CA</li>
                                            </ul>
                                            <div class="rating">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="title">(7 review)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div-->
                            </div>
                        </div>
						
						<?php
						$json = $response['location_info']['media_files'];	
														
						foreach($json as $elem1)  
						{
							if ($elem1['category_name'] == "Logo")
							{	
						?>
                        <!-- Author Widget -->
                        <div class="author-widget ls-widget">
                            <div class="widget-title"><h4><span class="icon flaticon-user-1"></span> Company Logo</h4></div>
                            <div class="widget-content">
                                <div class="author-box">
                                    <figure class="image"><img src="<?php echo $elem['url'];?>" alt="team-3" class="img-fluid"></figure>
                                    <!--h4 class="name">Ali TUFAN</h4>
                                    <span class="info">Member since November 2019</span-->
                                </div>
                            </div>
                        </div>
						<?php } }  ?>
                    </aside>
                </div>
                <!-- End Sidebar Side -->
            </div>
        </div>
    </div>
    <!--End Sidebar Page Container -->


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
<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKnkff2qVuISk4P07GAfWUc6XYyblRi4Q"></script>

<!--script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2uu6KHbLc_y7fyAVA4dpqSVM4w9ZnnUw"></script-->
<script src="js/map-script.js"></script>
<!--End Google Map APi-->
</body>
</html>


