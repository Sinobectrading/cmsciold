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
.has-children ul li {
	min-height: 20px
}
</style>
</head>
<body>
<!--banner-->
<div  id="phome">
	<?php include('includes/nav.php'); ?>
</div>
<!--//banner-->

<!--work-->
<div class="welcome work" id="steel">
	<div class="container">
		<div class="work-info">
			<div class="row col-md-12 work-grids wow fadeIn animated" data-wow-delay=".5s">
				 <main class="cd-main-content">

				 	<div class="panel-group col-md-3">
				 		<div class="panel panel-default">
				            <div class="panel-heading">
				                <h5 class="panel-title">
				                   Steels
				                </h5>
				            </div>
				        </div>

				        <div class="panel panel-default">
				            <div class="panel-heading">
				                <h6 class="panel-title">
				                    <li><a class="ajaxcnt">Stainless Steel</a></li> 
				                </h6>
				            </div>
						</div>

						<div class="panel panel-default">
				            <div class="panel-heading">
				                <h6 class="panel-title">
				                    <li><a class="ajaxcnt">Galvanized Steel</a></li> 
				                </h6>
				            </div>
						</div>

						<div class="panel panel-default">
				            <div class="panel-heading">
				                <h6 class="panel-title">
				                    <li><a class="ajaxcnt">Carbon Steel</a></li> 
				                </h6>
				            </div>
						</div>
					</div>
					<div class="col-md-9" id="cnt">
						<!-- <h1>Summary</h1> -->
						<div class="col-md-6">
							<img src="images/product/998_898_st01.jpg" alt="">
						</div>
						<div class="col-md-6">
							<img src="images/product/998_898_st03.jpg" alt="">
						</div>
						<div class="col-md-6">
							<img src="images/product/998_898_st04.jpg" alt="">
						</div>
						<div class="col-md-6">
							<img src="images/product/998_898_st05.jpg" alt="">
						</div>
					</div> <!-- .content-wrapper -->
 				</main> <!-- .cd-main-content -->
			</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>
</div>

<?php include('includes/footer2.php'); ?>
<script src="js/jquery.menu-aim.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
<script>
$(document).ready(function(){
	$('li.comments').click(function(event) {
		event.preventDefault();
	    $('li.comments').removeClass('active');
	    $(this).addClass('active');
	});

	$(".ajaxcnt").click(function(){
		var str = $(this).text();
		var url = str.replace(/\s/g, '');
		$.ajax({
	    context: this,
	    dataType : "html",
	    url : "products/"+url+".html",
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