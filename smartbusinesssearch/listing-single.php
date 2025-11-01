<!DOCTYPE html>
<html lang="zxx">
<head>
   
	
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

</head>
<body>

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


<!-- Main header start -->
 <?php include("header.php");?>
<!-- Main header end -->

<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Listing Details</h1>
            <ul class="breadcrumbs">
                <li><a href="index.php">Home</a></li>
                <!--li class="active"><?php //echo $response['location_info']['category_name'];?></li-->
				<li class="active"><?php echo $response['location_info']['name'];?></li>            
            </ul>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Listing details page start -->
<div class="listing-details-page content-area-6">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12">
                <!-- Heading listing 3 start -->
                <div class="heading-listing-3">
                    <h2><?php echo $response['location_info']['name'];?></h2>
                    <span class="rent"><?php echo $response['location_info']['sub_category_name'];?></span>
                    <div class="clearfix"></div>
                    <div class="mb-30">
                        <div class="location clearfix"><?php 
						if($response['location_info']['hide_address'] == "") { echo "<i class='flaticon-pin'></i>".$response['location_info']['street'].", "; } ?><?php echo $response['location_info']['city']; ?>, <?php if($response['location_info']['state_name'] != NULL) echo $response['location_info']['state_name'].", ";?><?php if($response['location_info']['country_name'] != "")echo $response['location_info']['country_name'];?> - <?php echo $response['location_info']['postal_code']; ?><br>Phone : <?php echo getCountryCode($response['location_info']['country_name'])."  ".$response['location_info']['phone'];?><br>Website : <a style="color:blue;" href="<?php echo $response['location_info']['biz_url'];?>" target="_blank">Click here..</a></div>
                        <div class="clearfix"></div>
                        <!--div class="ratings-2">
                            <span class="ratings-box">4.5/5</span>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <span>( 7 Reviews )</span>
                        </div-->
                    </div>
                </div>
                <!-- Booking now start -->
                
                <!-- listing description start -->
                <div class="listing-description mb-40">
                    <h3 class="heading-2">
                        Description
                    </h3>
                    <p><?php echo $response['location_info']['description'];?></p>
                </div>
                <!-- amenities start -->
                
                <!-- gallery start -->
                <?php $cjson = count($response['location_info']['media_files']);		
				if ($cjson > 0) { ?>
				
				<div class="gallery">
                    <h3 class="heading-2">
                        Gallery
						
                    </h3>
					<?php
					$json = $response['location_info']['media_files'];	
								//print(count($json))."gggg";	
								
								?>
                    <div class="container">
                        <div class="slick-slider-area">
                            <div class="row slick-carousel" data-slick='{"slidesToShow": 2, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 2}}]}'>
                                
								<?php							
											
							foreach($json as $elem)  
							{
								
								if ($elem['category_name'] != "Logo")
								{	
							
							   ?>
								
								<div class="slick-slide-item">
                                    <div class="portfolio-item">
                                        <a href="<?php echo $elem['url'];?>" title="Gallery">
                                            <img src="<?php echo $elem['url'];?>" alt="gallery" class="img-fluid">
                                        </a>
                                        <!--div class="portfolio-content">
                                            <div class="portfolio-content-inner">
                                                <p>Restaurant</p>
                                            </div>
                                        </div-->
                                    </div>
                                </div>
								
								<?php 
								}
							} ?>
                                <!--div class="slick-slide-item">
                                    <div class="portfolio-item">
                                        <a href="img/gallery/img-3.png" title="Shops">
                                            <img src="img/gallery/img-3.png" alt="gallery" class="img-fluid">
                                        </a>
                                        <div class="portfolio-content">
                                            <div class="portfolio-content-inner">
                                                <p>Shops</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide-item">
                                    <div class="portfolio-item">
                                        <a href="img/gallery/img-1.png" title="Events">
                                            <img src="img/gallery/img-1.png" alt="gallery" class="img-fluid">
                                        </a>
                                        <div class="portfolio-content">
                                            <div class="portfolio-content-inner">
                                                <p>Events</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide-item clearfix">
                                    <div class="portfolio-item">
                                        <a href="img/gallery/img-4.png" title="Gym">
                                            <img src="img/gallery/img-4.png" alt="gallery" class="img-fluid">
                                        </a>
                                        <div class="portfolio-content">
                                            <div class="portfolio-content-inner">
                                                <p>Gym</p>
                                            </div>
                                        </div>
                                    </div>
                                </div-->
                            </div>
                            <div class="slick-prev slick-arrow-buton">
                                <i class="fa fa-angle-left"></i>
                            </div>
                            <div class="slick-next slick-arrow-buton">
                                <i class="fa fa-angle-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
				<?php } ?>
                <!-- Location start -->
              
				<?php if($response['location_info']['hide_address'] == "") {
				?>
				
				<div class="location mb-50">
                    <div class="map">
                        <h3 class="heading-2">Location</h3>
                        <div id="map" class="contact-map"></div>
                    </div>
                </div>
				<?php } ?>
                <!-- video start >
                <div class="video mb-50">
                    <h3 class="heading-2">
                        Video
                    </h3>
                    <iframe src="https://www.youtube.com/embed/5e0LxrLSzok" allowfullscreen=""></iframe>
                </div-->
                <!-- Reviews start >
                <div class="reviews">
                    <h3 class="heading-2">Reviews (384)</h3>
                    <ul class="comments">
                        <li>
                            <div class="comment">
                                <div class="comment-author">
                                    <a href="#">
                                        <img src="img/avatar/avatar-1.png" alt="comments-user">
                                    </a>
                                </div>
                                <div class="comment-content">
                                    <div class="comment-meta">
                                        <h5>Maikel Alisa<span class="f-right">11/28/2020<a href="#">Reply</a></span></h5>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem vulputate interdum et vel eros. Maecenas eros enim, tincidunt vel turpis vel.</p>
                                </div>
                            </div>
                            <ul>
                                <li>
                                    <div class="comment">
                                        <div class="comment-author">
                                            <a href="#">
                                                <img src="img/avatar/avatar-2.png" alt="comments-user">
                                            </a>
                                        </div>
                                        <div class="comment-content">
                                            <div class="comment-meta">
                                                <h5>Karen Paran<span class="f-right">11/28/2020<a href="#">Reply</a></span></h5>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <div class="comment mb-0">
                                <div class="comment-author">
                                    <a href="#">
                                        <img src="img/avatar/avatar-3.png" alt="comments-user">
                                    </a>
                                </div>
                                <div class="comment-content mrg-bdr">
                                    <div class="comment-meta">
                                        <h5>Anne Brady<span class="f-right">11/28/2020<a href="#">Reply</a></span></h5>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem vulputate interdum et vel eros. Maecenas eros enim, tincidunt vel turpis vel.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div-->
                <!-- add review start -->
                <div class="contact-2 add-review ca mtb-50">
                    <h3 class="heading-2 clearfix mb-0">Add your listing</h3>
                    <div class="row mb-30">
                        <!--div class="col-lg-8 col-md-8">
                            <div class="add-review-text clearfix">
                                <span class="leave-rating-title">Your rating  for this listing : </span>
                                <div class="ratings-3">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div-->
                        <!--div class="col-lg-4 col-md-4">
                            <div class="cpb change-photo-btn clearfix">
                                <div class="photoUpload">
                                    <span><i class="fa fa-upload"></i></span>Uplode Photo
                                    <input type="file" class="upload">
                                </div>
                            </div>
                        </div-->
                     </div>
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
                     <form method="post" action="contactlisting.php" enctype="multipart/form-data" id="contact-form" onsubmit='return onsubmitform()'>
                        <div class="row">
                        <div class="col-md-6">
                            <div class="form-group name">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group email">
                                <input type="email" name="email" id="email"  class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group subject">
                                <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group number">
                                <input type="text" name="phone" id="phone"  class="form-control" placeholder="Number">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group message">
                                <textarea class="form-control" id="message"  name="message" placeholder="Write message"></textarea>
                            </div>
                        </div>
						<div class="col-md-8">
							<div class="form-group message">
                                <label>Please enter the code shown in the image</label> 
								
									<input type='text' name='captcha' id='captcha' value='' class="form-control" > 
								     	
                            </div>                 
                        </div>
						<input type="hidden" name="lid" value="<?php echo $_GET["lid"];?>">
						<div class="col-md-4">
							<div class="form-group message">
									<img src="captcha.php" />
								</div>
						</div>		
                        <div class="col-md-12">
                            <div class="send-btn text-center">
                                <button type="submit" class="btn btn-md button-theme">Send Message</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3 col-md-12">
                <div class="sidebar-right">
                    <!-- Booking now start >
                    <div class="widget booking-now bn-3">
                        <h3 class="sidebar-title">Booking Now</h3>
                        <form method="GET">
                            <div class="form-group">
                                <input type="text" name="search" class="form-control search-fields" placeholder="Search">
                            </div>
                            <div class="form-group">
                                <input type="text" name="dates" placeholder="12/12/2018" class="datetimes-left form-control search-fields">
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="adults">
                                            <option>Adults</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="childrens">
                                            <option>Childrens</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <button class="search-button">Book Now</button>
                            </div>
                        </form>
                    </div-->
                    <!-- Opening hours start -->
                    <div class="widget opening-hours">
                        <h3 class="sidebar-title">Opening Hours</h3>
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
									?>                  
                        </ul>
                    </div>
					
                    <!-- Recent listing start -->
                    <div class="widget recent-listing">
                        <h3 class="sidebar-title">Recent Listing</h3>
                        <?php
							$sql = "select a.*,b.category_name from listing_master a left join category_master b on a.category_id=b.cat_id where b.category_name = '".$response['location_info']['category_name']."' order by a.id desc LIMIT 0,3";							
							$result = mysqli_query($con,$sql);							
									
									//die;
							
							while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
								{	
							?>
						<div class="media mb-4">
                            <a class="pr-3" href="listing-single.html">
                                <img class="media-object" src="img/recent-listing/img-1.png" alt="recent-listing">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    <a href="<?php echo $my_global_variable;?>Listing/L-<?php echo $row['yid'];?>"><?php echo $row['name'];?></a>
                                </h5>
                                <div class="listing-post-meta">
                                    <?php echo $row['city'];?>
                                </div>
                            </div>
                        </div>
								<?php } ?>
                    </div>
                    <!-- Social links start -->
                    <div class="widget social-links">
                        <h3 class="sidebar-title">Social Links</h3>
                        <ul class="social-list clearfix">
                            <?php if($response['location_info']['facebook_url'] !="") { ?>	
							<li><a href="<?php echo $response['location_info']['facebook_url'];?>" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                            <?php } ?>
							<?php if($response['location_info']['twitter_url'] !="") { ?>	
							<li><a href="<?php echo $response['location_info']['twitter_url'];?>" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                            <?php } ?>
							<?php if($response['location_info']['googleplus_url'] !="") { ?>							
							<li><a href="<?php echo $response['location_info']['googleplus_url'];?>" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
                            <?php } ?>
							
							<?php if($response['location_info']['linkedin_url'] !="") { ?>
							<li><a href="<?php echo $response['location_info']['linkedin_url'];?>" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
							<?php } ?>
                            <!--li><a href="#" class="pinterest-bg"><i class="fa fa-pinterest"></i></a></li-->
                        </ul>
                    </div>
                    <!-- Our Team sidebar start -->
                    <?php
					$json = $response['location_info']['media_files'];	
													
							foreach($json as $elem1)  
							{
								if ($elem1['category_name'] == "Logo")
								{	
					?>
                    <div class="our-agent-sidebar">
                        <div class="p-20">
                            <h3 class="sidebar-title">Company Logo :</h3>
                        </div>
                        <div id="carouselExampleIndicators5" class="carousel slide text-center" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="team-1 team-3">
                                        <div class="team-photo">
                                            <a href="#">
                                                <img src="<?php echo $elem['url'];?>" alt="team-3" class="img-fluid">
                                            </a>
                                        </div>
                                        <!--div class="team-details text-left">
                                            <h5><a href="user-profile.html">Martin Smith</a></h5>
                                            <h6>Hosted by</h6>
                                            <div class="contact">
                                                <ul>
                                                    <li>
                                                        <i class="flaticon-pin"></i><a>44 New Design Street,</a>
                                                    </li>
                                                    <li>
                                                        <i class="flaticon-mail-1"></i><a href="mailto:info@themevessel.com">info@themevessel.com</a>
                                                    </li>
                                                    <li>
                                                        <i class="flaticon-phone"></i><a href="tel:+554XX-634-7071"> +55 4XX-634-7071</a>
                                                    </li>
                                                    <li>
                                                        <i class="flaticon-fax"></i><a href="#"> +0477 85X6 552</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="button"><a href="user-profile.html" class="btn btn-md button-theme">User Profile</a></div>
                                        </div-->
                                    </div>
                                </div>
                                <!--div class="carousel-item">
                                    <div class="team-1 team-3">
                                        <div class="team-photo">
                                            <a href="#">
                                                <img src="img/avatar/user_01.png" alt="team-3" class="img-fluid">
                                            </a>
                                        </div>
                                        <div class="team-details text-left">
                                            <h5><a href="user-profile.html">John Antony</a></h5>
                                            <h6>Hosted by</h6>
                                            <div class="contact">
                                                <ul>
                                                    <li>
                                                        <i class="flaticon-pin"></i><a>44 New Design Street,</a>
                                                    </li>
                                                    <li>
                                                        <i class="flaticon-mail-1"></i><a href="mailto:info@themevessel.com">info@themevessel.com</a>
                                                    </li>
                                                    <li>
                                                        <i class="flaticon-phone"></i><a href="tel:+554XX-634-7071"> +55 4XX-634-7071</a>
                                                    </li>
                                                    <li>
                                                        <i class="flaticon-fax"></i><a href="#"> +0477 85X6 552</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="button"><a href="user-profile.html" class="btn btn-md button-theme">User Profile</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="team-1 team-3">
                                        <div class="team-photo">
                                            <a href="#">
                                                <img src="img/avatar/user_01.png" alt="team-3" class="img-fluid">
                                            </a>
                                        </div>
                                        <div class="team-details text-left">
                                            <h5><a href="user-profile.html">Anne Brady</a></h5>
                                            <h6>Hosted by</h6>
                                            <div class="contact">
                                                <ul>
                                                    <li>
                                                        <i class="flaticon-pin"></i><a>44 New Design Street,</a>
                                                    </li>
                                                    <li>
                                                        <i class="flaticon-mail-1"></i><a href="mailto:info@themevessel.com">info@themevessel.com</a>
                                                    </li>
                                                    <li>
                                                        <i class="flaticon-phone"></i><a href="tel:+554XX-634-7071"> +55 4XX-634-7071</a>
                                                    </li>
                                                    <li>
                                                        <i class="flaticon-fax"></i><a href="#"> +0477 85X6 552</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="button"><a href="user-profile.html" class="btn btn-md button-theme">User Profile</a></div>
                                        </div>
                                    </div>
                                </div-->
                            </div>
                        </div>
                    </div>
							<?php } }  ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Listing details page end -->

