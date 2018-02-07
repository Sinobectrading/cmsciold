<?php  $current = "products"; ?>
<!DOCTYPE html>
<html>
<head>
<title>CMSCI</title>

<?php include('includes/header.php');  ?>
<link rel="stylesheet" href="css/sidebar.css">
<style>
.cd-side-nav a img {
	height: 14px;
	width: 14px;
	display: inline-block;
	padding-left: 5px;
}
.cd-side-nav li:not(.has-children) {
	padding-left: 25px
}
#product h4 {
	color: #333;
}
#cnt div {
	padding-top: 0px
}
#cnt div p span {
	font-size: 14px
}
#cnt div img {
	padding-top: 15px;
	padding-bottom: 30px;
}
#cnt div h4 {
	font-size: 18px;
	font-weight: 500
}
#cnt h1 {
	padding-top: 40px;
	padding-bottom: 0px;
}
#work{

}
.has-children ul li {
	min-height: 20px
}
</style>
</head>
<body>
<!--banner-->
<div  id="home">
	<?php include('includes/nav.php'); ?>
</div>
<!--//banner-->

<!--work-->
<div class="welcome work" id="work">
	<div class="container">
		<div class="work-info">
			<div class="col-md-12 work-grids work-grd1 wow slideInLeft animated" data-wow-delay=".5s">
				<h3 class="title"><a href="alumnium.php">Alumnium</a></h3>
				<p></p>
				 
			</div>

			<div class="col-md-12 work-grids wow fadeIn animated" data-wow-delay=".5s">
				 <main class="cd-main-content">
					<nav class="cd-side-nav">
						<ul id="product">
