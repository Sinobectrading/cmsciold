<?php  $current = "contact"; ?>
<!DOCTYPE html>
<html>
<head>
<title>CMSCI</title>
<!--mobile apps-->

<?php include('includes/header.php');  ?>
<style>
::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
    color: #6d706f ! important;
    opacity: 1; /* Firefox */
}
::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  color: #6d706f   ! important;
}
::-moz-placeholder { /* Firefox 19+ */
  color: #6d706f   ! important;
}
:-ms-input-placeholder { /* IE 10+ */
  color: #6d706f  ! important;
}
:-moz-placeholder { /* Firefox 18- */
  color: #6d706f  ! important;
}
</style>
</head>
<body id="contactpage">
<!--banner-->
<div  id="contacthome">
	<?php include('includes/nav.php'); ?>
</div>
<!--//banner-->

<!--contact -->
<div class="welcome contact" id="contact">
	<div class="container">
		<h3 class="title wow fadeInDown animated" data-wow-delay=".5s">Contact Us</h3>
		<div class="contact-row">
			<div class="center clearfix">
<!-- 					<h4>Address:</h4>
-->					<div class="address-left">
						<p>Address:</p>
					<p>18 Killaloe Road Unit 3, Vaughan<br>ON, CAN L4K 2P2</p>
				</div>
				<div class="address-right">
					<p>Telephone : +1 (905) 660-4448</p>
                                            <p>Fax : +1 (905) 660-8875</p>
					<p>E-mail : <a href="mailto:contact@cmsci.ca">contact@cmsci.ca</a></p>
				</div>
			</div>
			<div class="col-md-6 contact-left">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2879.9183510585144!2d-79.51410768500372!3d43.79530725124869!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b2e525cc4d709%3A0x86a10340ac6f7c60!2s18+Killaloe+Rd+%233%2C+Vaughan%2C+ON+L4K+2P2!5e0!3m2!1szh-CN!2sca!4v1467056118026" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				
			</div>
			<div class="col-md-6 contact-right wow slideInRight animated" data-wow-delay=".5s">
				
				<div class="clearfix"></div>
				<!--accordion-->
				<div class="info">
					<div class="contact-form">
 						<form class="wow fadeInUp animated" data-wow-delay=".5s">
							<input type="text" placeholder="Name" required >
							<input class="email" type="email" placeholder="Email" required >
							<input type="tel" placeholder="Phone" required >
							<textarea placeholder="Message" required ></textarea>
							<input class="wow zoomIn animated" data-wow-delay=".5s" type="submit" value="Send Message" >
						</form>

					</div>
					
				</div>
				<!--accordion-->
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
		
	</div>
</div>
<!--//contact -->
<?php include('includes/footer.php'); ?>
</body>
</html>