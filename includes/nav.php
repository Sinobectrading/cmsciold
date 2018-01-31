<div class="banner-info" id="nav">
	<div class="banner-top">
		<div class="container">
			<div class="col-md-6 banner-top-left wow fadeIn animated hidden-xs" data-wow-delay=".5s">
				<ul class="social-icons">
					<li><a href="#"> </a></li>
					<li><a href="#" class="fb"> </a></li>
					<li><a href="#" class="in"> </a></li>
					<li><a href="#" class="dott"> </a></li>
				</ul>
			</div>
			<div class="col-md-1 col-xs-3 midd">
				<a href="index.php"><img class="wow fadeIn animated" data-wow-delay=".5s" src="images/logows.png"></a>
			</div>
			<div class="col-md-5 col-xs-9 banner-top-right wow fadeIn animated" data-wow-delay=".5s">
				<p><span class="glyphicon glyphicon-earphone"></span> +1 (905) 660-4488 </p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

	<!--navigation-->
	<div class="top-nav wow" id="tnav">
		<div class="container">
			<div class="navbar-header logo">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					Menu
				</button>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<div class="menu">
					<ul class="nav navbar">
						<!-- <li><img src="images/Logows.png"></li> -->
						<li class="menu-item"><a href="index.php" class="menu-link">Home</a></li>
						 
						<li <?php if($current == "products") echo "class=\"menu-item menu-item-current\""; else echo "class=\"menu-item\"";?>    >
							<a data-toggle="dropdown"  class="menu-link">Products
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
								<li role="presentation"><a role="menuitem"  href="standard.php">Standard Extrusion</a></li>
 								<li role="presentation"><a role="menuitem"  href="steel.php">Aluminum Casting</a></li>
								<li role="presentation"><a role="menuitem"  href="steel.php">Aluminum Plates&Sheets</a></li>
								<li role="presentation"><a role="menuitem"  href="steel.php">Canopy</a></li>
								<li role="presentation"><a role="menuitem"  href="steel.php">Flooring</a></li>
								<li role="presentation"><a role="menuitem"  href="steel.php">Hardware</a></li>
								<li role="presentation"><a role="menuitem"  href="steel.php">Finished Railing</a></li>
 								<li role="presentation"><a role="menuitem"  href="steel.php">Shower Door</a></li>
								<li role="presentation"><a role="menuitem"  href="steel.php">Steel</a></li>
 								<li role="presentation"><a role="menuitem"  href="steel.php">Others</a></li>
 							</ul>
						</li>
					 
					 


						<li <?php if($current == "contact") echo "class=\"menu-item menu-item-current\""; else echo "class=\"menu-item\""; ?>   >
							<a href="contact.php" class="menu-link">Contact</a>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
				
			</div>
		</div>
	</div>	
	<!--//navigation-->
</div>