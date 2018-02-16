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
	padding-bottom: 10px;
}
#cnt div h4 {
	font-size: 19px;
	font-weight: 700;
	padding-top: 20px;
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
<div id="phome">
	<?php include('includes/nav.php'); ?>
</div>
<!--//banner-->

<!--work-->
<div class="welcome work" id="work">
	<div class="container">
		<div class="work-info">
			<div class="row col-md-12 work-grids wow fadeIn animated" data-wow-delay=".5s">
				 <main class="cd-main-content">
 
						<div class="panel-group col-md-4" id="accordion">
					        <div class="panel panel-default">
					            <div class="panel-heading">
					                <h5 class="panel-title">
					                   Aluminum Extrusion
					                </h5>
					            </div>
					        </div>
					        <div class="panel panel-default">
					            <div class="panel-heading">
					                <h6 class="panel-title">
					                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Standard Extrusion&nbsp;<span class="glyphicon glyphicon-plus"></span></a>
					                </h6>
					            </div>
					            <div id="collapseTwo" class="panel-collapse collapse in">
					                <div class="panel-body">
					                	<ul>
					                		<li><a class="ajaxcnt" id="tube">Tube</a></li>
											<li><a class="ajaxcnt" id="chn">Channel</a></li>
											<li><a class="ajaxcnt" id="beam">Beam</a></li>
											<li><a class="ajaxcnt" id="angle">Angle</a></li>
											<li><a class="ajaxcnt" id="pipe">Pipe</a></li>
											<li><a class="ajaxcnt" id="bar">Bar</a></li>
											<!-- <li><a class="ajaxcnt" id="rod">Rod</a></li> -->
					                	</ul>
					                </div>
					            </div>
					        </div>
					        <div class="panel panel-default">
					            <div class="panel-heading">
					                <h6 class="panel-title">
					                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Customized Extrusion&nbsp;<span class="glyphicon glyphicon-plus"></span></a>
					                </h6>
					            </div>
					            <div id="collapseThree" class="panel-collapse collapse">
					                <div class="panel-body">
					                	<ul>
					                		<li><a class="ajaxcnt" id="picket">Picket</a></li>
											<li><a class="ajaxcnt" id="post">Post</a></li>
											<li><a class="ajaxcnt" id="solar">Solar Panel</a></li>
					                	</ul>
					                </div>
					            </div>
					        </div>
					    </div>


						<!-- <ul id="product" id="accordion">
 							<li class="cd-label">Aluminum Extrusion</li>
 							<li class="overview">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Standard Extrusion&nbsp;<span class="glyphicon glyphicon-plus"></span></a>
								<ul id="collapseOne" class="panel-collapse collapse">
									<li><a class="ajaxcnt" id="tube">Tube</a></li>
									<li><a class="ajaxcnt" id="chn">Channel</a></li>
									<li><a class="ajaxcnt" id="beam">Beam</a></li>
									<li><a class="ajaxcnt" id="angle">Angle</a></li>
									<li><a class="ajaxcnt" id="pipe">Pipe</a></li>
									<li><a class="ajaxcnt" id="bar">Bar</a></li>
								</ul>
							</li>
  							<li class="overview">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Customized Extrusion&nbsp;<span class="glyphicon glyphicon-plus"></span></a>
								<ul id="collapseTwo" class="panel-collapse collapse">
									<li><a class="ajaxcnt" id="picket">Picket</a></li>
									<li><a class="ajaxcnt" id="post">Post</a></li>
									<li><a class="ajaxcnt" id="solar">Solar Panel</a></li>
								</ul>
							</li>
						</ul> -->
 
 					<div class="col-md-8" id="cnt">
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
					</div>  
				</main> 

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
	$(document).ready(function(){
        // Add minus icon for collapse element which is open by default
        $(".collapse.in").each(function(){
        	$(this).siblings(".panel-heading").find(".glyphicon").addClass("glyphicon-minus").removeClass("glyphicon-plus");
        });
        
        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function(){
        	$(this).parent().find(".glyphicon").removeClass("glyphicon-plus").addClass("glyphicon-minus");
        }).on('hide.bs.collapse', function(){
        	$(this).parent().find(".glyphicon").removeClass("glyphicon-minus").addClass("glyphicon-plus");
        });
    });

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