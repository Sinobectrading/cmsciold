<!DOCTYPE html>
<html>
<head>
<title>CMSCI</title>

<?php include('includes/header.php');  ?>
<style>
body {
	background: transparent ! important;
	background-color: transparent ! important; 
}
canvas{
   position: absolute;
   top: 0;
   background: transparent;
  
}	
.info {
	position: relative;
}
#container > div {
	display: none
}
</style>
</head>
<body>
	<!--banner-->
	<div  id="home" class="banner">
		<div class="banner-info info">
			<div id="container"></div>

 	 		<div id="ind" class="clearfix">
	  			<div class="banner-top">
					<div class="container">
						<div class="col-md-6 banner-top-left wow fadeIn animated" data-wow-delay=".5s">
							<ul class="social-icons">
								<li><a href="#"> </a></li>
								<li><a href="#" class="fb"> </a></li>
								<li><a href="#" class="in"> </a></li>
								<li><a href="#" class="dott"> </a></li>
							</ul>
						</div>
						<div class="col-md-6 banner-top-right wow fadeIn animated" data-wow-delay=".5s">
							<p><span class="glyphicon glyphicon-earphone"></span> +1 (905) 660-4448 </p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>


				<div class="banner-text" id="logo">
					<div class="wow fadeIn animated logowrap" data-wow-delay="1s">
						<a href="index.html">
							<img src="images/logos.png"><span class="logof">C</span><span class="logof">M</span><span class="logof">S</span><span class="logof">C</span><span class="logof">I</span>
						</a>
					</div>
					<p class="wow faedIn animated" data-wow-delay="3s">World Wide Metal Distributor</p>
				</div>
			</div>

 			<!--navigation-->
			<div class="top-nav wow">
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
								<li class="menu-item menu-item-current"><a href="index.php" class="menu-link">Home</a></li>
								<li <?php if($current == "products") echo "class=\"menu-item menu-item-current\""; else echo "class=\"menu-item\"";?>    >
									<a data-toggle="dropdown"  class="menu-link">Products
										<span class="caret"></span>
									</a>
									<ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
										<li role="presentation"><a role="menuitem" tabindex="-1" href="alumnium.php">Alumnium</a></li>
										<li role="presentation"><a role="menuitem" tabindex="-1" href="stainless.php">Stainless</a></li>
									</ul>
								</li>
								<li class="menu-item"><a href="contact.php" class="menu-link">Contact</a></li>
							</ul>
						</div>
						<div class="clearfix"> </div>
						
					</div>
				</div>
			</div>	
			<!--//navigation-->
		</div>
	</div>
	<!--//banner-->
	<!--welcome-->
	<div class="welcome" id="about">
		<div class="container">
			<h2 class="title wow fadeIn animated" data-wow-delay=".5s">Welcome To Canadian Metal Service Center Inc</h2>
			<div class="col-md-7 col-xs-12 welcome-left wow slideInLeft animated" data-wow-delay=".5s">
				<img src="images/google.jpg" alt=""/>
			</div>
			<div class="col-md-5 col-xs-12 welcome-right wow slideInRight animated" data-wow-delay=".5s" id="aboutus">
				<!-- <h5>01</h5> -->
				<h4>About Us</h4>
				<p>Established in 2002, Canadian Metal Service Centre Inc.’s (CMSCI) mission is to offer high quality aluminum extruded products, diverse and tailored to clients’ needs and applications. It supplies products from domestic and worldwide extruders.</p>
			</div>
			<div class="clearfix"> </div>
			<div class="col-md-7 col-xs-12 welcome-bottom-left wow slideInLeft animated" data-wow-delay=".5s">
				<img src="images/stainless.jpg" alt=""/>
				<!-- <h5>02</h5> -->
				<h4>Our Service</h4>
				<p>we can help and we commit six factors to our customers:
					Prompt reply
					Competitive price
					Good quality
					In time delivery
					Customer service
					Technical solutions
				</p>
			</div>
			<div class="col-md-5 col-xs-12 welcome-bottom-right wow slideInRight animated" data-wow-delay=".5s">
				<div class="welcome-grid-left">
					<img src="images/stainless.jpg" alt=""/>
				</div>
				<div class="welcome-grid-right">
					<!-- <h5>03</h5> -->
					<h4>What We do</h4>
					<p>CMSCI supplies products for residential, commercial, industrial, developers, general contractors as well as distributors. </p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//welcome-->
	<!--services-->
	<div class="welcome services" id="services">
		<div class="container">
			<h3 class="title wow fadeInDown animated" data-wow-delay=".5s">Our Products</h3>
			<div class="services-info">
				<div class="col-md-4 services-grids wow zoomIn animated" data-wow-delay=".5s">
					<a href="alumnium.php">
						<div class="service">
							<div class="icon-holder">
								<span class="glyphicon glyphicon-book"></span>
							</div>
							<h4 class="heading">Aluminum</h4>
							<p class="text">Plates ● Sheets ● Coils ● Extrusions</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 services-grids wow zoomIn animated" data-wow-delay=".5s">
					<div class="service">
						<a href="stainless.php">
						<div class="icon-holder">
							<span class="glyphicon glyphicon-cog"></span>
						</div>
						<h4 class="heading">Stainless</h4>
						<p class="text">Plates ● Sheets ● Colis ● Tubing</p>
						</a>
					</div>
				</div>
				<div class="col-md-4 services-grids wow zoomIn animated" data-wow-delay=".5s">
					<div class="service">
						<div class="icon-holder">
							<span class="glyphicon glyphicon-road"></span>
						</div>
						<h4 class="heading">Metal</h4>
						<p class="text"> </p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//services-->
<?php include('includes/footer.php'); ?>
<script src="js/three.min.js"></script>
<script src="js/projector.js"></script>
<script src="js/canvasRenderer.js"></script>
<script src="js/stats.min.js"></script>
<script src="js/birds.js"></script>
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
		// scene.background = new THREE.Color( 0xffffff );
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
		// renderer = new THREE.CanvasRenderer();
		renderer = new THREE.WebGLRenderer( { alpha: true } );
		renderer.setClearColor( 0xffffff, 0 ); 

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

 
</body>
</html>