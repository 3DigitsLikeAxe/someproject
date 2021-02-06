<!DOCKTYPE html>
<html>
  <head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="https://sun1-23.userapi.com/impg/c856016/v856016529/253bfd/le3d7iR-ZxU.jpg?size=50x0&quality=88&crop=1,0,898,898&sign=2e1d7b8561110b2d566059ea121610da&ava=1">
    <meta name="keywords" content="Play-Offs Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() {setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!meta charset utf="8">
    <!--coustom css-->
    <link href="/css/all.css" rel="stylesheet" />
    <!--script-->
    <script src="/js/all.js"></script>
	<script src="/js/owl.carousel.min.js"></script>
    <!--fonts-->
    <link href='http://fonts.googleapis.com/css?family=Quicksand:300,400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
	<!--script-->
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
			});
			$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	@yield('head')
  </head>
  <body>
    @include('hat.header')
	
	@yield('content')
	
	@include('hat.footer')
	<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
  </body>
</html>