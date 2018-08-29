<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content=" ">
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> -->

    <title>Davivir | San Patricio</title>

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
    <!-- Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <!-- Custom css  -->
    <link href="/css/style-sp.css" rel="stylesheet">
</head>
<body>
	<header>
		<nav>
			<div class="nav-wrapper">
				<a href="#" class="brand-logo"><img src="/images/logo.png" alt="Logo"></a>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<li><a href="#">DESARROLLOS</a></li>
					<li><a href="#">NUESTRA EMPRESA</a></li>
					<li><a href="#">CONTÁCTANOS</a></li>
					<li><a href="#">BLOG</a></li>
					<li><a href="#" id="cotizaYa">COTIZA YA</a></li>
					<li><a href="#"><i class="fas fa-bars"></i></a></li>
				</ul>
			</div>
		</nav>
		<!-- header info -->
		<div id="header-info">
			<img src="/images/desarrollo-sanpatricio/DSC_0152.jpg" alt="header-img">
			<div id="header-text">
				<div id="header-img"><img src="/images/Montecarlo.png" alt=""></div>
				<div id="header-titles">
					<h3>MONTECARLO</h3>
					<h2>Un nuevo desarrollo ubicado en Técamac, Estado de México, pensado en gente exigente que aprecia los detalles de vivir bien.</h2>
				</div>
			</div>
		</div>
		<!-- /header info -->
	</header>

	<div id="main">

		<section id="models-section">
			<h4>CONOCE LOS <b>MODELOS</b> MONTECARLO</h4>
			<div class="row carousel">
				<div class="col s12 m4 carousel-item">
					<div class="card">
						<div class="card-image">
							<img src="/images/ESTADO-DE-MÉXICO---TECÁMAC-Montecarlo.jpg">
						</div>
						<div class="card-content">
							<h4>MODELO: FORTEZZA</h4>
							<p>I am a very simple card. I am good at containing small bits of information.
							I am convenient because I require little markup to use effectively.</p>
						</div>
					</div>
				</div>
				<div class="col s12 m4 carousel-item">
					<div class="card">
						<div class="card-image">
							<img src="/images/ESTADO-DE-MÉXICO---TECÁMAC-Montecarlo.jpg">
						</div>
						<div class="card-content">
							<h4>MODELO: DAMASCO (PROXIMAMENTE)</h4>
							<p>I am a very simple card. I am good at containing small bits of information.
							I am convenient because I require little markup to use effectively.</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="catalogo-section">
			<div class="row">
				<div class="col m7" id="nuevo-desarrollo">
					<h4><b>TENEMOS UN NUEVO DESARROLLO DE VIVIENDA PARA TI</b></h4>
					<p>Te presentamos Montecarlo, un nuevo desarrollo ubicado en Tecámac, Estado de México, pensado en gente exigente que aprecia los detalles de vivir bien.</p>
					<p>Muy cerca del centro del municipio de Tecámac, con lo cual contarás con muchos servicios a sólo unos pasos. Adicionalmente estarás muy cerca de la cuidad de México con múltiples vías de acceso.</p>
					<p>¿Qué estás esperando? Ven a conocernos y sé de los primeros en apartar y decir:</p>
					<p>Quiero vivir en Montecarlo! Quiero vivir con altura!</p>
					<a href="#" class="btn-custom"><b>VER MODELOS</b></a>
					<a href="#" class="btn-custom">AGENDA TU VISITA</a>
				</div>
				<div class="col m5" id="catalogo-form">
					{{-- <img src="/images/imagen-contactanos.jpg" alt="Img-catalogo"> --}}
					<h4>DESCARGA NUESTRO <b>CATÁLOGO</b></h4>
					<form action="#" method="post">
						<input type="text" name="names" placeholder="Nombre y Apellido">
						<input type="email" name="email" placeholder="Email">
						<input type="number" name="phone" placeholder="Teléfono">
						<textarea name="comment" id="comment" class="materialize-textarea" placeholder="¿En que podemos ayudarte?"></textarea>
						<p>
					      <label>
					        <input type="checkbox" class="filled-in" required />
					        <span>Acepto <span>términos y condiciones</span></span>
					      </label>
					    </p>
						<button class="btn-custom-btn btn">ENVIAR</button>
					</form>
				</div>
			</div>
		</section>

		<section id="beneficios-section">
			<h4>CONOCE LOS BENEFICIOS DEVIVIR EN <b>MONTECARLO</b></h4>
			<p><b>Detalles únicos que te harán disfrutar de<br>cada momento de tu vida.</b></p>
			<div class="row">
				<div class="col m4 beneficio">
					<div class="col m3">
						<img src="/images/modelo-aleppo/escuela.png" alt="icono">
					</div>
					<div class="col m9 left-align">
						<h5><b>ESCUELA</b></h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
					</div>
				</div>
				<div class="col m4 beneficio">
					<div class="col m3">
						<img src="/images/modelo-aleppo/calle.png" alt="icono">
					</div>
					<div class="col m9 left-align">
						<h5><b>CALLE PRIVADA</b></h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
					</div>
				</div>
				<div class="col m4 beneficio">
					<div class="col m3">
						<img src="/images/modelo-aleppo/verde.png" alt="icono">
					</div>
					<div class="col m9 left-align">
						<h5><b>ÁREAS VERDES</b></h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
					</div>
				</div>

				<div class="col m4 beneficio">
					<div class="col m3">
						<img src="/images/modelo-aleppo/comercial.png" alt="icono">
					</div>
					<div class="col m9 left-align">
						<h5><b>ZONA COMERCIAL</b></h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
					</div>
				</div>
				<div class="col m4 beneficio">
					<div class="col m3">
						<img src="/images/modelo-aleppo/deporte.png" alt="icono">
					</div>
					<div class="col m9 left-align">
						<h5><b>ÁREA DEPORTIVA</b></h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
					</div>
				</div>
				<div class="col m4 beneficio">
					<div class="col m3">
						<img src="/images/modelo-aleppo/regimen.png" alt="icono">
					</div>
					<div class="col m9 left-align">
						<h5><b>REGIMEN CONDOMINAL</b></h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
					</div>
				</div>

				<div class="col m4 beneficio">
					<div class="col m3">
						<img src="/images/modelo-aleppo/parque.png" alt="icono">
					</div>
					<div class="col m9 left-align">
						<h5><b>PARQUES</b></h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
					</div>
				</div>
				<div class="col m4 beneficio">
					<div class="col m3">
						<img src="/images/modelo-aleppo/vias.png" alt="icono">
					</div>
					<div class="col m9 left-align">
						<h5><b>VÍAS DE ACCESO</b></h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
					</div>
				</div>
				<div class="col m4 beneficio">
					<div class="col m3">
						<img src="/images/modelo-aleppo/control.png" alt="icono">
					</div>
					<div class="col m9 left-align">
						<h5><b>ACCESO CONTROLADO</b></h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
					</div>
				</div>
			</div>
		</section>

		<section id="equipo-section">
			<h4>CONTACTA A <b>NUESTRO EQUIPO</b> MONTECARLO</h4>
			<div class="row">
				<div class="col m6">
					<div class="col m6 imagen-equipo">
						<img src="/images/RECEPCION.jpg" alt="recepcion">
					</div>
					<div class="col m6 left-align description-equipo">
						<h6>RECEPCIÓN</h6>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
						<p class="equipo-horario">LUN A VIE | DE 9AM A 4PM</p>
						<div class="equipo-iconos">
							<img src="/images/Telefono.png" alt="Telefono">
							<img src="/images/Mensaje.png" alt="mensajes">
							<img src="/images/Whatsapp.png" alt="Whatsapp">
						</div>
					</div>
				</div>
				<div class="col m6">
					<div class="col m6 imagen-equipo">
						<img src="/images/CALL-CENTER.jpg" alt="recepcion">
					</div>
					<div class="col m6 left-align description-equipo">
						<h6>CALL CENTER</h6>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
						<p class="equipo-horario">LUN A VIE | DE 9AM A 4PM</p>
						<div class="equipo-iconos">
							<img src="/images/Telefono.png" alt="Telefono">
							<img src="/images/Mensaje.png" alt="mensajes">
							<img src="/images/Whatsapp.png" alt="Whatsapp">
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="map-section" class="center-align">
			<h4>VISITA TU <b>PRÓXIMO HOGAR</b></h4>
			<img src="/images/map.jpg" alt="mapa">
			<p><b>LLEGA A MONTECARLO CON UN SOLO CLIC</b></p>
			<a href="#" class="btn-custom">WAZE</a>
			<a href="#" class="btn-custom">DESCARGAR PDF</a>
			<a href="#" class="btn-custom">¿CÓMO LLEGAR A MONTECARLO?</a>
			<a href="#" class="btn-custom">AGENDA TU VISITA</a>
		</section>

		<section id="otros-section">
			<h4 class="center-align">CONOCE OTROS DE <b>NUESTROS DESAROLLOS</b></h4>
			<div class="row">
				<div class="col m7">1</div>
				<div class="col m5">2</div>
			</div>
		</section>

		<section id="catalogo-footer">
			<div class="col m5 right" id="catalogo-form-footer">
					{{-- <img src="/images/imagen-contactanos.jpg" alt="Img-catalogo"> --}}
					<h4>DESCARGA NUESTRO <b>CATÁLOGO</b></h4>
					<form action="#" method="post">
						<input type="text" name="names" placeholder="Nombre y Apellido">
						<input type="email" name="email" placeholder="Email">
						<input type="number" name="phone" placeholder="Teléfono">
						<textarea name="comment" id="comment" class="materialize-textarea" placeholder="¿En que podemos ayudarte?"></textarea>
						<p>
					      <label>
					        <input type="checkbox" class="filled-in" required />
					        <span>Acepto <span>términos y condiciones</span></span>
					      </label>
					    </p>
						<button class="btn-custom-btn btn">ENVIAR</button>
					</form>
				</div>
		</section>

	</div>

	<footer></footer>

	<!-- Jquery -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<!-- Materialize JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <!-- Carousel -->
    <script>
	document.addEventListener('DOMContentLoaded', function() {
	    var elems = document.querySelectorAll('.carousel');
	    var instances = M.Carousel.init(elems, options);
  	});

	  // Or with jQuery

  	$(document).ready(function(){
    	$('.carousel').carousel({
    		numVisible:1,
    		dist:0,
    	});
  	});
    </script>
</body>
</html>