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
	font-size: 19px;
	font-weight: 700;
	padding-top: 28px;
	color: #787878;
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
			<div class="col-md-12 work-grids work-grd1 wow slideInLeft animated hidden-xs" data-wow-delay=".5s">
<!-- 				<h4 class="title"><a href="standard.php">Aluminum Standard Extrusion</a></h4>
 -->				<p></p>
				 
			</div>

			<div class="col-md-12 work-grids wow fadeIn animated" data-wow-delay=".5s">
				 <main class="cd-main-content">
					<nav class="cd-side-nav">
						<ul id="product">
 							<li class="cd-label">Standard Extrusion</li>
  							<li class="has-children overview">
									<a class="ajaxcnt">Round Extrusion</a>
								</li>
								<li class="has-children overview">
									<a class="ajaxcnt">Tube Sharp Corner</a>
								</li>
								<li class="has-children overview">
									<a class="ajaxcnt">Round Tube</a>
								</li>
								<li class="has-children overview">
									<a class="ajaxcnt">Channel Square Corner</a>
								</li>
								<li class="has-children overview">
									<a class="ajaxcnt">Channel Round Corner</a>
								</li>
								<li class="has-children overview">
									<a class="ajaxcnt">Beam Square Corner</a>
								</li>
								<li class="has-children overview">
									<a class="ajaxcnt">Beam Round Corner</a>
								</li>
								<li class="has-children overview">
									<a class="ajaxcnt">Angle Sharp Corner</a>
								</li>
								<li class="has-children overview">
									<a class="ajaxcnt">Angle Round Corner</a>
								</li>

								<li class="has-children overview">
									<a class="ajaxcnt">Schedule Num Pipe</a>
								</li>
								<li class="has-children overview">
									<a class="ajaxcnt">Flat Bar Sharp Corner</a>
								</li>
								<li class="has-children overview">
									<a class="ajaxcnt">Square Bar Sharp Corner</a>
								</li>
								<li class="has-children overview">
									<a class="ajaxcnt">Rod</a>
								</li>
								<li class="has-children overview">
									<a class="ajaxcnt">TEE Round Corner</a>
								</li>
								<li class="has-children overview">
									<a class="ajaxcnt">Customized Extrusion</a>
								</li>

 
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