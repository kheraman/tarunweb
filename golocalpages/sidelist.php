<?php 
session_start();
error_reporting(1);
require_once('includes/config.php');
//print_r($_POST);
?>
<!DOCTYPE html>
<html lang="zxx">
<script>

function onsubmitform()
{
	if(document.getElementById('searchtext').value=='')
	{
		alert('Please enter text to search');
		document.getElementById(searchtext).focus();
		return false;
	}
	
</script>


<!-- Main header start -->
<?php include("header.php");?>
<!-- Main header end -->
<?php

$catsqlname = "select * from category_master where cat_id=".$_GET['cat_id'];							
							
							$catresultname = mysqli_query($con,$catsqlname);	
							$catrowname = mysqli_fetch_array($catresultname, MYSQLI_ASSOC);
?>
<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1><?php echo $catrowname["category_name"];?></h1>
            <!--ul class="breadcrumbs">
                <li><a href="index.php">Home</a></li>
                <li class="active"><?php //echo $catrowname["category_name"];?></li>
            </ul-->
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Listing section start -->
<div class="listing-section content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <!-- Option bar start >
                <div class="option-bar">
                    <div class="row">
                        <div class="col-lg-6 col-md-7 col-sm-8 col-8">
                            <div class="sorting-options2">
                                <span class="sort">Sort by:</span>
                                <select class="selectpicker search-fields" name="default-order">
                                    <option>Default Order</option>
                                    <option>Price High to Low</option>
                                    <option>Price: Low to High</option>
                                    <option>Newest listing</option>
                                    <option>Oldest listing</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-5 col-sm-4 col-4">
                            <div class="sorting-options">
                                <a href="list-sidebar.html" class="change-view-btn active-view-btn"><i class="fa fa-th-list"></i></a>
                                <a href="grid-sidebar.html" class="change-view-btn"><i class="fa fa-th-large"></i></a>
                            </div>
                        </div>
                    </div>
                </div-->
                <!-- Listing item box start -->
                <div class="listing-item-box-2" >
                    <div class="row">
                        <?php
					if (isset($_POST['searchtext']) && $_POST['searchtext']!="") 
					{
						$where = " and name like '%".$_POST['searchtext']."%'";
					} 
					else 
					{
						$where = "";
					}
					/*Pagination*/
					if (isset($_GET['page_no']) && $_GET['page_no']!="") {
					$page_no = $_GET['page_no'];
					} 
					else 
					{
						$page_no = 1;
					}
					
					$total_records_per_page = 9;
					$offset = ($page_no-1) * $total_records_per_page;
					
					$result_count = mysqli_query($con,"SELECT COUNT(*) As total_records FROM listing_master where category_id=".$_GET["cat_id"]." ".$where);
					$total_records = mysqli_fetch_array($result_count);
					$total_records = $total_records['total_records'];
					$total_no_of_pages = ceil($total_records / $total_records_per_page);
					
					
					$sql = "select * from listing_master where category_id = ".$_GET["cat_id"]." ".$where." LIMIT $offset, $total_records_per_page";							
					$result = mysqli_query($con,$sql);							
							
							//die;
					
					while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
						{				
							$catsql = "select * from category_master where cat_id=".$row['category_id'];							
							
							$catresult = mysqli_query($con,$catsql);	
							$catrow = mysqli_fetch_array($catresult, MYSQLI_ASSOC);
							
							?>
						
						<!--div class="col-lg-5 col-md-5 col-pad">
                            <div class="listing-thumbnail">
                                <a href="listing-single.html" class="listing-img">
                                    <img src="img/cate/<?php //echo $catrow['image'];?>" alt="listing-photo-2" class="img-fluid">
                                    <div class="tag"><?php //echo $catrow['category_name'];?></div>
                                    <div class="icon">
                                        <i class="flaticon-heart"></i>
                                    </div>
                                    <div class="user">
                                        <div class="avatar">
                                            <img src="img/avatar/avatar-4.png" alt="avatar" class="img-fluid rounded-circle">
                                        </div>
                                        <div class="name">
                                            <h5>Ai Mamun</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div-->
						
                        <div class="col-lg-12 col-md-12 col-pad align-self-center">
                            <div class="detail">
                                <h3 class="title">
                                    <a href="<?php echo $my_global_variable;?>Listing/L-<?php echo $row['yid'];?>"><?php echo $row['name'];?></a>
                                </h3>
                                <div class="location clearfix">
                                     <a href="#"><i class="flaticon-pin"></i><?php echo $row['street'];?>, <?php echo $row['city'];?>-<?php echo $row['postal_code'];?></a>
                                </div>
								<!--div style="padding-left: 25px;color:#008020">Category : <?php //echo $catrow['category_name'];?></div-->
                                <p><?php echo substr($row['description'], 0, 150);?>...</p>
                                <!--div class="ratings">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <span>( 7 Reviews )</span>
                                </div-->
                            </div>
							<div style="margin: 10px;"></div> 
                        </div> 
						
						<?php } ?>
                    </div>
                </div>
                <?php
				$previous_page = $_GET['page_no']-1;
				$next_page = $_GET['page_no']+1;
				?>
                <!-- Page navigation start -->
                <div class="pagination-box p-box text-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                           
						 
							
							<li class="page-item" <?php if($page_no <= 1){ echo "disabled"; } ?>>
                                <a class="page-link" <?php if($page_no > 1){ echo "href='?cat_id=".$_GET["cat_id"]."&page_no=$previous_page'"; } ?>>Prev</a>
                            </li>
                            <?php
						if ($total_no_of_pages <= 10){
						for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
						if ($counter == $page_no) {
						echo "<li class='active'><a>$counter</a></li>";
						}else{
						echo "<li><a href='?cat_id=".$_GET["cat_id"]."&page_no=$counter'>$counter</a></li>";
						}
						}
						}
						elseif($total_no_of_pages > 10){
						 
						if($page_no <= 4) {
						for ($counter = 1; $counter < 8; $counter++){
						if ($counter == $page_no) {
						echo "<li class='active'><a>$counter</a></li>";
						}else{
						echo "<li><a href='?cat_id=".$_GET["cat_id"]."&page_no=$counter'>$counter</a></li>";
						}
						}
						echo "<li><a>...</a></li>";
						echo "<li><a href='?cat_id=".$_GET["cat_id"]."&page_no=$second_last'>$second_last</a></li>";
						echo "<li><a href='?cat_id=".$_GET["cat_id"]."&page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
						}
						 
						elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) {
						echo "<li><a href='?cat_id=".$_GET["cat_id"]."&page_no=1'>1</a></li>";
						echo "<li><a href='?cat_id=".$_GET["cat_id"]."&page_no=2'>2</a></li>";
						echo "<li><a>...</a></li>";
						for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {
						if ($counter == $page_no) {
						echo "<li class='active'><a>$counter</a></li>";
						}else{
						echo "<li><a href='?cat_id=".$_GET["cat_id"]."&page_no=$counter'>$counter</a></li>";
						}
						}
						echo "<li><a>...</a></li>";
						echo "<li><a href='?cat_id=".$_GET["cat_id"]."&page_no=$second_last'>$second_last</a></li>";
						echo "<li><a href='?cat_id=".$_GET["cat_id"]."&page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
						}
						 
						else {
						echo "<li><a href='?cat_id=".$_GET["cat_id"]."&page_no=1'>1</a></li>";
						echo "<li><a href='?cat_id=".$_GET["cat_id"]."&page_no=2'>2</a></li>";
						echo "<li><a>...</a></li>";
						 
						for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
						if ($counter == $page_no) {
						echo "<li class='active'><a>$counter</a></li>";
						}else{
						echo "<li><a href='?cat_id=".$_GET["cat_id"]."&page_no=$counter'>$counter</a></li>";
						}
						}
						}
						}
						?>
						 
						<li <?php if($page_no >= $total_no_of_pages){ echo "class='disabled'"; } ?>>
						<a <?php if($page_no < $total_no_of_pages) { echo "href='?cat_id=".$_GET["cat_id"]."&page_no=$next_page'"; } ?>>Next</a>
						</li>
						<?php if($page_no < $total_no_of_pages){
						echo "<li><a href='?cat_id=".$_GET["cat_id"]."page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
						} ?>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="sidebar-right">
                    <!-- Advanced search start -->
                    <div class="widget-3 advanced-search">
                        <h3 class="sidebar-title">Search</h3>
                        <form method="POST" action="" enctype="multipart/form-data" id="search-form" onsubmit='return onsubmitform()'>
		     		
                            <div class="form-group">
                                <input type="text" name="searchtext" class="form-control selectpicker search-fields" placeholder="What are you looking for?">
                            </div>
                                                        
                            <div class="form-group mb-0">
                                <button class="search-button">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Listing section end -->

<!-- Footer start -->
<?php include("footer.php");?>
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
</body>
</html>