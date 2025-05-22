<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Garden Care || Contact Page || Gardening and Landscaping HTML Template</title>
	
	<!-- Responsive Meta Tag -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- main stylesheet -->
	<link rel="stylesheet" href="css/style.css">
	<!-- responsive stylesheet -->
	<link rel="stylesheet" href="css/responsive.css">

        
    

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="js/respond.js"></script>
	<![endif]-->


</head>
<body>

<?php include 'layout/header.php'; ?>



<!-- #page-title -->
<section id="breadcrumb-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumb-title text-center">
					<h1>Contact us</h1>
						<!-- <a href="index.html">Home</a> <i class="fa fa-angle-right"></i> <span>Contact us</span> -->
					</div> <!-- /.page-breadcumb -->
				</div>
			</div>
		</div>
	</section> <!-- /#page-title -->
	
	<!-- #contact-content -->
	<section id="contact-content">
		<div class="container">
			<div class="section-title2">
				<p>We Are Available</p>
                <h1><span>Get in touch</span></h1>
                <p class="title-text">We’re here to help you grow a lawn you can be proud of. Whether you need a quote, have questions about our services, or just want expert advice—we’d love to hear from you. Reach out to us by phone, email, or the contact form below, and a member of our family team will get back to you promptly.
Let’s make your lawn the best on the block—starting today!</p>
            </div>
            <div class="row">
				<div class="contact-address-info">
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="contact-address-single-info">
							<div class="contact-address-bg"></div>
                            <div class="contact-addresss-icon">
								<i class="fa fa-map-marker"></i>
                            </div>
                            <div class="contact-address-text">
								<p>4601 telluride Dr killeen tx 76542</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="contact-address-single-info">
							<div class="contact-address-bg"></div>
                            <div class="contact-addresss-icon">
								<i class="fa fa-envelope-o envelop-icon"></i>
                            </div>
                            <div class="contact-address-text special-info">
								<p>horseshoelawncare@outlook.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    	<div class="contact-address-single-info">
                        	<div class="contact-address-bg"></div>
                            <div class="contact-addresss-icon">
                            	<i class="fa fa-phone phoneicon phone-icon"></i>
                            </div>
                            <div class="contact-address-text special-info">
								<p>254-768-1925</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
					<form action="inc/sendemail.php" class="contact-form">
						<p><input type="text" name="name" placeholder="Name"></p>
						<p><input type="text" name="email" placeholder="Email"></p>
						<p><input type="text" name="subject" placeholder="Subject"></p>
						<p><textarea name="message" placeholder="Message"></textarea></p>
                    	<button type="submit" class="contact-submit-button">
							<span>submit now</span>
                            <i class="fa fa-arrow-circle-right"></i>
                    	</button>
						
					</form>
				</div>
				<!-- <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="working-hour-content">
						<div class="section-title2">
							<h1><span>Working hours</span></h1>
                            <ul>
								<li>Monday: <span>8am to 5pm</span></li>
                                <li>Tuesday: <span>8am to 5pm</span></li>
                                <li>Wednesday: <span>8am to 5pm</span></li>
                                <li>Thursday: <span>8am to 5pm</span></li>
                                <li>Friday: <span>8am to 5pm</span></li>
                                <li>Saturday : <span>9am to 2pm</span></li>
                                <li>Sunday:<span>Closed</span></li>
                            </ul>
            			</div>
                    </div>
				</div> -->
			</div>
			
		</div>
	</section> <!-- /#contact-content -->
    
    <!-- <section id="google-map-area">
		<div class="google-map" id="contact-google-map" data-map-lat="40.650002" data-map-lng="-73.949997" data-icon-path="img/resources/map-marker.png" data-map-title="Awesome Place" data-map-zoom="12"></div>
    </section> -->

 <iframe 
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3383.8262289397535!2d-97.72667878482757!3d31.03693118151844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864523c95392b38d%3A0x60b6f1c05d85b1f9!2s4601%20Telluride%20Dr%2C%20Killeen%2C%20TX%2076542%2C%20USA!5e0!3m2!1sen!2sin!4v1685733298471!5m2!1sen!2sin" 
    width="80%" 
    height="500" 
    style="border:0; display:block; margin: 0 auto;" 
    allowfullscreen="" 
    loading="lazy" 
    referrerpolicy="no-referrer-when-downgrade">
  </iframe>


	<br><br><br>
	<?php include 'layout/footer.php'; ?>
	


	
	<script src="js/jquery.min.js"></script> <!-- jQuery JS -->
	<script src="js/bootstrap.min.js"></script> <!-- BootStrap JS -->
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script> <!-- Gmap Helper -->
	<script src="js/gmap.js"></script> <!-- gmap JS -->
	<script src="js/wow.js"></script> <!-- WOW JS -->
	<script src="js/isotope.pkgd.min.js"></script> <!-- iSotope JS -->
	<script src="js/validate.js"></script> <!-- Form Validator JS -->
	<script src="js/owl.carousel.min.js"></script> <!-- OWL Carousle JS -->
	<script src="js/jquery.fancybox.pack.js"></script> <!-- FancyBox -->
	<script src="js/jquery.easing.min.js"></script> <!-- EaseIng JS -->
	<script src="js/custom.js"></script> <!-- Custom JS -->

</body>
</html>