<?php  $current = "inventory"; ?>
<!DOCTYPE html>
<html>
<head>
<title>CMSCI</title>

<?php include('includes/header.php');  ?>
<link rel="stylesheet" href="css/sidebar.css">
<style>
.nologin {
	min-height: 46vh;
	text-align: center;
}
.nologin h3 {
	padding-top: 17%;
}
.ajaxcnt {
	cursor: pointer;
}
</style>
</head>
<body>
<!--banner-->
<div  id="home">
	<?php include('includes/nav.php'); ?>
</div>
<!--//banner-->
<?php if ( isset($_SESSION["username"]) ) { ?> 



<?php 
 	} 
	if (!isset($_SESSION["username"])) { ?>
		<div class="container nologin">
			<h3>You are not login, please click <a class="ajaxcnt">login</a></h3>
		</div>
	<?php } ?>
<div class="content-wrapper" id="cnt"></div>

<?php include('includes/footer.php'); ?>

<script>
$(document).ready(function(){
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
	          $(".nologin").hide();
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