<?php 
////session_start();
//
require_once('includes/config.php');
//print_r($_POST);die;

//Array ( [searchtext] => hello [location] => trinity [categ] => 4 [submit] => Submit )
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Category</title>
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

    <!-- Listing Section / Sytle Two-->
    <section class="ls-section style-two">
        <div class="auto-container">
            <div class="filters-backdrop"></div>
            <?php
			//$catmaster = "select * from category_master";							
							
				//	$catmasname = mysqli_query($con,$catmaster);	
					
			?>
            <div class="row">

                <!-- Filters Column -->
                <div class="filters-column col-lg-4 col-md-12 col-sm-12">

                    <div class="inner-column">
                        <button type="button" class="theme-btn close-filters">X</button>

                        <!-- Top Filters >
                        <ul class="top-filters">
                            <li><a href="#">Search</a></li>
                            <!--li class="active"><a href="#">Filters</a></li>
                        </ul-->

                        <!-- Listing Form -->
                        <div class="listing-search-form">
                            <form method="POST" action="" enctype="multipart/form-data" id="search-form" onsubmit='return onsubmitform()'>		     				
                                <div class="row">
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <input type="text" name="searchtext" placeholder="What are you looking for?">
                                    </div>
                                    <!-- Form Group -->
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12 location">
                                        <input type="text" name="location" placeholder="Location">
                                        <span class="icon flaticon-placeholder"></span>
                                    </div>

                                    <!-- Form Group >
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <select name="searchincate" class="chosen-select">
										<option value="all">All Categories</option>
										<?php
										/*
										while($catmasrowname = mysqli_fetch_array($catmasname, MYSQLI_ASSOC))
										{
										?>                                           

										   
                                            <option value="<?php echo $catmasrowname["cat_id"];?>"><?php echo $catmasrowname["category_name"];?></option>
                                            
										<?php } */?>
                                        </select>
                                    </div-->
									<div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <button class="theme-btn btn-style-two" type="submit" id="submit" name="submit-form">Search Now</button>
                                        </div>
                                    <!-- Form Group >
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <select class="chosen-select">
                                            <option>Price</option>
                                            <option>Residential</option>
                                            <option>Commercial</option>
                                            <option>Industrial</option>
                                            <option>Apartments</option>
                                        </select>
                                    </div-->
                                </div>

								
                            </form>
                        </div>

                        <!-- Switchbox Outer >
                        <div class="switchbox-outer">

                            <ul class="switchbox">
                                <li>
                                    <label class="switch">
                                        <input type="checkbox" checked>
                                        <span class="slider round"></span>
                                        <span class="title">Open Now</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="switch">
                                        <input type="checkbox">
                                        <span class="slider round"></span>
                                        <span class="title">Near Me</span>
                                    </label>
                                </li>
                            </ul>
                        </div-->

                        <!-- Checkboxes Ouer >
                        <div class="checkbox-outer">
                            <h4>Tags</h4>
                            <ul class="checkboxes two-column">
                                <li>
                                    <input id="check-a" type="checkbox" name="check">
                                    <label for="check-a">Wireless Internet</label>                                
                                </li>
                                <li>
                                    <input id="check-b" type="checkbox" name="check">
                                    <label for="check-b">Bike Parking</label>                                
                                </li>
                                <li>
                                    <input id="check-c" type="checkbox" name="check">
                                    <label for="check-c">Good for Kids</label>                                
                                </li>
                                <li>
                                    <input id="check-d" type="checkbox" name="check">
                                    <label for="check-d">Street Parking</label>                                
                                </li>
                                <li>
                                    <input id="check-e" type="checkbox" name="check">
                                    <label for="check-e">Cable TV</label>                                
                                </li>
                                <li>
                                    <input id="check-f" type="checkbox" name="check">
                                    <label for="check-f">Hair Dryer</label>                                
                                </li>
                                <li>
                                    <input id="check-g" type="checkbox" name="check">
                                    <label for="check-g">Kitchen</label>                                
                                </li>
                                <li>
                                    <input id="check-h" type="checkbox" name="check">
                                    <label for="check-h">Parking</label>                                
                                </li>
                            </ul>
                        </div-->
                    </div>
                </div>
                <?php
				
				//print_r($_POST);die;
					if (isset($_POST['cid']) && $_POST['']!="")
					{ $cid = $_POST['cid'];}
					else
					{ $cid = $_GET['cid'];}
				
					
				
					$catsqlname = "select * from category_master where cat_id=".$cid;							
							
					$catresultname = mysqli_query($con,$catsqlname);	
					$catrowname = mysqli_fetch_array($catresultname, MYSQLI_ASSOC);
							
							//Array ( [searchtext] => flowers [location] => trinity [searchincate] => 6 [submit-form] => )
					$where = "";
					if($cid == 0)
					{
						$where .= " where category_id in (1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21)";
					}
					else
					{
						$where .= " where category_id = ".$cid;
					}
						
					if (isset($_POST['searchtext']) && $_POST['searchtext']!="") 
					{
						$where .= " and name like '%".$_POST['searchtext']."%'";
					} 
					if (isset($_POST['location']) && $_POST['location']!="") 
					{
						$where .= " and city like '%".$_POST['location']."%'";
					} 
					/*if (isset($_POST['searchincate']) && $_POST['searchincate']!="") 
					{
						if($_POST['searchincate'] == 'all')
						{
							$where .= " and category_id in (1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21)";
						}
						else
						{
							$where .= " and category_id = ".$_POST['searchincate'];
						}	
					}*/ 
					//echo $where;
					//die;
					
					/*Pagination*/
					if (isset($_GET['page_no']) && $_GET['page_no']!="") {
					$page_no = $_GET['page_no'];
					} 
					else 
					{
						$page_no = 1;
					}
					
					$total_records_per_page = 10;
					$offset = ($page_no-1) * $total_records_per_page;
					
					//echo "SELECT COUNT(*) As total_records FROM listing_master ".$where;
					$result_count = mysqli_query($con,"SELECT COUNT(*) As total_records FROM listing_master" .$where);
					$total_records = mysqli_fetch_array($result_count);
					$total_records = $total_records['total_records'];
					$total_no_of_pages = ceil($total_records / $total_records_per_page);
