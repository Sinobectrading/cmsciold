 <header class="navbar navbar-default navbar-fixed-top" id="header">
   	<div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php"><img src="images/cmsci_90.png" alt="logo"></a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		     </button>
     	</div>
    
    <nav id="bs-navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
        	<li <?php if($current == "index") echo "class=\"menu-item menu-item-current\""; else echo "class=\"menu-item\"";?>>
				<a href="index.php" class="menu-link">Home</a>
			</li>

			<li <?php if($current == "about") echo "class=\"menu-item menu-item-current\""; else echo "class=\"menu-item\"";?>>
				<a data-toggle="dropdown"  class="menu-link">About
					<span class="caret"></span>
				</a>
				<ul class="dropdown-menu" role="menu" aria-labelledby="menu1" id="ppm">
					<li role="presentation" data-menuanchor="home2"><a role="menuitem"  href="index.php#home2">About Us</a></li>
					<li role="presentation" data-menuanchor="home4"><a role="menuitem"  href="index.php#home4">Services</a></li>
				</ul>
			</li>
			
		 
			<li <?php if($current == "products") echo "class=\"menu-item menu-item-current\""; else echo "class=\"menu-item\"";?>    >
				<a data-toggle="dropdown"  class="menu-link">Products
					<span class="caret"></span>
				</a>
				<ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
					<li role="presentation"><a role="menuitem"  href="extrusion.php">Extrusion</a></li>
					<li role="presentation"><a role="menuitem"  href="plate.php">Plates & Sheets</a></li>
					<!-- <li role="presentation"><a role="menuitem"  href="steel.php">Flooring</a></li>
					<li role="presentation"><a role="menuitem"  href="steel.php">Hardware</a></li>
					<li role="presentation"><a role="menuitem"  href="steel.php">Finished Railing</a></li> -->
					<li role="presentation"><a role="menuitem"  href="steel.php">Steel</a></li>
					<!-- <li role="presentation"><a role="menuitem"  href="steel.php">Others</a></li> -->
				</ul>
			</li>

			<li <?php if($current == "contact") echo "class=\"menu-item menu-item-current\""; else echo "class=\"menu-item\"";?>>
				<a href="contact.php" class="menu-link">Contact</a>
			</li>
            <li>
                <a class="hamburger hidden-xs" href="#">
                    <div class="catcher"></div>
                    <span class="bar top"></span>
                    <span class="bar middle"></span>
                    <span class="bar bottom"></span></a>
            </li>
             
        </ul>
    </nav>
    </div>
 </header>
 