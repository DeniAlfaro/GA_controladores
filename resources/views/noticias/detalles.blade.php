<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>El chismoso | detalles</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic|Roboto:400,300,700' rel='stylesheet' type='text/css'>
	<!-- Animate -->
	<link rel="stylesheet" href="/css/animate.css">
	<!-- Icomoon -->
	<link rel="stylesheet" href="/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="/css/bootstrap.css">

	<link rel="stylesheet" href="/css/style.css">


	<!-- Modernizr JS -->
	<script src="/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<header id="fh5co-header">
		
		<div class="container-fluid">

			<div class="row">
				<!-- 
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
					<ul class="fh5co-social">
						<li><a href="#"><i class="icon-twitter"></i></a></li>
						<li><a href="#"><i class="icon-facebook"></i></a></li>
						<li><a href="#"><i class="icon-instagram"></i></a></li>
					</ul>
				 -->
				<div class="col-lg-12 col-md-12 text-center">
					<h1 id="fh5co-logo"><a href="#">El chismoso</a></h1>
				</div>

			</div>
		
		</div>

	</header>
  <!-- 	<a href="#" class="fh5co-post-prev"><span><i class="icon-chevron-left"></i> Prev</span></a>
	<a href="#" class="fh5co-post-next"><span>Next <i class="icon-chevron-right"></i></span></a> -->

	<div class="container-fluid">
		<div class="row fh5co-post-entry single-entry">
			<article class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
				<figure class="animate-box">
            @if($noticia->foto != NULL)
							<img src=" {{$noticia->foto}}" alt="Image" class="img-responsive">
						@endif
				</figure>
				<h2 class="fh5co-article-title animate-box">{{ $noticia->titulo }}</h2>
				<span class="fh5co-meta fh5co-date animate-box"><strong>{{ $noticia->fecha }}</strong></span>
        <span class="fh5co-meta fh5co-date animate-box">{{ $noticia->autor}}</span>
				
				<div class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-left content-article">
					<div class="row">
						<div class="col-lg-8 cp-r animate-box">
              <p>{{ $noticia->cuerpo}}</p>   
						</div>
						<div class="col-lg-4 animate-box">
							<div class="fh5co-highlight right">
								<h4>Importante</h4>
								<p>{{ $noticia->cuerpo}}</p>   
							</div>
						</div>
					</div>

					<div class="row rp-b">
						<div class="col-md-12 animate-box">
							<blockquote>
								<p>&ldquo;{{ $noticia->cuerpo}}&rdquo; <cite>&mdash; {{ $noticia->autor}}</cite></p>
							</blockquote>
						</div>
					</div>				
					
				</div>
			</article>
		</div>
	</div>

	<footer id="fh5co-footer">
    <strong>Copyright &copy; 2021 El chismoso</strong> Todos los derechos reservados
	</footer>
	
	<!-- jQuery -->
	<script src="/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="/js/jquery.waypoints.min.js"></script>
	<!-- Main JS -->
	<script src="/js/main.js"></script>

	</body>
</html>



<!-- 
  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title> @if($noticia != NULL)  {{ $noticia->titulo}} @else  Noticia no encontrada @endif</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilo.css">
</head>

<body>  
        <a href="{{route("noticias")}}">Volver a noticias</a>
        @if($noticia != NULL)          
        
          <h1>{{ $noticia->titulo}}</h1>
          <p>{{ $noticia->fecha}}</p>
          <h4>{{ $noticia->autor}}</h4>
          @if($noticia->foto != NULL)
          <img src=" {{$noticia->foto}}" <style width="450px" height="auto"></style>
          @endif
          <p>{{ $noticia->cuerpo}}</p>   
        @else
        <h1>Lo sentimos, no se encontro la noticia que buscas</h1>
        
        @endif
</body>
</html>
 -->