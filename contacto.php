<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>El Campito Refugio - Contacto</title>
        <meta name="description" content="Ponete en contacto con el refugio y sacate todas tus dudas. También seguinos en nuestras redes y vení a visitarnos!">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbKfXuHiR98tWi1ZFJ_jNhqq3U_kPMZUw&callback=initMap&libraries=&v=weekly"></script>

        <link rel="stylesheet" href="estilos/estilos.css">
	</head>
	<body class="bdtransparente">		
		<?php
			include "partials/header.php";
		?>
		<main>		
			<section>
				<h1>Contactanos</h1>
				<div class="txandimg">
					<div class="txdeimg">
						<h3 class="h3">Coordina tu Visita</h3>
						<p>Horario: Sábados de 13:30 a 18:00 (se suspende por lluvia).<br>Nos encontramos en Av. Hipólito Yrigoyen al 18500, Longchamps, en la estación de servicio AXION a las 13:00 hs. De ahí partimos PUNTUALMENTE a las 13:30 hs. en caravana hacia el refugio.</p>
						<h4>Coordina por mail o por las redes:</h4>
						<div class="socialft">
							<a href="https://www.instagram.com/refugioelcampito/?hl=es-la">
								<img src="imagenes/instagram.svg" alt="Instagram">
							</a>
							<a href="https://twitter.com/elcampito?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">
								<img src="imagenes/twitter.svg" alt="Twitter">
							</a>	
							<a href="https://www.facebook.com/elcampitorefugio/">
								<img src="imagenes/facebook.svg" alt="Facebook">
							</a>
							<a href="https://www.youtube.com/user/campitorefugio">
								<img src="imagenes/youtube.svg" alt="YouTube">
							</a>
						</div>
					</div>
					<div id="map"></div>
				</div>
			</section>
			<section>
				<h2>¿Tenés alguna duda?</h2>
				<form action= "enviarMail.php" method= "post">
					<div class="contacto1">
						<div class=formcontacto1>
							<input class="input_100" type="text" name="nombre" placeholder="Nombre" required>
							<input class="input_100" type="email" name="email" placeholder="Email" required email>
						</div>
						<div class=formcontacto2>
							<textarea class="input_100" id="pregunta" type="paragraph" name="pregunta" placeholder="Pregunta"></textarea>
						</div>
					</div>
					<input class="btn btnrelleno centrado" type="submit" value="Enviar">
				</form>
			</section>
		</main>	
		<?php
			include "partials/footer.php";
		?>
		<script src="js/main.js"></script>
	</body>
</html>