﻿<!DOCTYPE html>
<html>
<head>
<title>CMSCI</title>
 <?php include('includes/header.php');
	$current = "index";  ?>
<style>
body {
	overflow-x: hidden;
}
canvas{
 
}	
.dropdown-menu {
    background-color: rgba(177,177,177,.8);
    
    margin-top: 0px;
    -webkit-box-shadow: -1px 1px 1px rgba(240,89,89,0.8);
    box-shadow: 0px 1px 1px rgba(240,89,89,0.8);
    }
#nokey {
	position: absolute;
}
.flexcenter {
	display: flex;
	/*align-items: center;*/
}
.flexcenter > div {
	padding: 0px
}
.welcome-left {
	padding: 0px;
}

.welcome {
	display: flex;
	align-items: center
}
#home.homepage .navbar   {
	background: rgba(177,177,177,.8) ! important;
} 
#home .navbar-default .navbar-nav>li>a, .navbar-default .navbar-nav>li>a:visited,
#home .dropdown-menu li a {
	color: #fff;
}
@media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) { /* IE10+ CSS styles go here */
     #logo .logowrap span, #logo .logowrap img {
     color: #fff;
    text-shadow: 0px 0px 1px #fff;
    }
}
/*----MS Edge Browser CSS Start----*/
@supports (-ms-accelerator:auto) {
     #logo .logowrap span, #logo .logowrap img {
     color: #fff;
    text-shadow: 0px 0px 1px #fff;
    }
}
/*----MS Edge Browser CSS End----*/
@supports (-ms-ime-align:auto) {
     #logo .logowrap span, #logo .logowrap img {
     color: #fff;
    text-shadow: 0px 0px 1px #fff;
    }
}
.temp a {
	color: #fff;
}
.welcome .au {
	color: #719568;
}
.welcome .wwd {
	color: #547b85;
}
.welcome .os {
	color: #79718e;
}
#services .op {
	color: #978c62;
}
</style>
</head>
<body>
<!--banner-->
<div id="home" class="banner homepage">
	<?php include('includes/nav.php'); ?>
	<div class="banner-info info">
		<canvas id="nokey" class="hidden-xs hidden-sm">
 		</canvas>
 		<div id="ind" class="clearfix">
			<div class="banner-top">
				<div class="container">	 
					<div class="clearfix"> </div>
				</div>
			</div>


			<div class="banner-text" id="logo">
				<div class="wow fadeIn animated logowrap" data-wow-delay="1s">
					<a href="index.html">
						<img src="images/logos.png">
						<span class="logof" id="cc">C</span>
						<span class="logof" id="mm">M</span>
						<span class="logof" id="ss">S</span>
						<span class="logof" id="ccc">C</span>
						<span class="logof" id="ii">I</span>
					</a>
				</div>
				<p class="wow faedIn animated" data-wow-delay="3s">World Wide Metal Distributor</p>
			</div>
		</div> 
	</div>
</div>
 