<!-- 						<li class="cd-label">Main</li>
 -->						<li class="has-children overview">
								<a>Standard Extrusion <img src="img/dr.png" alt=""></a>
								<ul>
									<li><a class="ajaxcnt">Round Extrusion</a></li>
									<li><a class="ajaxcnt">Tube Sharp Corner</a></li>
									<li><a class="ajaxcnt">Round Tube</a></li>
									<li><a class="ajaxcnt">Channel Square Corner</a></li>
									<li><a class="ajaxcnt">Channel Round Corner</a></li>
									<li><a class="ajaxcnt">Beam Square Corner</a></li>
									<li><a class="ajaxcnt">Beam Round Corner</a></li>
									<li><a class="ajaxcnt">Angle Sharp Corner</a></li>
									<li><a class="ajaxcnt">Angle Round Corner</a></li>
									<li><a class="ajaxcnt">Schedule Num Pipe</a></li>
									<li><a class="ajaxcnt">Flat Bar Sharp Corner</a></li>
									<li><a class="ajaxcnt">Square Bar Sharp Corner</a></li>
									<li><a class="ajaxcnt">Rod</a></li>
									<li><a class="ajaxcnt">TEE Round Corner</a></li>
									<li><a class="ajaxcnt">Custom Shape</a></li>
								</ul>
							</li>

							<li class="has-children comments">
								<a class="ajaxcnt">Customized Extrusion</a>
								<!-- <ul>
									<li><a id="c07" class="ajaxcnt">Category 1</a></li>
									<li><a id="c08" class="ajaxcnt">Category 2</a></li>
									<li><a id="c09" class="ajaxcnt">Category 2</a></li>
									<li><a id="c10" class="ajaxcnt">Category 2</a></li>
									<li><a id="c11" class="ajaxcnt">Category 2</a></li>
									<li><a id="c12" class="ajaxcnt">Category 2</a></li>
								</ul> -->
							</li>
							
							<li class="has-children comments">
								<a class="ajaxcnt">Al Casting</a> 
							</li>

							<li class="has-children bookmarks">
								<a>Plates & Sheets <img src="img/dr.png" alt=""></a>
								<ul>
									<li><a class="ajaxcnt">Alloy 1xxx</a></li>
									<li><a class="ajaxcnt">Alloy 2xxx</a></li>
									<li><a class="ajaxcnt">Alloy 3xxx</a></li>
									<li><a class="ajaxcnt">Composite Panel</a></li>
									<li><a class="ajaxcnt">Alloy 5xxx</a></li>
									<li><a class="ajaxcnt">Alloy 6xxx</a></li>
									<li><a class="ajaxcnt">Alloy 7xxx</a></li>
									<li><a class="ajaxcnt">Alloy 8xxx</a></li>
									<li><a class="ajaxcnt">Painted Coil</a></li>
									<li><a class="ajaxcnt">Cold Rolled Coil</a></li>
									<li><a class="ajaxcnt">Other</a></li>
								</ul>
							</li>

							<li class="has-children comments">
								<a>Canopy</a> 
							</li>

							<li class="has-children bookmarks">
								<a>Flooring <img src="img/dr.png" alt=""></a>
								<ul>
									<li><a>Bamboo Floor</a></li>
									<li><a>Engineered Floor</a></li>
									<li><a>Laminated Floor</a></li>
									<li><a>Inside PVC Floor</a></li>
									<li><a>Outside PVC Floor</a></li>
									<li><a>Hardwood</a></li>
								</ul>
							</li>

							<li class="has-children comments">
								<a>Hardware</a> 
							</li>
							
							<li class="has-children comments">
								<a>Finished Railing <img src="img/dr.png" alt=""></a>
								<ul>
									<li><a>Long Profiles</a></li>
									<li><a>Accessories</a></li>
								</ul>
							</li>

							<li class="has-children comments">
								<a>Glass <img src="img/dr.png" alt=""></a>
								<ul>
									<li><a>Clear tempered glass</a></li>
								</ul>
							</li>

							<li class="has-children comments">
								<a>Shower Door</a> 
							</li>
						
							<li class="has-children images">
								<a>Steel <img src="img/dr.png" alt=""></a>
								<ul>
									<li><a>Stainless Steel</a></li>
									<li><a>Galvanized steel</a></li>
									<li><a>Carbon steel</a></li>
								</ul>
							</li>

							<li class="has-children users">
								<a>Painting</a>
							</li>
		 
							<li class="has-children comments">
								<a>Plastic <img src="img/dr.png" alt=""></a>
								<ul>
									<li><a>Rubber clip</a></li>
								</ul>
							</li>

							<li class="has-children users">
								<a>Other</a>
							</li>

						<!-- <ul>
							<li class="cd-label">Action</li>
							<li class="action-btn"><a href="#0">+ Button</a></li>
						</ul> -->
						</ul>
					</nav>

					<div class="content-wrapper" id="cnt">
						<!-- <h1>Summary</h1> -->
						<div class="col-md-6">
							<img src="images/product/001.jpg" alt="">
						</div>
						<div class="col-md-6">
							<img src="images/product/002.jpg" alt="">
						</div>
						<div class="col-md-6">
							<img src="images/product/003.jpg" alt="">
						</div>
						<div class="col-md-6">
							<img src="images/product/004.jpg" alt="">
						</div>
					</div> <!-- .content-wrapper -->
				</main> <!-- .cd-main-content -->
			</div>
			
			 
			<div class="clearfix"> </div>
		</div>
	</div>
</div>

<?php include('includes/footer.php'); ?>
<script src="js/jquery.menu-aim.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
<script>
$(document).ready(function(){
	$('li.has-children ul li > a').click(function(event) {
		event.preventDefault();
	    $('li.has-children').removeClass('active');
	    $(this).closest("ul").parent().addClass('active');
	});

	$(".ajaxcnt").click(function(){
		var str = $(this).text();
		var url = str.replace(/\s/g, '');
		$.ajax({
	    context: this,
	    dataType : "html",
	    url : url+".html",
	    success : function(results) {
	          $('#loading').hide();
	          $("#cnt").html(results);
	          // var header = $("#container thead").html();
	          // $("<tfoot>"+header+"</tfoot>").insertBefore("#container tbody");
	    	},
	    complete: function(){
	    	}
		});
	});
});
</script>
</body>
</html>