<script>
function onsubscribe()
{
	if(document.getElementById('subs_email').value=='')
	{
		alert('Please enter your email');
		document.getElementById('subs_email').focus();
		return false;
	}
	
}
</script>

<!-- Footer start -->
<footer class="footer">
    <div class="container footer-inner">
        <div class="row">
            <div class="col-xl-7 col-lg-4 col-md-6 col-sm-6">
                <div class="footer-item clearfix">
                    <img src="img/logos/logo.png" alt="logo" class="f-logo">
                    <div class="texts">
                        <p>Welcome to SmartBusinessSearch.com, the forefront of innovative business listings. Born out of a passion to bridge local enterprises with the community, we are more than just a directory. We're a platform dedicated to spotlighting the essence of local businesses, offering comprehensive insights into what they truly represent. With a user-friendly interface, robust search capabilities, and a vast database, we aspire to be the go-to source for discovering businesses, big or small. Our commitment lies in facilitating meaningful connections, ensuring every search yields results that matter. Dive in, explore, and let SmartBusinessSearch guide your next local discovery.</p>
                    </div>
                </div>
            </div>
            <!--div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>Contact Us</h4>
                    <ul class="contact-info">
                        <li>
                            <i class="flaticon-pin"></i>20/F Green Road, Dhanmondi, Dhaka
                        </li>
                        <li>
                            <i class="flaticon-mail-1"></i><a href="mailto:sales@hotelempire.com">info@themevessel.com</a>
                        </li>
                        <li>
                            <i class="flaticon-earth"></i><a href="mailto:sales@hotelempire.com">info@green.com</a>
                        </li>
                        <li>
                            <i class="flaticon-phone"></i><a href="tel:+55-417-634-7071">+0477 85X6 552</a>
                        </li>
                        <li>
                            <i class="flaticon-fax"></i>+0044 85X6 000
                        </li>
                    </ul>
                </div>
            </div-->
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>Useful Links</h4>
                    <ul class="links">
                        <li>
                            <a href="/index">Home</a>
                        </li>
                        <li>
                            <a href="/allcategories">Categories</a>
                        </li>
                        <!--li>
                            <a href="pricing-tables.html">Listin</a>
                        </li>
                        <li>
                            <a href="blog-details.html">Blog Post</a>
                        </li-->
                        <li>
                            <a href="/contact">Contact Us</a>
                        </li>
                        <li>
                            <a href="/privacy-policy">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="/termsandconditions">Terms & Conditions</a>
                        </li>
                    </ul>
                </div>
            </div>
			
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item clearfix">
                    <h4>Subscribe to Newsletter</h4>
                    <div class="Subscribe-box">
                        <!--p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy </p-->
						<?php
						$current_file_name = basename($_SERVER['PHP_SELF']);
						//echo $current_file_name."\n";
						
						if(isset($_GET['value'])) 
						{	
							echo "<div style='color:#868992;'>Thanks for subscribing for our Newsletter</div>";
						}
						else
						{	
						?>
                        <form class="form-inline" method="post" action="subscribe.php" enctype="multipart/form-data" id="subscribe-form" onsubmit='return onsubscribe()'>						
                            <input type="text" class="form-control mb-sm-0" id="subs_email" name="subs_email" placeholder="Email Address">
							<input type="hidden" name="curr_page" value="<?php echo $current_file_name;?>">
                            <button type="submit" class="btn"><i class="fa fa-paper-plane"></i></button>
                        </form>
						<?php } ?>
                    </div>
                </div>
            </div>
			
        </div>
    </div>
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                     <p class="copy">&copy; SmartBusinessSearch <?php echo date("Y");?><!--a href="#">Theme Vessel.</a> Trademarks and brands are the property of their respective owners.</p-->
                </div>
                <!--div class="col-lg-4 col-md-12">
                    <ul class="social-list clearfix">
                        <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="rss-bg"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div-->
            </div>
        </div>
    </div>
</footer>
<!-- Footer end -->