<div class="welcome" id="about">
	<div class="row">
			<div class="flexcenter" id="hpart1">
			<div class="col-lg-7 col-md-6 col-sm-6 col-xs-12 wow slideInLeft animated welcome" data-wow-delay=".5s">
				<img src="images/office.jpg" alt=""/>
			</div>
			<div class="col-lg-5 col-md-6 col-sm-6 col-xs-12 wow slideInRight animated welcome" data-wow-delay=".5s" >
				<!-- <h5>01</h5> -->
				<div class="col-md-3"><h4 class="au">About Us</h4></div>
				<div class="col-md-9"><p>Established in 2015, Canadian Metal Service Centre Inc.’s (CMSCI) mission is to offer high quality aluminum extruded products, diverse and tailored to clients’ needs and applications. It supplies products from domestic and worldwide extruders.</p>
			    </div>
			</div>
		</div>
		<div class="clearfix"> </div>

		<div class="flexcenter" id="srvs">
			<div class="col-lg-5 col-md-6  col-sm-6 welcome wow slideInLeft animated" id="ourservice"  data-wow-delay=".5s" >
				<div class="col-md-4">
					<h4 class="wwd">What We do</h4>
				</div>
				<div class="col-md-8">
					<p>CMSCI supplies Aluminum and stainless metal products for residential, commercial, industrial, developers, general contractors as well as distributors.
					</p>
				</div>
			</div>
			<div class="col-lg-7 col-md-6  col-sm-6 welcome wow slideInRight animated"  data-wow-delay=".5s" >
				<img src="images/stainless.jpg" alt=""/>
			</div>
		</div>

		<div class="clearfix"> </div>


		<div class="flexcenter" id="hpart3">
			<div class=" welcome col-lg-7 col-md-6 col-sm-6 wow slideInLeft animated" data-wow-delay=".5s">
				<img src="images/srv.jpg" alt=""/>
			</div>
			<div class=" welcome col-lg-5 col-md-6 col-sm-6 wow slideInRight animated" data-wow-delay=".5s">
				<!-- <h5>03</h5> -->
				<div class="col-md-4"><h4 class="os">Our Service</h4></div>
				<div class="col-md-8">
				<p id="srvp"> We can help and we commit six factors to our customers:
					<li>Prompt reply</li>
					<li>Competitive price</li>
					<li>Good quality</li>
					<li>In time delivery</li>
					<li>Customer service</li>
					<li>Technical solutions</li>
				</p>
				</div>
			</div>
		</div>
		<div class="clearfix"> </div>

	 
		<div class="flexcenter" id="services">
			<div class="col-md-6 col-xs-12 grid wow zoomIn animated slideInLeft" data-wow-delay=".5s">
				<a href="extrusion.php">
					<figure class="effect-apollo">
						<img src="images/product/1000_600_ex.jpg" alt="al"/>
						<figcaption>
							<div class="temp">
								<h2>Aluminum&nbsp;<span>Extrusion</span></h2>
								<p>● Standard Extrusion <br>● Customized Extrusuon</p>
							</div>
						</figcaption>
					</figure>
				</a>
			</div> 
			<div class="col-md-6 col-xs-12 slideInRight welcome">
				<div class="col-md-3"><h4 class="au">Products</h4>
				</div>
				<div class="col-md-9">
					<p>Established in 2015, Canadian Metal Service Centre Inc.’s (CMSCI) mission is to offer high quality aluminum extruded products, diverse and tailored to clients’ needs and applications. It supplies products from domestic and worldwide extruders.</p>
			    </div>
			</div>
		</div>
		
		<div class="flexcenter" id="hpart6">
			<div class="col-md-6 col-xs-12 grid wow zoomIn animated" data-wow-delay=".5s">
				<a href="plate.php">
					<figure class="effect-apollo">
						<img src="images/product/1000_600_ps.jpg" alt="al"/>
						<figcaption>
							<div class="temp">
								<h2>Plates&nbsp;&&nbsp;<span>Sheets</span></h2>
								<p>● Alloy <br>● Composite Panel <br>● Coil</p>
							</div>
						</figcaption>
					</figure>
				</a>
			</div>

			<div class="col-md-6 col-xs-12 grid wow zoomIn animated" data-wow-delay=".5s">
				<a href="steel.php">
					<figure class="effect-apollo">
						<img src="images/product/1000_600_st.jpg" alt="al"/>
						<figcaption>
							<div class="temp">
								<h2>Steel&nbsp;<span>Products</span></h2>
								<p>● Stainless Steel <br>● Galvanized steel <br>● Carbon steel</p>
							</div>
						</figcaption>
					</figure>
				</a>
			</div>
			<div class="clearfix"> </div>

		</div>
	</div>
</div>
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
    $("#navabout").click(function(){
    	$(this).parent().addClass("menu-item-current");
    	$(this).parent().siblings().removeClass("menu-item-current");
    });
    $("#navsrv").click(function(){
    	$(this).parent().addClass("menu-item-current");
    	$(this).parent().siblings().removeClass("menu-item-current");
    });
    $("#navdo").click(function(){
    	$(this).parent().addClass("menu-item-current");
    	$(this).parent().siblings().removeClass("menu-item-current");
    });
    //enable navishrink
    var shrinker = $('.navbar').navShrink({
        bgInitColor: 'rgba(17,17,17,1)',
        // fadeEnable: true,
        responsiveEnable: true,
          // enable the fade transition effect
			fadeEnable: true
    });
});
</script>
 
