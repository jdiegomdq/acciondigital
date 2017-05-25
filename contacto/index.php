<!DOCTYPE HTML>
<!--
	Snapshot by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<head>
	<title>Acción Digital</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="/assets/css/sections/sectionContact.css" />

	<script type="text/javascript" src="/assets/js/jquery-2.2.3.min.js"></script>
</head>
<body class="home">
	<div class="page-wrap">

		<header class="header" id="header">
			<a class="logo" href="/"><img src="/assets/images/logo.png" alt="Accion Digital" /></a>
			<nav id="nav-header" class="nav"></nav>
		</header>

		<section id="main">

			<!-- Banner -->
			<!-- <section id="banner">
				<div class="inner">
					<h1>Bienvenido a Acción Digital</h1>
					<p>Fotografía de eventos deportivos.</p>
					<ul class="actions">
						<li><a href="#galleries" class="button alt scrolly big">Continuar</a></li>
					</ul>
				</div>
			</section> -->

			<!-- Gallery -->
			<!-- <section id="galleries">
				<div class="gallery" id="gallery"></div>
			</section> -->

			<section id="contact">
				<!-- Social -->
				<div class="social column">
					<h3>Nosotros</h3>
					<p>Fotografía de deportes</p>
					<p>Javier Piva Flos y Guillermo Silva</p>
					<h4>Teléfono</h4>
					<p>0249 450-3791</p>
					<h3>Seguinos</h3>
					<ul class="icons">
						<li><a href="https://www.facebook.com/AccionDigitalfoto/" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="https://www.flickr.com/photos/xav561/albums" class="icon fa-flickr"><span class="label">Flickr</span></a></li>
						<!-- <li><a href="#" class="icon fa-phone"><span class="label">0249 450-3791</span></a></li> -->
					</ul>
				</div>

				
				<!-- Form -->
				<div class="column">
					<h3>Contacto</h3>
					<form action="index.php" method="post">
						<div class="field half first">
							<label for="name">Nombre</label>
							<input name="name" id="name" type="text" placeholder="Name">
						</div>
						<div class="field half">
							<label for="email">Email</label>
							<input name="email" id="email" type="email" placeholder="Email">
						</div>
						<div class="field">
							<label for="message">Mensaje</label>
							<textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
						</div>
						<ul class="actions">
							<li><input value="Enviar" class="button" type="submit"></li>
						</ul>
					</form>
					<?php
					if (isset($_POST["email"])) {
						$to      = 'jdiegomdq@gmail.com';
						$subject = 'Nuevo mensaje de '.$_REQUEST[name].' desde www.acciondigitalfoto.com';
						$message = $_REQUEST[message];
						$headers = 'From: ' . $_REQUEST[email] . "\r\n" .
						'Reply-To: ' . $_REQUEST[email] . "\r\n" .
						'X-Mailer: PHP/' . phpversion();
						if (mail($to, $subject, $message, $headers)) echo "<script type='text/javascript'>alert('El mensaje fue enviado con éxito');</script>";
						else echo "<script type='text/javascript'>alert('Hubo un error al enviar el mensaje.');</script>";
					}
					?> 
				</div>
			</section>

			<!-- Footer -->
			<footer id="footer"></footer>
		</section>
	</div>

	<!-- Scripts -->
	<script type="text/javascript" src="/assets/js/load_pieces.js"></script>	
	<script type="text/javascript" src="/assets/js/handlebars.min.js"></script>
	<script type="text/javascript" src="/assets/js/jquery.scrolly.min.js"></script>
	<script type="text/javascript" src="/assets/js/util.js"></script>
	<script type="text/javascript" src="/assets/js/carrito/bootstrap.min.js"></script>
	<script type="text/javascript" src="/assets/js/carrito/jquery.mycart.js"></script>
	<!-- <script type="text/javascript" src="/assets/js/jquery.poptrox.min.js"></script> -->
	<!-- <script type="text/javascript" src="/assets/js/carrito/carrito.js"></script> -->
	<!-- <script type="text/javascript" src="/assets/js/skel.min.js"></script> -->
	<!-- <script type="text/javascript" src="/assets/js/main.js"></script> -->
</body>
</html>