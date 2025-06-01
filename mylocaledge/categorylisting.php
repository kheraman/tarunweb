<?php 
////session_start();
//
error_reporting(0);
require_once('includes/config.php');
//print_r($_POST);die;

//Array ( [searchtext] => hello [location] => trinity [categ] => 4 [submit] => Submit )
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Category</title>

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
	if(document.getElementById('searchtext').value=='' || document.getElementById('location').value=='')
	{
		alert('Please enter text to search');
		document.getElementById(searchtext).focus();
		return false;
	}
	
</script>
</head>
<?php

$get_cate_wise_data = callAPI('GET', 'https://localist360.com/api/business?category_id=' . $_GET["category_id"], false);

$all_cate_wise_data = json_decode($get_cate_wise_data, true);
usort($all_cate_wise_data, function ($a, $b) {
    return strcmp($a['name'], $b['name']);
});
$count = count($all_cate_wise_data);
//echo "Total records: $count";

?>
<body>

<div class="page-wrapper">

    <!-- Header Span -->
    <span class="header-span"></span>
    
    <!-- Main Header-->
    <header class="main-header alternate">
        
        <!-- Main box -->
        <div class="main-box">
            <?php include("header.php");  ?>

            
            <!--Nav Box-->
            
        </div>

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

    <!-- Listing Section / Sytle Two-->
    <section class="ls-section style-two">
        <div class="auto-container">
            <div class="filters-backdrop"></div>
			<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area" style="text-align:center;color:#ff9966;padding-bottom:30px;">
             <h3><?php if (!empty($all_cate_wise_data)) {
    echo "Category Name : ".$all_cate_wise_data[0]['data']['category'];
}
else
	
	{echo "No records found.";}
?></h3>
            <!--ul class="breadcrumbs">
                <li><a href="index.php">Home</a></li>
                <li class="active"><?php //echo $catrowname["category_name"];?></li>
            </ul-->
        </div>
    </div>
</div>
<!-- Sub Banner end -->
            <?php
			//$catmaster = "select * from category_master";							
							
				//	$catmasname = mysqli_query($con,$catmaster);	
					
			?>
			
            <div class="row">

                <!-- Filters Column -->
                
                <?php
				
				
?>
                <!-- Content Column -->
                <div class="content-column col-lg-12 col-md-12 col-sm-12">
                    <div class="ls-outer">
                        <button type="button" class="theme-btn btn-style-two toggle-filters">Show Filters</button>

						
                        <!-- ls Switcher -->
                    
						
                        <!-- Listings -->
                        <div class="row">
						<?php
					
					foreach ($all_cate_wise_data as $cat_data) {
							?>
					<div class="listing-block col-lg-3 col-md-6 col-sm-12">
                                <div class="inner-box">
                                   
                                    <div class="lower-content">
                                        <div class="user-thumb"><img src="<?php echo $cat_data["image"];?>" alt=""></div>
                                        <!--div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="title">(7 review)</span>
                                        </div-->
                                        <h3><a href="singlelisting.php?lid=<?php echo $cat_data['yid'];?>"><?php echo $cat_data["name"];?><span class="icon icon-verified"></span></a></h3>
                                        
                                        <ul class="info">
                                            <li><span class="flaticon-pin"></span> <?php echo $cat_data['street'];?>, <?php echo $cat_data['city'];?>, <?php echo $cat_data['state_iso'];?>-<?php echo $cat_data['postal_code'];?></li>
                                            
                                        </ul>
                                    </div>
                                    
                                </div>
                            </div>
					<?php } ?>
                            
                        </div>
					</div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Listing Page Section -->

    <!-- Main Footer -->
    <?php include("footer.php");?>
    <!-- End Footer -->
</div><!-- End Page Wrapper -->


<script src="js/jquery.js"></script> 
<script src="js/popper.min.js"></script>
<script src="js/chosen.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery.modal.min.js"></script>
<script src="js/jquery.hideseek.min.js"></script>
<script src="js/mmenu.polyfills.js"></script>
<script src="js/mmenu.js"></script>
<script src="js/appear.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
<!-- Maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDaaCBm4FEmgKs5cfVrh3JYue3Chj1kJMw"></script>
<script src="js/infobox.min.js"></script>
<script src="js/markerclusterer.js"></script>
<script src="js/maps.js"></script>
</body>
</html>