<script src="js/three.min.js"></script>
<script>
$( window ).scroll(function(){
	var dTop = $("#home > header > div.container").height()+2;
	$(".navbar-nav>li>.dropdown-menu").css({top: dTop});
});
</script>
<script>
// Based on http://www.openprocessing.org/visuals/?visualID=6910
var Boid = function() {
	var vector = new THREE.Vector3(),
	_acceleration, _width = 500, _height = 500, _depth = 200, _goal, _neighborhoodRadius = 100,
	_maxSpeed = 4, _maxSteerForce = 0.1, _avoidWalls = false;
	this.position = new THREE.Vector3();
	this.velocity = new THREE.Vector3();
	_acceleration = new THREE.Vector3();
	this.setGoal = function ( target ) {
		_goal = target;
	};
	this.setAvoidWalls = function ( value ) {
		_avoidWalls = value;
	};
	this.setWorldSize = function ( width, height, depth ) {
		_width = width;
		_height = height;
		_depth = depth;
	};
	this.run = function ( boids ) {
		if ( _avoidWalls ) {
			vector.set( - _width, this.position.y, this.position.z );
			vector = this.avoid( vector );
			vector.multiplyScalar( 5 );
			_acceleration.add( vector );
			vector.set( _width, this.position.y, this.position.z );
			vector = this.avoid( vector );
			vector.multiplyScalar( 5 );
			_acceleration.add( vector );
			vector.set( this.position.x, - _height, this.position.z );
			vector = this.avoid( vector );
			vector.multiplyScalar( 5 );
			_acceleration.add( vector );
			vector.set( this.position.x, _height, this.position.z );
			vector = this.avoid( vector );
			vector.multiplyScalar( 5 );
			_acceleration.add( vector );
			vector.set( this.position.x, this.position.y, - _depth );
			vector = this.avoid( vector );
			vector.multiplyScalar( 5 );
			_acceleration.add( vector );
			vector.set( this.position.x, this.position.y, _depth );
			vector = this.avoid( vector );
			vector.multiplyScalar( 5 );
			_acceleration.add( vector );
		}/* else {
			this.checkBounds();
		}
		*/
		if ( Math.random() > 0.5 ) {
			this.flock( boids );
		}
		this.move();
	};
	this.flock = function ( boids ) {
		if ( _goal ) {
			_acceleration.add( this.reach( _goal, 0.005 ) );
		}
		_acceleration.add( this.alignment( boids ) );
		_acceleration.add( this.cohesion( boids ) );
		_acceleration.add( this.separation( boids ) );
	};
	this.move = function () {
		this.velocity.add( _acceleration );
		var l = this.velocity.length();
		if ( l > _maxSpeed ) {
			this.velocity.divideScalar( l / _maxSpeed );
		}
		this.position.add( this.velocity );
		_acceleration.set( 0, 0, 0 );
	};
	this.checkBounds = function () {
		if ( this.position.x >   _width ) this.position.x = - _width;
		if ( this.position.x < - _width ) this.position.x =   _width;
		if ( this.position.y >   _height ) this.position.y = - _height;
		if ( this.position.y < - _height ) this.position.y =  _height;
		if ( this.position.z >  _depth ) this.position.z = - _depth;
		if ( this.position.z < - _depth ) this.position.z =  _depth;
	};
	//
	this.avoid = function ( target ) {
		var steer = new THREE.Vector3();
		steer.copy( this.position );
		steer.sub( target );
		steer.multiplyScalar( 1 / this.position.distanceToSquared( target ) );
		return steer;
	};
	this.repulse = function ( target ) {
		var distance = this.position.distanceTo( target );
		if ( distance < 150 ) {
			var steer = new THREE.Vector3();
			steer.subVectors( this.position, target );
			steer.multiplyScalar( 0.5 / distance );
			_acceleration.add( steer );
		}
	};
	this.reach = function ( target, amount ) {
		var steer = new THREE.Vector3();
		steer.subVectors( target, this.position );
		steer.multiplyScalar( amount );
		return steer;
	};
	this.alignment = function ( boids ) {
		var count = 0;
		var velSum = new THREE.Vector3();
		for ( var i = 0, il = boids.length; i < il; i++ ) {
			if ( Math.random() > 0.6 ) continue;
			var boid = boids[ i ];
			var distance = boid.position.distanceTo( this.position );
			if ( distance > 0 && distance <= _neighborhoodRadius ) {
				velSum.add( boid.velocity );
				count++;
			}
		}
		if ( count > 0 ) {
			velSum.divideScalar( count );
			var l = velSum.length();
			if ( l > _maxSteerForce ) {
				velSum.divideScalar( l / _maxSteerForce );
			}
		}
		return velSum;
	};
	this.cohesion = function ( boids ) {
		var count = 0;
		var posSum = new THREE.Vector3();
		var steer = new THREE.Vector3();
		for ( var i = 0, il = boids.length; i < il; i ++ ) {
			if ( Math.random() > 0.6 ) continue;
			var boid = boids[ i ];
			var distance = boid.position.distanceTo( this.position );
			if ( distance > 0 && distance <= _neighborhoodRadius ) {
				posSum.add( boid.position );
				count++;
			}
		}
		if ( count > 0 ) {
			posSum.divideScalar( count );
		}
		steer.subVectors( posSum, this.position );
		var l = steer.length();
		if ( l > _maxSteerForce ) {
			steer.divideScalar( l / _maxSteerForce );
		}
		return steer;
	};
	this.separation = function ( boids ) {
		var posSum = new THREE.Vector3();
		var repulse = new THREE.Vector3();
		for ( var i = 0, il = boids.length; i < il; i ++ ) {
			if ( Math.random() > 0.6 ) continue;
			var boid = boids[ i ];
			var distance = boid.position.distanceTo( this.position );
			if ( distance > 0 && distance <= _neighborhoodRadius ) {
				repulse.subVectors( this.position, boid.position );
				repulse.normalize();
				repulse.divideScalar( distance );
				posSum.add( repulse );
			}
		}
		return posSum;
	}
}
</script>

