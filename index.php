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
      				<img src="img/logo_naranpol_200px.png" class="logo" />
      			</a>
    		</div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav navbar-right">
		      	<li><img src="img/linea.png"></li>
		      	<li class="active"><a href="#video">Inicio</a></li>
		        <li><a href="#productos">Productos</a></li>
		        <li><a href="#historia">Historia</a></li>
		        <li><a href="#contacto">Contacto</a></li>
		      </ul>
		      
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
	</nav>
	
	<!--<div class="container">-->
	<div>
		<!-- Secciones -->
		<section id="video" class="parallax-video" data-type="background" data-speed="10">
			<div class="col-sm-10 col-sm-offset-1 text-center">
				<iframe class="video" src="//player.vimeo.com/video/84327502?title=0&amp;byline=0&amp;portrait=0" 
					width="614" height="350" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>
				</iframe>
			</div>
			<div class="text-center">
				<a href="/img/bases_destapa_y_gana.pdf" target="blank">
					<img  class="banner" src="/img/banner_mundial.png">
				</a>
			</div>
		</section>
		
		<section id="productos" class="row parallax-productos" data-type="background" data-speed="10">
			<!--<img src="img/burbujas2.png" class="burbuja">-->
			<div class="col-sm-8 col-sm-offset-2">
				<!--<h1 class="pull-right">Nuestros Productos</h1>-->
				<img class="pull-right titulo" src="img/nuestrosProductos.png">
				<div id="carousel-example-generic" class="carousel slide col-sm-12" data-ride="carousel">
					<!-- Indicators -->
					<!--
				  	<ol class="carousel-indicators">
				    	<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				    	<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				    	<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				    	<li data-target="#carousel-example-generic" data-slide-to="3"></li>
				    	<li data-target="#carousel-example-generic" data-slide-to="4"></li>
				    	<li data-target="#carousel-example-generic" data-slide-to="5"></li>
				    	<li data-target="#carousel-example-generic" data-slide-to="6"></li>
				  	</ol>-->
				
					<!-- Wrapper for slides -->
				  	<div class="carousel-inner">
				      	<div class="item active">
				        	<img src="img/productos/nuevos/ferne.png" class="img-producto">
				      	</div>
					    <div class="item">
					    	<img src="img/productos/nuevos/cola.png" class="img-producto">
				    	</div>
				    	<div class="item">
				        	<img src="img/productos/nuevos/limon.png" class="img-producto">
				      	</div>
				    	<div class="item">
				        	<img src="img/productos/nuevos/naranja.png" class="img-producto">
				      	</div>
				    	<div class="item">
				        	<img src="img/productos/nuevos/pomelo.png" class="img-producto">
				      	</div>
				    	<div class="item">
				        	<img src="img/productos/nuevos/amargos.png" class="img-producto">
				     	</div>
				      	<div class="item">
				        	<img src="img/productos/nuevos/agua_soda.png" class="img-producto">
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
		
		<section id="historia" class="parallax-historia" data-type="background" data-speed="10">
			<!--<img src="img/burbujas3.png" class="burbuja">-->
			<div class="col-sm-10 col-sm-offset-1">
				
				<div class="col-sm-10 col-sm-offset-1 historia-marco">
					<div class="row historia-titulo">
						<!--<h1 class="pull-right">Nuestra Historia</h1>-->
						<img class="pull-right titulo" src="img/nuestraHistoria.png">
					</div>
					<div class="row">
						<!--
						<div class="col-sm-5">
							<img src="img/historia/todos.jpg" class="img-responsive imagen-todos">
						</div>-->
						<div class="col-sm-5">
							<div id="carousel-fotos" class="carousel slide col-sm-12" data-ride="carousel">
							<!-- Wrapper for slides -->
							  	<div class="carousel-inner">
								    <div class="item active">
								    	<img src="img/historia/imagen7.jpg" class="img-responsive imagen-todos"/>
							    	</div>
							    	<div class="item">
							        	<img src="img/historia/imagen1.jpg" class="img-responsive imagen-todos"/>
							      	</div>
							    	<div class="item">
							        	<img src="img/historia/imagen2.jpg" class="img-responsive imagen-todos"/>
							      	</div>
							    	<div class="item">
							        	<img src="img/historia/imagen8.jpg" class="img-responsive imagen-todos"/>
							      	</div>
							      	<div class="item">
							        	<img src="img/historia/imagen5.jpg" class="img-responsive imagen-todos"/>
							      	</div>
							    	<div class="item">
							        	<img src="img/historia/imagen3.jpg" class="img-responsive imagen-todos"/>
							      	</div>
							      	<div class="item">
							        	<img src="img/historia/imagen4.jpg" class="img-responsive imagen-todos"/>
							      	</div>
							    </div>
							  </div>
							
							  <!-- Controls -->
							  <a class="left carousel-control" href="#carousel-fotos" data-slide="prev">
							    <span class="glyphicon glyphicon-chevron-left"></span>
							  </a>
							  <a class="right carousel-control" href="#carousel-fotos" data-slide="next">
							    <span class="glyphicon glyphicon-chevron-right"></span>
							  </a>
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
					
					<div class="row text-center galeria">
						<div class="col-md-12">
							<a href="img/historia/imagen7.jpg" rel="gallery"><img class="pequenia" src="img/historia/imagen7.jpg" /></a>
	            			<a href="img/historia/imagen9.jpg" rel="gallery"><img class="pequenia" src="img/historia/imagen10.jpg" /></a>	
							<a href="img/historia/imagen1.jpg" rel="gallery"><img class="pequenia" src="img/historia/imagen1.jpg" /></a>
	            			<a href="img/historia/imagen2.jpg" rel="gallery"><img class="pequenia" src="img/historia/imagen2.jpg" /></a>						
	            			<a href="img/historia/imagen8.jpg" rel="gallery"><img class="pequenia" src="img/historia/imagen8.jpg" /></a>
	            			<a href="img/historia/imagen5.jpg" rel="gallery"><img class="pequenia" src="img/historia/imagen5.jpg" /></a>
	            			<a href="img/historia/imagen3.jpg" rel="gallery"><img class="pequenia" src="img/historia/imagen3.jpg" /></a>
		           			<a href="img/historia/imagen4.jpg" rel="gallery"><img class="pequenia" src="img/historia/imagen4.jpg" /></a>
	            		</div>
					</div>
					<!--
					<div class="row text-center galeria">
						<div class="col-md-12">
							<div id="blueimp-gallery" class="blueimp-gallery">
							    <div class="slides"></div>
							    <h3 class="title"></h3>
							    <a class="prev">‹</a>
							    <a class="next">›</a>
							    <a class="close">×</a>
							    <a class="play-pause"></a>
							    <ol class="indicator"></ol>
							    <div class="modal fade">
							        <div class="modal-dialog">
							            <div class="modal-content">
							                <div class="modal-header">
							                    <button type="button" class="close" aria-hidden="true">&times;</button>
							                    <h4 class="modal-title"></h4>
							                </div>
							                <div class="modal-body next"></div>
							                <div class="modal-footer">
							                    <button type="button" class="btn btn-default pull-left prev">
							                        <i class="glyphicon glyphicon-chevron-left"></i>
							                        Previous
							                    </button>
							                    <button type="button" class="btn btn-primary next">
							                        Next
							                        <i class="glyphicon glyphicon-chevron-right"></i>
							                    </button>
							                </div>
							            </div>
							        </div>
							    </div>
							</div>
							<div id="links">
								<a href="img/historia/imagen7.jpg" data-gallery><img class="pequenia" src="img/historia/imagen7.jpg" /></a>
		            			<a href="img/historia/imagen9.jpg" data-gallery><img class="pequenia" src="img/historia/imagen10.jpg" /></a>	
								<a href="img/historia/imagen1.jpg" data-gallery><img class="pequenia" src="img/historia/imagen1.jpg" /></a>
		            			<a href="img/historia/imagen2.jpg" data-gallery><img class="pequenia" src="img/historia/imagen2.jpg" /></a>						
		            			<a href="img/historia/imagen8.jpg" data-gallery><img class="pequenia" src="img/historia/imagen8.jpg" /></a>
		            			<a href="img/historia/imagen5.jpg" data-gallery><img class="pequenia" src="img/historia/imagen5.jpg" /></a>
		            			<a href="img/historia/imagen3.jpg" data-gallery><img class="pequenia" src="img/historia/imagen3.jpg" /></a>
			           			<a href="img/historia/imagen4.jpg" data-gallery><img class="pequenia" src="img/historia/imagen4.jpg" /></a>
			           		</div>
	           			</div>
					</div>-->
				</div>
			</div>
		</section>
		
		<section id="contacto" class="parallax-contacto" data-type="background" data-speed="10">
			<div class="col-sm-10 col-sm-offset-1">
				
				<div class="col-sm-10 col-sm-offset-1">
					<div class="row contactanos-titulo">
						<!--<h1 class="pull-right">¡Contactanos!</h1>-->
						<img class="pull-right titulo" src="img/contactanos.png">
					</div>
					<div class="row separador">		
						<div class="col-sm-12">
							<a href="https://www.facebook.com/coop.naranpol?fref=ts" target="__blank">
								<i class="fa fa-facebook-square fa-2x">
									<small>facebook.com/coop.naranpol</small>
								</i>
							</a>
						</div>
					</div>
					<div class="row separador">
						<div class="col-sm-7">
							<i class="fa fa-envelope fa-2x"> <small>contacto@naranpol.com.ar</small></i>
						</div>
						<div class="col-sm-5">
							<i class="fa fa-phone fa-2x"> <small>(54) 0342 4880684 | 4899785</small></i>
						</div>
					</div>
					<div class="row separador">
						<div class="col-sm-12">
							<i class="fa fa-map-marker fa-2x">
								<small> Av. Blas Parera Nº 9309 · Santa Fe · Argentina</small>
							</i>
						</div>
					</div>
					<div class="row separador">
						
					</div>
				</div>
			</div>
			<!--<img src="img/burbujas4.png" class="burbuja">-->
		</section>
	
	</div>
</body>
<script>
	$('.parallax-contacto').parallax({
    	speed : -0.15
    });
    $('.parallax-historia').parallax({
    	speed : -0.15
    });
    $('.parallax-productos').parallax({
    	speed : -0.35
    });
	$('.parallax-video').parallax({
    	speed : -0.35
    });
</script>
</html>