?>
                <!-- Content Column -->
                <div class="content-column col-lg-8 col-md-12 col-sm-12">
                    <div class="ls-outer">
                        <button type="button" class="theme-btn btn-style-two toggle-filters">Show Filters</button>

						
                        <!-- ls Switcher -->
                        <div class="ls-switcher">
                            <div class="showing-result">
                                <!--div class="arrange">
                                    <a href="#" class="active"><span class="icon flaticon-squares"></span></a>
                                    <a href="#"><span class="icon flaticon-setup"></span></a>
                                </div-->
                                <div class="text"><?php echo $total_records;?> Results Found in <?php echo $catrowname["category_name"];?> </span> category (Showing 1-10)</div>
                            </div>
                            <!--div class="sort-by">
                                <select class="chosen-select">
                                    <option>Sort By</option>
                                    <option>Residential</option>
                                    <option>Commercial</option>
                                    <option>Industrial</option>
                                    <option>Apartments</option>
                                </select>
                            </div-->
                        </div>
						
                        <!-- Listings -->
                        <div class="row">
						<?php
					
					
					
					$sql = "select * from listing_master ".$where."  order by name asc LIMIT $offset, $total_records_per_page";							
					$result = mysqli_query($con,$sql);							
							
							//die;
					
					while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
						{				
							$catsql = "select * from category_master where cat_id=".$row['category_id'];							
							
							$catresult = mysqli_query($con,$catsql);	
							$catrow = mysqli_fetch_array($catresult, MYSQLI_ASSOC);
							
							?>
                            <!-- Listing Block -->
                            <div class="listing-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="images/cate/<?php echo $catrowname["image"];?>" alt=""></figure>
                                        <!--div class="tags">
                                            <span>Featured</span>
                                            <span>$25 - $35</span>
                                        </div>
                                        <a href="#" class="like-btn"><span class="flaticon-heart"></span> Save</a-->
                                    </div>
                                    <div class="lower-content">
                                        <div class="user-thumb"><img src="images/cate/<?php echo $catrowname["image"];?>" alt=""></div>
                                        <!--div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="title">(7 review)</span>
                                        </div-->
                                        <h3><a href="<?php echo $my_global_variable;?>Listing/L-<?php echo $row['yid'];?>"><?php echo $row["name"];?><span class="icon icon-verified"></span></a></h3>
                                        <div class="text"><?php echo substr($row['description'], 0, 35);?>...</div>
                                        <ul class="info">
                                            <li><span class="flaticon-pin"></span> <?php echo $row['street'];?>, <?php echo $row['city'];?>, <?php echo $row['state_iso'];?>-<?php echo $row['postal_code'];?></li>
                                            <li><span class="flaticon-phone-call"></span> <?php echo $row['phone'];?> </li>
                                        </ul>
                                    </div>
                                    <div class="bottom-box">
                                        <div class="places"> 
                                            <div class="place">Category : <?php if($catrowname["category_name"] == "") echo  "All "; else echo $catrowname["category_name"];?> </div>
                                            <!--span class="count">+3</span-->
                                        </div>
                                        <!--div class="status">Now Closed</div-->
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
                            <ul class="pagination">
						 
						<li <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
						<a <?php if($page_no > 1){ echo "href='Category/".$_GET["cid"]."/$previous_page'"; } ?>>Previous</a>
						</li>
						 
						<?php
						if ($total_no_of_pages <= 10){
						for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
						if ($counter == $page_no) {
						echo "<li class='active'><a>$counter</a></li>";
						}else{
						echo "<li><a href='Category/".$_GET["cid"]."/$counter'>$counter</a></li>";
						}
						}
						}
						elseif($total_no_of_pages > 10){
						 
						if($page_no <= 4) {
						for ($counter = 1; $counter < 8; $counter++){
						if ($counter == $page_no) {
						echo "<li class='active'><a>$counter</a></li>";
						}else{
						echo "<li><a href='Category/".$_GET["cid"]."/$counter'>$counter</a></li>";
						}
						}
						echo "<li><a>...</a></li>";
						echo "<li><a href='Category/".$_GET["cid"]."/$second_last'>$second_last</a></li>";
						echo "<li><a href='Category/".$_GET["cid"]."/$total_no_of_pages'>$total_no_of_pages</a></li>";
						}
						 
						elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) {
						echo "<li><a href='Category/".$_GET["cid"]."/1'>1</a></li>";
						echo "<li><a href='Category/".$_GET["cid"]."/2'>2</a></li>";
						echo "<li><a>...</a></li>";
						for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {
						if ($counter == $page_no) {
						echo "<li class='active'><a>$counter</a></li>";
						}else{
						echo "<li><a href='Category/".$_GET["cid"]."/$counter'>$counter</a></li>";
						}
						}
						echo "<li><a>...</a></li>";
						echo "<li><a href='Category/".$_GET["cid"]."/$second_last'>$second_last</a></li>";
						echo "<li><a href='Category/".$_GET["cid"]."/$total_no_of_pages'>$total_no_of_pages</a></li>";
						}
						 
						else {
						echo "<li><a href='Category/".$_GET["cid"]."/1'>1</a></li>";
						echo "<li><a href='Category/".$_GET["cid"]."/2'>2</a></li>";
						echo "<li><a>...</a></li>";
						 
						for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
						if ($counter == $page_no) {
						echo "<li class='active'><a>$counter</a></li>";
						}else{
						echo "<li><a href='Category/".$_GET["cid"]."/$counter'>$counter</a></li>";
						}
						}
						}
						}
						?>
						 
						<li <?php if($page_no >= $total_no_of_pages){ echo "class='disabled'"; } ?>>
						<a <?php if($page_no < $total_no_of_pages) { echo "href='Category/".$_GET["cid"]."/$next_page'"; } ?>>Next</a>
						</li>
						<?php if($page_no < $total_no_of_pages){
						echo "<li><a href='Category/".$_GET["cid"]."/$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
						} ?>
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