<!-- <script>
var SCREEN_WIDTH = window.innerWidth,
SCREEN_HEIGHT = window.innerHeight,
SCREEN_WIDTH_HALF = SCREEN_WIDTH  / 2,
SCREEN_HEIGHT_HALF = SCREEN_HEIGHT / 2;
var camera, scene, renderer,
birds, bird;
var boid, boids;
var stats;
init();
animate();
function init() {
	camera = new THREE.PerspectiveCamera( 75, SCREEN_WIDTH / SCREEN_HEIGHT, 1, 10000 );
	camera.position.z = 450;
	scene = new THREE.Scene();
	scene.background = new THREE.Color( 0xffffff );
	birds = [];
	boids = [];
	for ( var i = 0; i < 200; i ++ ) {
		boid = boids[ i ] = new Boid();
		boid.position.x = Math.random() * 400 - 200;
		boid.position.y = Math.random() * 400 - 200;
		boid.position.z = Math.random() * 400 - 200;
		boid.velocity.x = Math.random() * 2 - 1;
		boid.velocity.y = Math.random() * 2 - 1;
		boid.velocity.z = Math.random() * 2 - 1;
		boid.setAvoidWalls( true );
		boid.setWorldSize( 500, 500, 400 );
		bird = birds[ i ] = new THREE.Mesh( new Bird(), new THREE.MeshBasicMaterial( { color:Math.random() * 0xffffff, side: THREE.DoubleSide } ) );
		bird.phase = Math.floor( Math.random() * 62.83 );
		scene.add( bird );
	}
	renderer = new THREE.CanvasRenderer();
	renderer.setPixelRatio( window.devicePixelRatio );
	renderer.setSize( SCREEN_WIDTH, SCREEN_HEIGHT );
	document.addEventListener( 'mousemove', onDocumentMouseMove, false );
	document.body.appendChild( renderer.domElement );
	stats = new Stats();
	document.getElementById( 'container' ).appendChild(stats.dom);
	//
	window.addEventListener( 'resize', onWindowResize, false );
}
function onWindowResize() {
	camera.aspect = window.innerWidth / window.innerHeight;
	camera.updateProjectionMatrix();
	renderer.setSize( window.innerWidth, window.innerHeight );
}
function onDocumentMouseMove( event ) {
	var vector = new THREE.Vector3( event.clientX - SCREEN_WIDTH_HALF, - event.clientY + SCREEN_HEIGHT_HALF, 0 );
	for ( var i = 0, il = boids.length; i < il; i++ ) {
		boid = boids[ i ];
		vector.z = boid.position.z;
		boid.repulse( vector );
	}
}
//
function animate() {
	requestAnimationFrame( animate );
	stats.begin();
	render();
	stats.end();
}
function render() {
	for ( var i = 0, il = birds.length; i < il; i++ ) {
		boid = boids[ i ];
		boid.run( boids );
		bird = birds[ i ];
		bird.position.copy( boids[ i ].position );
		var color = bird.material.color;
		color.r = color.g = color.b = ( 500 - bird.position.z ) / 1000;
		bird.rotation.y = Math.atan2( - boid.velocity.z, boid.velocity.x );
		bird.rotation.z = Math.asin( boid.velocity.y / boid.velocity.length() );
		bird.phase = ( bird.phase + ( Math.max( 0, bird.rotation.z ) + 0.1 )  ) % 62.83;
		bird.geometry.vertices[ 5 ].y = bird.geometry.vertices[ 4 ].y = Math.sin( bird.phase ) * 5;
	}
	renderer.render( scene, camera );
}
</script>
 -->
