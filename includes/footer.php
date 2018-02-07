	<!--footer-->
	<div class="welcome footer">
		<div class="container">
			<div class="col-md-4 footer-grid">
				<h3>Links</h3>
				<p>Policy</p>
				<p>Terms</p>
			</div>
			<div class="col-md-4 footer-grids">
				<h3>Contact Us</h3>
				<p>18 Killaloe Road Unit 3<br>
					Vaughan, ON, CAN L4K 2P2<br>
					Office : +1 (905) 660-4488<br>
					Support to : <a href="mailto:contact@cmsci.ca">contact@cmsci.ca</a>
				</p>
			</div>
			<div class="col-md-4 footer-grids">
				<h3>Brochure</h3>
				<form>
					<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="submit" value="Download">
				</form>
			</div>
			<div class="clearfix"> </div>
			<div class="footer-copy">
				<p>© 2016 CMSCI. All rights reserved | Design by <a href="http://www.cmsci.ca">CMSCI</a></p>
			</div>
		</div>
	</div>
	<!--//footer-->


<script src="https://code.jquery.com/jquery-2.2.3.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/jquery.fancybox.js" type="text/javascript"></script>
<script src="js/modernizr.js"></script>
<script src="js/navShrink.min.js"></script>
<script type="text/javascript">
//Init the plugin
$(document).ready(function() {
    
    //enable navishrink
    var shrinker = $('.navbar').navShrink({
        bgInitColor: 'rgba(207,207,207,1)',
        fadeEnable: true,
        responsiveEnable: true,
          // enable the fade transition effect
			fadeEnable: true
    });

    $("#navabout").click(function(){
    	$("#navabout").parent().addClass("menu-item-current");
    	$("#navabout").parent().siblings().removeClass("menu-item-current");
    });
    $("#navsrv").click(function(){
    	$("#navsrv").parent().addClass("menu-item-current");
    	$("#navsrv").parent().siblings().removeClass("menu-item-current");
    });
    $("#navdo").click(function(){
    	$("#navdo").parent().addClass("menu-item-current");
    	$("#navdo").parent().siblings().removeClass("menu-item-current");
    });
});
</script>
 
 
 