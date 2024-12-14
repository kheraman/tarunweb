<!DOCTYPE html>
<html lang="zxx">

<?php include("header.php");?>
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
   if(document.getElementById('phone').value=='')
	{
		alert('Please enter Phone');
		document.getElementById('phone').focus();
			return false;
	}
	
   if(document.getElementById('subject').value=='')
	{
		alert('Please enter subject');
		document.getElementById('subject').focus();
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
<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <?php include("header1.php");?>
    <!-- Header End -->
<!-- Hero Section Begin -->
    <div class="hero-listing set-bg" data-setbg="img/how-it-works-bg.jpg">
    </div>
    <!-- Hero Section End -->
    <!-- Map Section Begin>
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26440.72384129847!2d-118.24906619231132!3d34.06719475913053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c659f50c318d%3A0xe2ffb80a9d3820ae!2sChinatown%2C%20Los%20Angeles%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1570213740685!5m2!1sen!2sbd"
            height="657" style="border:0;" allowfullscreen="">
        </iframe>
    </div>
    <!-- Map Section End -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cs-info">
                        <h2>Contact Us</h2>
                        <p>Please fill the details below for any issues or business partnerships related queries.  Our representative will get in touch with you at the earliest.  </p>
                        <!--span>Main Road , No 25/11</span>
                        <ul>
                            <li>+34 556788 3221</li>
                            <li>contact@pizzaplace.com</li>
                        </ul-->
                    </div>
                </div>
                <!--div class="col-lg-6">
                    <div class="contact-add">
                        <img src="img/contact-add.png" alt="">
                    </div>
                </div-->
            </div>
			<div class="row">
                <div class="col-lg-12">
                    <form method="post" action="mailer.php" enctype="multipart/form-data" id="contact-form" class="contact-form" onsubmit='return onsubmitform()'>
                        <div class="row">
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
					?>
                            <div class="col-lg-6">
                                <input type="text" name="name"  id="name" placeholder="Your Name">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="email" id="email" placeholder="Your E-mail">
                            </div>
							<div class="col-lg-6">
                                <input type="text" name="phone" id="phone" placeholder="Your Phone">
                            </div>
							<div class="col-lg-6">
                                <input type="text" name="subject" id="subject" placeholder="Subject">
                            </div>
							<div class="col-lg-12">
                                <input type="text" name="message" id="message" placeholder="Message">
                            </div>
                            
							<div class="col-lg-8">
                                <input type='text' name='captcha' id='captcha' placeholder='Please enter the code shown in the image' class="form-control" > 
                            </div>
							<div class="col-md-4">
									<img src="captcha.php" />
								</div>
							<div class="col-lg-12 text-center">
								<button type="submit">Send Message</button>
							</div>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </section>
    <!-- Contact Section End -->

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
</body>

</html>