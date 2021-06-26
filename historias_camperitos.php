<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>El Campito Refugio - Historia de los camperitos</title>
        <meta name="description" content="Aquí te contamos las historias de los perros que han llegado al refugio">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="estilos/estilos.css">
	</head>
	</head>
	<body class="bdtransparente">		
		<?php
			include "partials/header.php";
		?>
		<main>
			<section class="superposicion"> 
				<img src="imagenes/principio-dis.png" alt="Perro en silla de ruedas"/>
				<div class="superposiciontx">
					<h2>El Campito Refugio es NO eutanasico</h2>
					<h2>¡SI A LA VIDA!</h2>
				</div>					
			</section>
			<section>
				<h1>Historias de Nuestros Camperitos</h1>
				<p >Aca encontrarás las mejores historias de nuestros camperitos. Algunos han tenido una vida muy dura, pero por suerte, se han cruzado en su camino personas de gran corazón que han pedido por ellos, nosotros que los recibimos devolviéndoles la dignidad, y las madrinas y padrinos que los acompañan durante el proceso de recuperación cubriendo sus necesidades. Algunos fueron felizmente adoptados, otros ya son estrellitas y otros todavía esperan una familia.</p>
				<div class="adoptar">
					<div class="perroad">
						<img class="fichaperro" src="imagenes/historias1.jpg" alt="Dillon">
						<h3>Dillon</h3>
						<?php
			                include "partials/historia.php";
		                ?>
					</div>
					<div class="perroad">
						<img src="imagenes/historias2.jpg" alt="Disney">
						<h3>Disney</h3>
						<?php
			                include "partials/historia.php";
		                ?>
					</div>
					<div class="perroad">
						<img src="imagenes/historias3.jpg" alt="Florencio">
						<h3>Florencio</h3>
						<?php
			                include "partials/historia.php";
		                ?>
					</div>
					<div class="perroad">
						<img src="imagenes/historias4.jpg" alt="Gabriel">
						<h3>Gabriel</h3>
						<?php
			                include "partials/historia.php";
		                ?>
					</div>		
				</div>
				<div class="adoptar">
					<div class="perroad">
						<img src="imagenes/historias5.jpg" alt="Junior">
						<h3>Junior</h3>
						<?php
			                include "partials/historia.php";
		                ?>
					</div>
					<div class="perroad">
						<img src="imagenes/historias6.jpg" alt="Layza">
						<h3>Layza</h3>
						<?php
			                include "partials/historia.php";
		                ?>
					</div>
					<div class="perroad">
						<img src="imagenes/historias7.jpg" alt="Necky">
						<h3>Necky</h3>
						<?php
			                include "partials/historia.php";
		                ?>
					</div>
					<div class="perroad">
						<img src="imagenes/historias8.jpg" alt="Odín Manchis">
						<h3>Odín Manchis</h3>
						<?php
			                include "partials/historia.php";
		                ?>
					</div>		
				</div>
				<div class="adoptar">
					<div class="perroad">
						<img src="imagenes/historias9.jpg" alt="Toby">
						<h3>Toby</h3>
						<?php
			                include "partials/historia.php";
		                ?>
					</div>
					<div class="perroad">
						<img src="imagenes/historias10.jpg" alt="Yago">
						<h3>Yago</h3>
						<?php
			                include "partials/historia.php";
		                ?>
					</div>
					<div class="perroad">
						<img src="imagenes/historias11.jpg" alt="Yrigoyen">
						<h3>Yrigoyen</h3>
						<?php
			                include "partials/historia.php";
		                ?>
					</div>
					<div class="perroad">
						<img src="imagenes/historias12.jpg" alt="Balty">
						<h3>Balty</h3>
						<?php
			                include "partials/historia.php";
		                ?>
					</div>		
				</div>
				<div class="adoptar">
					<div class="perroad">
						<img src="imagenes/historias13.jpg" alt="Carolito">
						<h3>Carolito</h3>
						<?php
			                include "partials/historia.php";
		                ?>
					</div>
					<div class="perroad">
						<img src="imagenes/historias14.jpg" alt="Gaucho">
						<h3>Gaucho</h3>
						<?php
			                include "partials/historia.php";
		                ?>
					</div>
					<div class="perroad">
						<img src="imagenes/historias15.jpg" alt="Roque">
						<h3>Roque</h3>
						<?php
			                include "partials/historia.php";
		                ?>
					</div>
					<div class="perroad">
						<img src="imagenes/historias16.jpg" alt="Tati">
						<h3>Tati</h3>
						<?php
			                include "partials/historia.php";
		                ?>
					</div>		
				</div>
			</section>
			<a href="adopta.php" class="btn btna centrado">Adoptar</a>
		</main>
		<?php
			include "partials/footer.php";
		?>
		<script src="js/FichaHistoriasdeCamperitos.js"></script>	
	</body>
</html>