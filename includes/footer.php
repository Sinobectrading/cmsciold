	<!--footer-->
	<div class="welcome footer">
		<div class="container">
			<div class="col-md-4 footer-grids wow fadeInLeft animated" data-wow-delay=".5s">
				<h3>Links</h3>
				<p>Policy</p>
				<p>Terms</p>
			</div>
			<div class="col-md-4 footer-grids wow fadeInLeft animated" data-wow-delay=".5s">
				<h3>Contact Us</h3>
				<p>18 Killaloe Road Unit 3<br>
					Vaughan, ON, CAN L4K 2P2<br>
					Office : +1 (905) 660-4488<br>
					Support to : <a href="mailto:contact@cmsci.ca">contact@cmsci.ca</a>
				</p>
			</div>
			<div class="col-md-4 footer-grids wow fadeInRight animated" data-wow-delay=".5s">
				<h3>Brochure</h3>
				<form>
					<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="submit" value="Download">
				</form>
			</div>
			<div class="clearfix"> </div>
			<div class="footer-copy wow slideInUp animated" data-wow-delay=".5s">
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

<script type="application/x-javascript"> 
addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 
</script>
<script>
	new WOW().init();
</script>
<script type="text/javascript">
jQuery(document).ready(function($) {
	$(".scroll").click(function(event){		
		event.preventDefault();

$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
	});
});
</script>
<script>
$(document).ready(function() {
	 var navoffeset=$(".top-nav").offset().top;
	 $(window).scroll(function(){
		var scrollpos=$(window).scrollTop(); 
		if(scrollpos >=navoffeset){
			$(".top-nav").addClass("fixed");
		}else{
			$(".top-nav").removeClass("fixed");
		}
	 });
	 
});
</script>

<!-- script for tabs -->
<script type="text/javascript">
	$(function() {
	
		var menu_ul = $('.faq > li > ul'),
			   menu_a  = $('.faq > li > a');
		
		menu_ul.hide();
	
		menu_a.click(function(e) {
			e.preventDefault();
			if(!$(this).hasClass('active')) {
				menu_a.removeClass('active');
				menu_ul.filter(':visible').slideUp('normal');
				$(this).addClass('active').next().stop(true,true).slideDown('normal');
			} else {
				$(this).removeClass('active');
				$(this).next().stop(true,true).slideUp('normal');
			}
		});
	
	});
</script>
<script type="text/javascript">
	$(".scr").click(function() {
	    var body = $("html, body");
body.stop().animate({scrollTop: 600}, '500', 'swing' );
	});
</script>

<script type="text/javascript">
$(document).ready(function() {	
	$(".fancybox").fancybox({

		'transitionIn'	:	'elastic',
		'transitionOut'	:	'elastic',
		'speedIn'		:	600, 
		'speedOut'		:	200, 
		'overlayShow'	:	false,
		'loop' 		:   false
	});
	
});
</script>


<!-- script for img hover -->
<script>
    $(document).ready(function(){
        if (Modernizr.touch) {
            // show the close overlay button
            $(".close-overlay").removeClass("hidden");
            // handle the adding of hover class when clicked
            $(".img").click(function(e){
                if (!$(this).hasClass("hover")) {
                    $(this).addClass("hover");
                }
            });
            // handle the closing of the overlay
            $(".close-overlay").click(function(e){
                e.preventDefault();
                e.stopPropagation();
                if ($(this).closest(".img").hasClass("hover")) {
                    $(this).closest(".img").removeClass("hover");
                }
            });
        } else {
            // handle the mouseenter functionality
            $(".img").mouseenter(function(){
                $(this).addClass("hover");
            })
            // handle the mouseleave functionality
            .mouseleave(function(){
                $(this).removeClass("hover");
            });
        }
    });
</script>