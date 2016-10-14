<!DOCTYPE html>
<html lang="es">
<head>
	<title>::. Floreria NICTE ::.</title>
	<meta charset="utf-8">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?= $this->url('/dist/bootstrap/css/bootstrap.min.css') ?>">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<script src="<?= $this->url('/dist/bootstrap/js/bootstrap.min.js') ?>"></script>
	<style>
		.affix {
			top: 0;
			width: 100%;
			-webkit-transition: all .5s ease-in-out;
			transition: all .5s ease-in-out;


		}
		.affix a {
			color: #fff !important;
			padding: 15px !important;
			-webkit-transition: all .5s ease-in-out;
			transition: all .5s ease-in-out;
		}
		.affix-top a {
			padding: 25px !important;
		}
		.affix + .container-fluid {
			padding-top: 95px;
		}
		.jssorb21 {
			position: absolute;
		}
		.jssorb21 div, .jssorb21 div:hover, .jssorb21 .av {
			position: absolute;
			/* size of bullet elment */
			width: 19px;
			height: 19px;
			text-align: center;
			line-height: 19px;
			color: white;
			font-size: 12px;
			background: url(<?= $this->url('/dist/img/b21.png')?>) no-repeat;
			overflow: hidden;
			cursor: pointer;
		}
		.jssorb21 div { background-position: -5px -5px; }
		.jssorb21 div:hover, .jssorb21 .av:hover { background-position: -35px -5px; }
		.jssorb21 .av { background-position: -65px -5px; }
		.jssorb21 .dn, .jssorb21 .dn:hover { background-position: -95px -5px; }
	</style>

</head>

<body>

<style>
	.navbar-wrapper {
		position: absolute;
		top: 20px;
		left: 0;
		width: 100%;
		height: 11px;
	}
	.navbar-wrapper > .container {
		padding: 0;
	}

	@media all and (max-width: 768px ){
		.navbar-wrapper {
			position: relative;
			top: 0px;
		}
	}
</style>
<div class="navbar-wrapper">
	<div class="container">
		<nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0px;background: rgba(255,14,252,0.3);" data-spy="affix" data-offset-top="400">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Floreria Nicte</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse" >
					<ul class="nav navbar-nav">
						<li><a href="#flores"> <strong style="color:#FFFF;">CATÁLOGO </strong></strong></a></li>
						<li><a href="<?= $this->url('/administrador')?>"> <strong style="color:#FFFF;">INICIAR SESION<strong> </a></li>
					</ul>
				</div>
			</div>
		</nav>

	</div>
</div>

<div style="min-height: 50px;">
	<div id="slider1_container"  style="visibility: hidden; position: relative; margin: 0 auto;
        top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
		<div u="loading" style="position: absolute; top: 0px; left: 0px;">
			<div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
                top: 0px; left: 0px; width: 100%; height: 100%;">
			</div>
			<div style="position: absolute; display: block; background: url(<?= $this->url('/dist/img/loading.gif')?>) no-repeat center center;
                top: 0px; left: 0px; width: 100%; height: 100%;">
			</div>
		</div>
		<div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1300px; height: 500px; overflow: hidden;">
			<div>
				<img u="image" src="<?= $this->url('/dist/img/1920/1.jpg')?>" />
			</div>
			<div>
				<img u="image" src="<?= $this->url('/dist/img/1920/2.jpg')?>" />
			</div>
			<div>
				<img u="image" src="<?= $this->url('/dist/img/1920/3.jpg')?>" />
			</div>
			<div>
				<img u="image" src="<?= $this->url('/dist/img/1920/4.jpg')?>" />
			</div>
			<div>
				<img u="image" src="<?= $this->url('/dist/img/1920/5.jpg')?>" />
			</div>
		</div>

		<!-- bullet navigator container -->
		<div u="navigator" class="jssorb21" style="bottom: 26px; right: 6px;">
			<!-- bullet navigator item prototype -->
			<div u="prototype"></div>
		</div>
		<!-- Arrow Left -->
		<span u="arrowleft" class="jssora21l" style="top: 123px; left: 8px;">
            </span>
		<!-- Arrow Right -->
		<span u="arrowright" class="jssora21r" style="top: 123px; right: 8px;">
            </span>
		<!--#endregion Arrow Navigator Skin End -->
		<a style="display: none" href="http://www.jssor.com">Bootstrap Slider</a>
	</div>
	<!-- Jssor Slider End -->
</div>

<script src="<?= $this->url('/dist/js/docs.min.js')?>"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?= $this->url('/dist/js/ie10-viewport-bug-workaround.js')?>"></script>

<script type="text/javascript" src="<?= $this->url('/dist/js/jssor.slider.mini.js')?>"></script>
<script>
	jQuery(document).ready(function ($) {

		var options = {
			$FillMode: 2,                                       //[Optional] The way to fill image in slide, 0 stretch, 1 contain (keep aspect ratio and put all inside slide), 2 cover (keep aspect ratio and cover whole slide), 4 actual size, 5 contain for large image, actual size for small image, default value is 0
			$AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
			$AutoPlayInterval: 1000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
			$PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

			$ArrowKeyNavigation: true,                    //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
			$SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
			$SlideDuration: 1000,                               //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
			$MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
			//$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
			//$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
			$SlideSpacing: 0,                           //[Optional] Space between each slide in pixels, default value is 0
			$DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
			$ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
			$UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
			$PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
			$DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

			$BulletNavigatorOptions: {                          //[Optional] Options to specify and enable navigator or not
				$Class: $JssorBulletNavigator$,                 //[Required] Class to create navigator instance
				$ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
				$AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
				$Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
				$Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
				$SpacingX: 8,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
				$SpacingY: 8,                                   //[Optional] Vertical space between each item in pixel, default value is 0
				$Orientation: 1,                                //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
				$Scale: false                                   //Scales bullets navigator or not while slider scale
			},

			$ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
				$Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
				$ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
				$AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
				$Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
			}
		};

		var jssor_slider1 = new $JssorSlider$("slider1_container", options);

		//responsive code begin
		//you can remove responsive code if you don't want the slider scales while window resizes
		function ScaleSlider() {
			var bodyWidth = document.body.clientWidth;
			if (bodyWidth)
				jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 1920));
			else
				window.setTimeout(ScaleSlider, 30);
		}
		ScaleSlider();

		$(window).bind("load", ScaleSlider);
		$(window).bind("resize", ScaleSlider);
		$(window).bind("orientationchange", ScaleSlider);
		//responsive code end
	});
