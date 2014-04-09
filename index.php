<!DOCTYPE html>
<html>
<head>
	 <?php include ("head/head.php"); ?>
</head>
<body>
	<!-- Menú Superior -->
	<nav class="navbar navbar-default navbar-fixed-top " role="navigation">
  		<div class="container-fluid">
    		<!-- Brand and toggle get grouped for bnavbar-fixed-topetter mobile display -->
    		<div class="navbar-header">
      			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        			<span class="sr-only">Toggle navigation</span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
      			</button>
      			<a class="navbar-brand" href="#">
      				<img src="img/logo_naranpol.png" class="logo" />
      			</a>
    		</div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav navbar-right">
		        <li class="active"><a href="#productos">Productos</a></li>
		        <li><a href="#historia">Historia</a></li>
		        <li><a href="#contacto">Contacto</a></li>
		      </ul>
		      
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
	</nav>
	<!--<div class="container">-->

	<div>
		<!-- Secciones -->
		<section id="video" class="row">
			<div class="col-sm-10 col-sm-offset-1 text-center">
				<iframe src="//player.vimeo.com/video/84327502?title=0&amp;byline=0&amp;portrait=0" 
					width="623" height="350" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>
				</iframe>
			</div>
		</section>
		
		<section id="productos" class="row">
			<img src="img/burbujas2.png" class="burbuja">
			<div class="col-sm-6 col-sm-offset-3">
				<h1 class="pull-right">Nuestros Productos</h1>
				<div id="carousel-example-generic" class="carousel slide col-sm-12" data-ride="carousel">
					<!-- Indicators -->
				  	<ol class="carousel-indicators">
				    	<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				    	<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				    	<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				    	<li data-target="#carousel-example-generic" data-slide-to="3"></li>
				    	<li data-target="#carousel-example-generic" data-slide-to="4"></li>
				  	</ol>
				
					<!-- Wrapper for slides -->
				  	<div class="carousel-inner">
					    <div class="item active">
					    	<img src="img/productos/cola_info.png" class="img-producto">
				    	</div>
				    	<div class="item">
				        	<img src="img/productos/lima_info.png" class="img-producto">
				      	</div>
				    	<div class="item">
				        	<img src="img/productos/naranja_info.png" class="img-producto">
				      	</div>
				    	<div class="item">
				        	<img src="img/productos/pomelo_info.png" class="img-producto">
				      	</div>
				    	<div class="item">
				        	<img src="img/productos/cuyano_info.png" class="img-producto">
				      	</div>
				    </div>
				  </div>
				
				  <!-- Controls -->
				  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left"></span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right"></span>
				  </a>
				</div>

		</section>
		
		<section id="historia" class="row">
			<img src="img/burbujas3.png" class="burbuja">
			<div class="col-sm-10 col-sm-offset-1">
				
				<div class="col-sm-10 col-sm-offset-1 historia-marco">
					<h1>Nuestra Historia</h1>
					<div class="row">
						<div class="col-sm-5">
							<img src="img/planta.jpg" class="img-responsive">
						</div>
						<div class="col-sm-7">
							<p class="historia text-justify">
								<b class="historia-resalta">“Cooperativa de Trabajo Naranpol Limitada”</b> es una fabrica recuperada y administrada por sus 
								trabajadores, desde el 22 de diciembre del 2012.

								La cooperativa esta compuesta por mas de 90 asociados y brinda, directa e indirectamente, 
								más de 150 puestos de trabajo.

								Con fuerte presencia en la región y en otras 15 provincias del territorio argentino, sus productos 
								brindan una excelente calidad y precio accesible para el disfrute de las familias argentinas.
								
								Ubicada en la capital de la provincia de Santa Fe, su planta productora cuenta con la 
								tecnología y personal capacitado, acorde a las exigencias del mercado.
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="contacto" class="row">
		<img src="img/burbujas4.png" class="burbuja">
			<div class="col-sm-10 col-sm-offset-1">
				
				<div class="col-sm-10 col-sm-offset-1">
					<h1>¡Contactanos!</h1>
					<div class="row">		
						<div class="col-sm-10 col-sm-offset-1">
							<div class="pull-right">
								<i class="fa fa-twitter-square fa-3x"></i>&nbsp;
								<i class="fa fa-facebook-square fa-3x"></i>
							</div>
						</div>
					</div>
					<div class="row separador">
						<div class="col-sm-7">
							<i class="fa fa-envelope fa-2x"> <small>contacto@naranpol.com.ar</small></i>
							
						</div>
						<div class="col-sm-5">
							<i class="fa fa-phone fa-2x"> <small>(54) 342 - 4 123 123</small></i>
						</div>
					</div>
					<div class="row separador">
						<div class="col-sm-12">
							<i class="fa fa-map-marker fa-2x">
								<small> Av. Blas Parera Nº 9309 · Santa Fe · Argentina</small>
							</i>
						</div>
					</div>
				</div>
			</div>
		</section>
	
	</div>
</body>
</html>
