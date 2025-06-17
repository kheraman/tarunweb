<?php 
////session_start();
//
require_once('includes/config.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Categories </title>
<base href="https://wheretoapp.io/">
<!-- Stylesheets -->
<link href="../css/bootstrap.css" rel="stylesheet">
<link href="../css/style.css" rel="stylesheet">
<link href="../css/responsive.css" rel="stylesheet">

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

<body>

<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

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
<?php

$get_cate_wise_data = callAPI('GET', 'https://localist360.com/api/business?category_id=' . $_GET["category_id"], false);

$all_cate_wise_data = json_decode($get_cate_wise_data, true);
usort($all_cate_wise_data, function ($a, $b) {
    return strcmp($a['name'], $b['name']);
});
$count = count($all_cate_wise_data);
//echo "Total records: $count";

?>
    <!-- Listing Section / Sytle Two-->
    <section class="ls-section style-two">
        <div class="auto-container">
            <div class="filters-backdrop"></div>
            
            <div class="row">
			<h3 style="color:green;"><?php if (!empty($all_cate_wise_data)) {
    echo "Category Name : ".$all_cate_wise_data[0]['data']['category'];
}
else
	
	{echo "No records found.";}
?></h3>

                <!-- Filters Column -->
                
                <?php
				
				
?>
                <!-- Content Column -->
                <div class="content-column col-lg-12 col-md-12 col-sm-12">
                    <div class="ls-outer">
                        

						
                        <!-- ls Switcher -->
                        
						
                        <!-- Listings -->
                        <div class="row">
						
						<?php
					
					foreach ($all_cate_wise_data as $cat_data) {
							?>
                            <!-- Listing Block -->
                            <div class="listing-block col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        
                                        <!--div class="tags">
                                            <span>Featured</span>
                                            <span>$25 - $35</span>
                                        </div>
                                        <a href="#" class="like-btn"><span class="flaticon-heart"></span> Save</a-->
                                    </div>
                                    <div class="lower-content">
                                        
                                        <!--div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="title">(7 review)</span>
                                        </div-->
                                        <h3><a href="Listing/L-<?php echo $cat_data['yid'];?>"><?php echo $cat_data["name"];?><span class="icon icon-verified"></span></a></h3>
                                        
                                        <ul class="info">
                                            <li><span class="flaticon-pin"></span> <?php echo $cat_data['street'];?>, <?php echo $cat_data['city'];?>, <?php echo $cat_data['state_iso'];?>-<?php echo $cat_data['postal_code'];?></li>
                                            
                                        </ul>
                                    </div>
                                    
                                </div>
                            </div>
<?php } ?>
                            <!-- Listing lLock >
                            <div class="listing-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="images/resource/listing/1-2.jpg" alt=""></figure>
                                        <div class="tags">
                                            <span>Featured</span>
                                        </div>
                                        <a href="#" class="like-btn"><span class="flaticon-heart"></span> Save</a>
                                    </div>
                                    <div class="lower-content">
                                        <div class="user-thumb"><img src="images/resource/user-thumb-2.jpg" alt="" /></div>
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="title">(7 review)</span>
                                        </div>
                                        <h3><a href="#">Moonlight Restourant </a></h3>
                                        <div class="text">Italian traditional served pizzeria.</div>
                                        <ul class="info">
                                            <li><span class="flaticon-pin"></span> Santa Monica, CA</li>
                                            <li><span class="flaticon-tray"></span> +61 2 8236 9200 </li>
                                        </ul>
                                    </div>
                                    <div class="bottom-box">
                                        <div class="places"> 
                                            <div class="place pink"><span class="icon flaticon-hotel-1"></span> Restourant </div>
                                            <span class="count">+3</span>
                                        </div>
                                        <div class="status">Open</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Listing lLock >
                            <div class="listing-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="images/resource/listing/1-3.jpg" alt=""></figure>
                                        <a href="#" class="like-btn"><span class="flaticon-heart"></span> Save</a>
                                    </div>
                                    <div class="lower-content">
                                        <div class="user-thumb"><img src="images/resource/user-thumb-3.jpg" alt="" /></div>
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="title">(7 review)</span>
                                        </div>
                                        <h3><a href="#">Best Museum</a></h3>
                                        <div class="text">This cafe is small but bustling.</div>
                                        <ul class="info">
                                            <li><span class="flaticon-pin"></span> Art & History</li>
                                            <li><span class="flaticon-phone-call"></span> +61 2 8236 9200 </li>
                                        </ul>
                                    </div>
                                    <div class="bottom-box">
                                        <div class="places"> 
                                            <div class="place purple"><span class="icon flaticon-museum"></span>Art & History </div>
                                            <span class="count">+3</span>
                                        </div>
                                        <div class="status">Now Closed</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Listing Block >
                            <div class="listing-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="images/resource/listing/2-1.jpg" alt=""></figure>
                                        <div class="tags">
                                            <span>Featured</span>
                                            <span>$25 - $35</span>
                                        </div>
                                        <a href="#" class="like-btn"><span class="flaticon-heart"></span> Save</a>
                                    </div>
                                    <div class="lower-content">
                                        <div class="user-thumb"><img src="images/resource/user-thumb-1.jpg" alt="" /></div>
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="title">(7 review)</span>
                                        </div>
                                        <h3><a href="#">Private Hotel-Spa <span class="icon icon-verified"></span></a></h3>
                                        <div class="text">Luxury hotel in the heart of Bloomsbury.</div>
                                        <ul class="info">
                                            <li><span class="flaticon-pin"></span> Santa Monica, CA</li>
                                            <li><span class="flaticon-phone-call"></span> +61 2 8236 9200 </li>
                                        </ul>
                                    </div>
                                    <div class="bottom-box">
                                        <div class="places"> 
                                            <div class="place"><span class="icon flaticon-bed"></span> Hotels </div>
                                            <span class="count">+3</span>
                                        </div>
                                        <div class="status">Now Closed</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Listing lLock >
                            <div class="listing-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="images/resource/listing/2-2.jpg" alt=""></figure>
                                        <div class="tags">
                                            <span>Featured</span>
                                        </div>
                                        <a href="#" class="like-btn"><span class="flaticon-heart"></span> Save</a>
                                    </div>
                                    <div class="lower-content">
                                        <div class="user-thumb"><img src="images/resource/user-thumb-2.jpg" alt="" /></div>
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="title">(7 review)</span>
                                        </div>
                                        <h3><a href="#">Moonlight Restourant </a></h3>
                                        <div class="text">Italian traditional served pizzeria.</div>
                                        <ul class="info">
                                            <li><span class="flaticon-pin"></span> Santa Monica, CA</li>
                                            <li><span class="flaticon-tray"></span> +61 2 8236 9200 </li>
                                        </ul>
                                    </div>
                                    <div class="bottom-box">
                                        <div class="places"> 
                                            <div class="place pink"><span class="icon flaticon-hotel-1"></span> Restourant </div>
                                            <span class="count">+3</span>
                                        </div>
                                        <div class="status">Open</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Listing lLock >
                            <div class="listing-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="images/resource/listing/2-3.jpg" alt=""></figure>
                                        <a href="#" class="like-btn"><span class="flaticon-heart"></span> Save</a>
                                    </div>
                                    <div class="lower-content">
                                        <div class="user-thumb"><img src="images/resource/user-thumb-3.jpg" alt="" /></div>
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="title">(7 review)</span>
                                        </div>
                                        <h3><a href="#">Best Museum</a></h3>
                                        <div class="text">This cafe is small but bustling.</div>
                                        <ul class="info">
                                            <li><span class="flaticon-pin"></span> Art & History</li>
                                            <li><span class="flaticon-phone-call"></span> +61 2 8236 9200 </li>
                                        </ul>
                                    </div>
                                    <div class="bottom-box">
                                        <div class="places"> 
                                            <div class="place purple"><span class="icon flaticon-museum"></span>Art & History </div>
                                            <span class="count">+3</span>
                                        </div>
                                        <div class="status">Now Closed</div>
                                    </div>
                                </div>
                            </div>
                        </div>
<?php
				$previous_page = $_GET['page_no']-1;
				$next_page = $_GET['page_no']+1;
				?>
                       <!-- Pagination -->
                        <nav class="ls-pagination">
                            <ul>
                                <li class="prev" <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
									<a <?php if($page_no > 1){ echo "href='?cid=".$cid."&page_no=$previous_page'"; } ?>><i class="flaticon-left"></i>Previous</a>
									</li>
								
								<!--li class="prev"><a href="#"><i class="flaticon-left"></i> Prev</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#" class="current-page">2</a></li>
                                <li><a href="#">3</a></li>
                                <li>...</li>
                                <li><a href="#">14</a></li-->
                                <?php
						if ($total_no_of_pages <= 10){
						for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
						if ($counter == $page_no) {
						echo "<li class='active'><a>$counter</a></li>";
						}else{
						echo "<li><a href='?cid=".$cid."&page_no=$counter'>$counter</a></li>";
						}
						}
						}
						elseif($total_no_of_pages > 10){
						 
						if($page_no <= 4) {
						for ($counter = 1; $counter < 8; $counter++){
						if ($counter == $page_no) {
						echo "<li class='active'><a>$counter</a></li>";
						}else{
						echo "<li><a href='?cid=".$cid."&page_no=$counter'>$counter</a></li>";
						}
						}
						echo "<li><a>...</a></li>";
						echo "<li><a href='?cid=".$cid."&page_no=$second_last'>$second_last</a></li>";
						echo "<li><a href='?cid=".$cid."&page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
						}
						 
						elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) {
						echo "<li><a href='?cid=".$cid."&page_no=1'>1</a></li>";
						echo "<li><a href='?cid=".$cid."&page_no=2'>2</a></li>";
						echo "<li><a>...</a></li>";
						for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {
						if ($counter == $page_no) {
						echo "<li class='active'><a>$counter</a></li>";
						}else{
						echo "<li><a href='?cid=".$cid."&page_no=$counter'>$counter</a></li>";
						}
						}
						echo "<li><a>...</a></li>";
						echo "<li><a href='?cid=".$cid."&page_no=$second_last'>$second_last</a></li>";
						echo "<li><a href='?cid=".$cid."&page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
						}
						 
						else {
						echo "<li><a href='?cid=".$cid."&page_no=1'>1</a></li>";
						echo "<li><a href='?cid=".$cid."&page_no=2'>2</a></li>";
						echo "<li><a>...</a></li>";
						 
						for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
						if ($counter == $page_no) {
						echo "<li class='active'><a>$counter</a></li>";
						}else{
						echo "<li><a href='?cid=".$cid."&page_no=$counter'>$counter</a></li>";
						}
						}
						}
						}
						?>
						 
						<li class="next" <?php if($page_no >= $total_no_of_pages){ echo "class='disabled'"; } ?>>
						<a <?php if($page_no < $total_no_of_pages) { echo "href='?cat_id=".$_GET["cat_id"]."&page_no=$next_page'"; } ?>>Next <i class="flaticon-right"></i></a>
						</li>
						<?php if($page_no < $total_no_of_pages){
						echo "<li><a href='?cat_id=".$_GET["cat_id"]."page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
						} ?>
								
								<!--li class="next"><a href="#">Next <i class="flaticon-right"></i> </a></li-->
                            </ul>
                        </nav>
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


