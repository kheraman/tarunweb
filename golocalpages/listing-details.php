<?php
////session_start();
//
require_once('includes/config.php');

function callAPI($method, $url, $data){
   $curl = curl_init();
   switch ($method){
      case "POST":
         curl_setopt($curl, CURLOPT_POST, 1);
         if ($data)
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
         break;
      case "PUT":
         curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
         if ($data)
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);			 					
         break;
      default:
         if ($data)
            $url = sprintf("%s?%s", $url, http_build_query($data));
   }
   // OPTIONS:
   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_HTTPHEADER, array(
      'x-api-key: 8KHjv4sZeCafv4YCGnf9F2TKE6MW016Koz7MhUAf',
      'Content-Type: application/json',
   ));
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
   // EXECUTE:
   $result = curl_exec($curl);
   if(!$result){die("Connection Failure");}
   curl_close($curl);
   return $result;
}


$get_data = callAPI('GET', 'https://app.synup.com/locations?location_id='.$_GET['lid'], false);
$response = json_decode($get_data, true);
		/*echo "<pre>";	
					print_r($response);	
					echo "</pre>";
					
			/*[file_name] => woops-new-pink-logo.png
					[category_name] => Logo
                            [category] => Logo */



?>

<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Belocalfocussed</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-submenu.css">

    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="css/daterangepicker.css">
    <link rel="stylesheet" href="css/leaflet.css" type="text/css">
    <link rel="stylesheet" href="css/map.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" type="text/css" href="fonts/linearicons/style.css">
    <link rel="stylesheet" type="text/css"  href="css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css"  href="css/dropzone.css">
    <link rel="stylesheet" type="text/css"  href="css/slick.css">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="css/skins/default.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,300,700">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="css/ie10-viewport-bug-workaround.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script  src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script  src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script  src="js/html5shiv.min.js"></script>
    <script  src="js/respond.min.js"></script>
    <![endif]-->
	
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
<div class="page_loader"></div>

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
                <li class="active"><?php echo $response['location_info']['category_name'];?></li>
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
            <div class="col-lg-8 col-md-12">
                <!-- Heading listing 3 start -->
                <div class="heading-listing-3">
                    <h2><?php echo $response['location_info']['name'];?></h2>
                    <span class="rent"><?php echo $response['location_info']['category_name'];?></span>
                    <div class="clearfix"></div>
                    <div class="mb-30">
                        <div class="location clearfix"><i class="flaticon-pin"></i><?php echo $response['location_info']['street'];?>, <?php echo $response['location_info']['city'];?> - <?php echo $response['location_info']['postal_code'];?><br>Phone : <?php echo $response['location_info']['phone'];?><br>Website : <a style="color:blue;" href="<?php echo $response['location_info']['biz_url'];?>" target="_blank">Click here..</a><br>Sub-Category : <?php echo $response['location_info']['sub_category_name'];?></div>
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
                <div class="location mb-50">
                    <div class="map">
                        <h3 class="heading-2">Location</h3>
                        <div id="map" class="contact-map"></div>
                    </div>
                </div>
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
            <div class="col-lg-4 col-md-12">
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
						
						foreach ($response['location_info']['business_hours'] as $key => $value)
						{
							foreach ($value as $k => $v)
							{
								echo "<li>".$k."\n";
								 
									foreach ($v as $ik => $iv)
									{
										
										if(!is_array($iv))
										{
											//echo $v[$ik];
											if($v[$ik] == 'closed')
											{
												echo "<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Closed</span>";
											}	
										}
										else
										{	
											//echo "uu";
											foreach ($iv as $jk => $jv)
											{
												
												if($iv[$jk]['start'] != "" && $iv[$jk]['end'] != "")
												{	
												
													foreach (array_reverse($jv) as $kk => $kv)
													{	
														//if($k == "Tuesday")
														//{print($jv[$kk]."pp");}
														//print($jv['start']);
														if($jv[$kk] != "")
														{																																echo "<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$kv."</span>";
														}	
														else
														{
															echo "<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Closeddd</span>";
														}													
													}
												}	
												else
												{
													echo "rr";
													
												}	
											}
											
										}
									}
									
								echo "</li>";
							}
							
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
                                    <a href="listing-details.php?lid=<?php echo $row['yid'];?>"><?php echo $row['name'];?></a>
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

<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD4omYJlOaP814WDcCG8eubXcbhB-44Uac"></script>
<script>
    function LoadMap(propertes) {
        var defaultLat = 40.7110411;
        var defaultLng = -74.0110326;
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
        var myLatlng = new google.maps.LatLng(40.7110411, -74.0110326);

        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map
        });
        (function (marker) {
            google.maps.event.addListener(marker, "click", function (e) {
                infoWindow.setContent("" +
                    "<div class='map-properties contact-map-content'>" +
                    "<div class='map-content'>" +
                    "<p class='address'>20-21 Kathal St. Tampa City, FL</p>" +
                    "<ul class='map-properties-list'> " +
                    "<li><i class='flaticon-phone'></i>  +0477 8556 552</li> " +
                    "<li><i class='flaticon-phone'></i>  info@themevessel.com</li> " +
                    "<li><a href='index.html'><i class='fa fa-globe'></i>  http://www.example.com</li></a> " +
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