<!-- Footer start -->
<!-- Footer start -->
<?php include("footer.php");?>
<!-- Footer end -->
<!-- Footer end -->

<!-- Full Page Search -->
<div id="full-page-search">
    <button type="button" class="close">×</button>
    <form action="index.html#">
        <input type="search" value="" placeholder="type keyword(s) here" />
        <button type="submit" class="btn btn-sm button-theme">Search</button>
    </form>
</div>

<script src="js/jquery-2.2.0.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script  src="js/bootstrap-submenu.js"></script>
<script  src="js/rangeslider.js"></script>
<script  src="js/jquery.mb.YTPlayer.js"></script>
<script  src="js/bootstrap-select.min.js"></script>
<script  src="js/jquery.easing.1.3.js"></script>
<script  src="js/jquery.scrollUp.js"></script>
<script  src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script  src="js/leaflet.js"></script>
<script  src="js/leaflet-providers.js"></script>
<script  src="js/leaflet.markercluster.js"></script>
<script  src="js/moment.min.js"></script>
<script  src="js/daterangepicker.min.js"></script>
<script  src="js/dropzone.js"></script>
<script  src="js/slick.min.js"></script>
<script  src="js/jquery.filterizr.js"></script>
<script  src="js/jquery.magnific-popup.min.js"></script>
<script  src="js/jquery.countdown.js"></script>
<script  src="js/maps.js"></script>
<script  src="js/app.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script  src="js/ie10-viewport-bug-workaround.js"></script>
<!-- Custom javascript -->
<script  src="js/ie10-viewport-bug-workaround.js"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-89110077-3', 'auto');
    ga('send', 'pageview');