<script>
var canvas = document.getElementById('nokey'),
   can_w = parseInt(canvas.getAttribute('width')),
   can_h = parseInt(canvas.getAttribute('height')),
   ctx = canvas.getContext('2d');

// console.log(typeof can_w);

var ball = {
      x: 0,
      y: 0,
      vx: 0,
      vy: 0,
      r: 0,
      alpha: 1,
      phase: 0
   },
   ball_color = {
       r: 207,
       g: 255,
       b: 4
   },
   R = 2,
   balls = [],
   alpha_f = 0.03,
   alpha_phase = 0,
    
// Line
   link_line_width = 0.8,
   dis_limit = 600,
   add_mouse_point = true,
   mouse_in = false,
   mouse_ball = {
      x: 0,
      y: 0,
      vx: 0,
      vy: 0,
      r: 0,
      type: 'mouse'
   };

// Random speed
function getRandomSpeed(pos){
    var  min = -1,
       max = 1;
    switch(pos){
        case 'top':
            return [randomNumFrom(min, max), randomNumFrom(0.1, max)];
            break;
        case 'right':
            return [randomNumFrom(min, -0.1), randomNumFrom(min, max)];
            break;
        case 'bottom':
            return [randomNumFrom(min, max), randomNumFrom(min, -0.1)];
            break;
        case 'left':
            return [randomNumFrom(0.1, max), randomNumFrom(min, max)];
            break;
        default:
            return;
            break;
    }
}
function randomArrayItem(arr){
    return arr[Math.floor(Math.random() * arr.length)];
}
function randomNumFrom(min, max){
    return Math.random()*(max - min) + min;
}
console.log(randomNumFrom(0, 10));
// Random Ball
function getRandomBall(){
    var pos = randomArrayItem(['top', 'right', 'bottom', 'left']);
    switch(pos){
        case 'top':
            return {
                x: randomSidePos(can_w),
                y: -R,
                vx: getRandomSpeed('top')[0],
                vy: getRandomSpeed('top')[1],
                r: R,
                alpha: 1,
                phase: randomNumFrom(0, 10)
            }
            break;
        case 'right':
            return {
                x: can_w + R,
                y: randomSidePos(can_h),
                vx: getRandomSpeed('right')[0],
                vy: getRandomSpeed('right')[1],
                r: R,
                alpha: 1,
                phase: randomNumFrom(0, 10)
            }
            break;
        case 'bottom':
            return {
                x: randomSidePos(can_w),
                y: can_h + R,
                vx: getRandomSpeed('bottom')[0],
                vy: getRandomSpeed('bottom')[1],
                r: R,
                alpha: 1,
                phase: randomNumFrom(0, 10)
            }
            break;
        case 'left':
            return {
                x: -R,
                y: randomSidePos(can_h),
                vx: getRandomSpeed('left')[0],
                vy: getRandomSpeed('left')[1],
                r: R,
                alpha: 1,
                phase: randomNumFrom(0, 10)
            }
            break;
    }
}
function randomSidePos(length){
    return Math.ceil(Math.random() * length);
}