</script>

<div class="container" id="flores">
	<br>
	<div class="row">
		<div class="col-sm-6 col-md-4">
			<div class="thumbnail">
				<img src="<?= $this->url('/dist/img/1920/6.jpg')?>" alt="">
				<div class="caption">
					<ul class="list-group">
						<center>
							<li class="list-group-item"><h4>Arreglo floral 1</h4></li>
							<li class="list-group-item"><h4>Precio: <i class="fa fa-usd">450</i></h4></li>
						</center>
					</ul>
					<center>
						<p>
							<a href="#" class="btn btn-default" role="button">Hacer Pedido</a>
						</p>
					</center>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="thumbnail">
				<img src="<?= $this->url('/dist/img/1920/7.jpg')?>" alt="">
				<div class="caption">
					<ul class="list-group">
						<center>
							<li class="list-group-item"><h4>Arreglo floral 2</h4></li>
							<li class="list-group-item"><h4>Precio: <i class="fa fa-usd">450</i></h4></li>
						</center>
					</ul>
					<center>
						<p>
							<a href="#" class="btn btn-default" role="button">Hacer Pedido</a>
						</p>
					</center>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="thumbnail">
				<img src="<?= $this->url('/dist/img/1920/8.jpg')?>" alt="">
				<div class="caption">
					<ul class="list-group">
						<center>
							<li class="list-group-item"><h4>Arreglo floral 3</h4></li>
							<li class="list-group-item"><h4>Precio: <i class="fa fa-usd">450</i></h4></li>
						</center>
					</ul>
					<center>
						<p>
							<a href="#" class="btn btn-default" role="button">Hacer Pedido</a>
						</p>
					</center>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="thumbnail">
				<img src="<?= $this->url('/dist/img/1920/9.jpg')?>" alt="">
				<div class="caption">
					<ul class="list-group">
						<center>
							<li class="list-group-item"><h4>Arreglo floral 4</h4></li>
							<li class="list-group-item"><h4>Precio: <i class="fa fa-usd">750</i></h4></li>
						</center>
					</ul>
					<center>
						<p>
							<a href="#" class="btn btn-default" role="button">Hacer Pedido</a>
						</p>
					</center>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="thumbnail">
				<img src="<?= $this->url('/dist/img/1920/10.jpg')?>" alt="">
				<div class="caption">
					<ul class="list-group">
						<center>
							<li class="list-group-item"><h4>Arreglo floral 5</h4></li>
							<li class="list-group-item"><h4>Precio: <i class="fa fa-usd">120</i></h4></li>
						</center>
					</ul>
					<center>
						<p>
							<a href="#" class="btn btn-default" role="button">Hacer Pedido</a>
						</p>
					</center>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="thumbnail">
				<img src="<?= $this->url('/dist/img/1920/11.jpg')?>" alt="">
				<div class="caption">
					<ul class="list-group">
						<center>
							<li class="list-group-item"><h4>Arreglo floral 6</h4></li>
							<li class="list-group-item"><h4>Precio: <i class="fa fa-usd">120</i></h4></li>
						</center>
					</ul>
					<center>
						<p>
							<a href="#" class="btn btn-default" role="button">Hacer Pedido</a>
						</p>
					</center>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="thumbnail">
				<img src="<?= $this->url('/dist/img/1920/12.jpg')?>" alt="">
				<div class="caption">
					<ul class="list-group">
						<center>
							<li class="list-group-item"><h4>Arreglo floral 7</h4></li>
							<li class="list-group-item"><h4>Precio: <i class="fa fa-usd">920</i></h4></li>
						</center>
					</ul>
					<center>
						<p>
							<a href="#" class="btn btn-default" role="button">Hacer Pedido</a>
						</p>
					</center>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="thumbnail">
				<img src="<?= $this->url('/dist/img/1920/13.jpg')?>" alt="">
				<div class="caption">
					<ul class="list-group">
						<center>
							<li class="list-group-item"><h4>Arreglo floral 8</h4></li>
							<li class="list-group-item"><h4>Precio: <i class="fa fa-usd">820</i></h4></li>
						</center>
					</ul>
					<center>
						<p>
							<a href="#" class="btn btn-default" role="button">Hacer Pedido</a>
						</p>
					</center>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="thumbnail">
				<img src="<?= $this->url('/dist/img/1920/14.jpg')?>" alt="">
				<div class="caption">
					<ul class="list-group">
						<center>
							<li class="list-group-item"><h4>Arreglo floral 9</h4></li>
							<li class="list-group-item"><h4>Precio: <i class="fa fa-usd">1200</i></h4></li>
						</center>
					</ul>
					<center>
						<p>
							<a href="#" class="btn btn-default" role="button">Hacer Pedido</a>
						</p>
					</center>
				</div>
			</div>
		</div>
	</div>

</div>

<footer >
	<center><p>&copy;  All rights reserved.</p>
	</center>
</footer>
</body>