</script>

<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKnkff2qVuISk4P07GAfWUc6XYyblRi4Q"></script>
<script>
    function LoadMap(propertes) {
		
		var defaultLat = <?php echo $response['location_info']['geopoint']['lat'];?>;
        var defaultLng = <?php echo $response['location_info']['geopoint']['lon'];?>;
        var mapOptions = {
            center: new google.maps.LatLng(defaultLat, defaultLng),
            zoom: 15,
            scrollwheel: false,
            styles: [
                {
                    featureType: "administrative",
                    elementType: "labels",
                    stylers: [
                        {visibility: "off"}
                    ]
                },
                {
                    featureType: "water",
                    elementType: "labels",
                    stylers: [
                        {visibility: "off"}
                    ]
                },
                {
                    featureType: 'poi.business',
                    stylers: [{visibility: 'off'}]
                },
                {
                    featureType: 'transit',
                    elementType: 'labels.icon',
                    stylers: [{visibility: 'off'}]
                },
            ]
        };
        var map = new google.maps.Map(document.getElementById("map"), mapOptions);
        var infoWindow = new google.maps.InfoWindow();
        var myLatlng = new google.maps.LatLng(<?php echo $response['location_info']['geopoint']['lat'];?>, <?php echo $response['location_info']['geopoint']['lon'];?>);

        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map
        });
        (function (marker) {
            google.maps.event.addListener(marker, "click", function (e) {
                infoWindow.setContent("" +
                    "<div class='map-properties contact-map-content'>" +
                    "<div class='map-content'>" +
                    "<p style='color:black;font-size:14px;font-weight:bold;'><?php echo $response['location_info']['name'];?> " +					
                    "<ul class='map-properties-list'> " +
					"<li><i class='flaticon-place'></i><?php echo $response['location_info']['street'];  ?> <?php echo $response['location_info']['city'];?> - <?php echo $response['location_info']['postal_code'];?></li> " +
                    "<li><i class='flaticon-mail'></i>  <?php echo $response['location_info']['owner_email'];?></li> " +
                    "<li><i class='flaticon-phone'></i>  <?php echo $response['location_info']['phone'];?></li> " +
                    "<li><a href='<?php echo $response['location_info']['biz_url'];?>' target='_blank'><i " +
					"class='globe-icon'></i>  <?php echo $response['location_info']['biz_url'];?></a></li> " +
                    "</ul>" +
                    "</div>" +
                    "</div>");
                infoWindow.open(map, marker);
            });
        })(marker);
    }
    LoadMap();
</script>

</body>
</html>