// Draw Ball
function renderBalls(){
    Array.prototype.forEach.call(balls, function(b){
       if(!b.hasOwnProperty('type')){
           ctx.fillStyle = 'rgba('+ball_color.r+','+ball_color.g+','+ball_color.b+','+b.alpha+')';
           ctx.beginPath();
           ctx.arc(b.x, b.y, R, 0, Math.PI*2, true);
           ctx.closePath();
           ctx.fill();
       }
    });
}

// Update balls
function updateBalls(){
    var new_balls = [];
    Array.prototype.forEach.call(balls, function(b){
        b.x += b.vx;
        b.y += b.vy;
        
        if(b.x > -(50) && b.x < (can_w+50) && b.y > -(50) && b.y < (can_h+50)){
           new_balls.push(b);
        }
        
        // alpha change
        b.phase += alpha_f;
        b.alpha = Math.abs(Math.cos(b.phase));
        // console.log(b.alpha);
    });
    
    balls = new_balls.slice(0);
}

// loop alpha
function loopAlphaInf(){
    
}

// Draw lines
function renderLines(){
    var fraction, alpha;
    for (var i = 0; i < balls.length; i++) {
        for (var j = i + 1; j < balls.length; j++) {
           
           fraction = getDisOf(balls[i], balls[j]) / dis_limit;
            
           if(fraction < 1){
               alpha = (1 - fraction).toString();

               ctx.strokeStyle = 'rgba(150,150,150,'+alpha+')';
               ctx.lineWidth = link_line_width;
               
               ctx.beginPath();
               ctx.moveTo(balls[i].x, balls[i].y);
               ctx.lineTo(balls[j].x, balls[j].y);
               ctx.stroke();
               ctx.closePath();
           }
        }
    }
}

// calculate distance between two points
function getDisOf(b1, b2){
    var  delta_x = Math.abs(b1.x - b2.x),
       delta_y = Math.abs(b1.y - b2.y);
    
    return Math.sqrt(delta_x*delta_x + delta_y*delta_y);
}

// add balls if there a little balls
function addBallIfy(){
    if(balls.length < 20){
        balls.push(getRandomBall());
    }
}

// Render
function render(){
    ctx.clearRect(0, 0, can_w, can_h);
    
    renderBalls();
    
    renderLines();
    
    updateBalls();
    
    addBallIfy();
    
    window.requestAnimationFrame(render);
}

// Init Balls
function initBalls(num){
    for(var i = 1; i <= num; i++){
        balls.push({
            x: randomSidePos(can_w),
            y: randomSidePos(can_h),
            vx: getRandomSpeed('top')[0],
            vy: getRandomSpeed('top')[1],
            r: R,
            alpha: 1,
            phase: randomNumFrom(0, 10)
        });
    }
}
// Init Canvas
function initCanvas(){
    canvas.setAttribute('width', window.innerWidth);
    canvas.setAttribute('height', window.innerHeight);
    
    can_w = parseInt(canvas.getAttribute('width'));
    can_h = parseInt(canvas.getAttribute('height'));
}
window.addEventListener('resize', function(e){
    console.log('Window Resize...');
    initCanvas();
});

function goMovie(){
    initCanvas();
    initBalls(20);
    window.requestAnimationFrame(render);
}
goMovie();

// Mouse effect
canvas.addEventListener('mouseenter', function(){
    console.log('mouseenter');
    mouse_in = true;
    balls.push(mouse_ball);
});
canvas.addEventListener('mouseleave', function(){
    console.log('mouseleave');
    mouse_in = false;
    var new_balls = [];
    Array.prototype.forEach.call(balls, function(b){
        if(!b.hasOwnProperty('type')){
            new_balls.push(b);
        }
    });
    balls = new_balls.slice(0);
});
canvas.addEventListener('mousemove', function(e){
    var e = e || window.event;
    mouse_ball.x = e.pageX;
    mouse_ball.y = e.pageY;
    // console.log(mouse_ball);
});

</script>
</body>
</html>