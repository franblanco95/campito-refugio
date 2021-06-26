<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>El Campito Refugio</title>
        <meta name="description" content="Somos un refugio de perros que rescata a los animales más necesitados, los rehabilita y los da en adopción a familias que le den amor">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="estilos/estilos.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
	</head>
	<body class="bdindex">		
		<?php
			include "partials/header.php";
		?>
		<main>
			<section class="principal">
				<div class="wrapper">	
					<div class="prev-btn">
						<i class="fas fa-chevron-left"></i>
					</div>
					<div class="slides-container">
						<div class="slide">
							<img src="imagenes/hd-index-1.png" alt="Foto de Cachorro"/>
							<h4>El amor es una palabra de cuatro patas</h4>
						</div>
						<div class="slide">
							<img src="imagenes/hd-index-2.png" alt="Perro acostado"/>
							<h4>Ellos solo quieren<br>muchos mimos</h4>
						</div>
						<div class="slide">
							<img src="imagenes/hd-index-3.png" alt="Perro sonriendo"/>
							<h4>Cada perro es<br>una historia distinta</h4>
						</div>
					</div> 
					<div class="next-btn">
						<i class="fas fa-chevron-right"></i>
					</div>
					<div class="navigation-dots">
					</div>
				</div>
			</section>
			<section class="txandimg">

				<div class="txdeimg">
					<h1>Conocenos</h1>
					<p>El refugio tiene una población que ronda los 750 perros. El trabajo de rescate y recuperación no tiene precedentes en américa latina.  Por ser un refugio NO eutanásico no considera inviable a ninguno de sus animales. Lo que lo hace único en el mundo son sus 120 perros paraliticos, ellos no pueden caminar y usan carritos hechos a medida; además viven en el refugio 50 ciegos, y más de 250 viejitos, Muchos de ellos están en tratamiento por problemas renales, hepáticos, cardíacos, oncológicos o diabéticos.</p>
					<a href="historia_refugio.php" class="btn btna">Quiero saber más</a>
				</div>
					<img class="imgdetx" src="imagenes/foto-grupo-1.jpg" alt="Foto de Colaboradores">
			</section>
			<section>			
				<h1>¿Querés adoptar?</h1>
				<p class="textolargo">¿Porqué adoptar en vez de comprar? Porque adoptando estas salvando la vida de un animal rescatado. Cada perro adoptado deja su lugar para que ingrese otro y pueda ser recuperado en el refugio.</p>
				<div class="adoptar">

                    <div class="perroad">
                        <img src="imagenes/perro1.jpg" alt="Akamaru">
                        <h3>Akamaru</h3>
                        <p>Edad: 5</p>
                        <p>Tamaño: Chico</p>
                    </div>
                    <div class="perroad">
                        <img src="imagenes/perro2.jpg" alt="André">
                        <h3>André</h3>
                        <p>Edad: 2</p>
                        <p>Tamaño: Mediano</p>
                    </div>
                    <div class="perroad">
                        <img src="imagenes/perro3.jpg" alt="Bala">
                        <h3>Bala</h3>
                        <p>Edad: 5</p>
                        <p>Tamaño: Mediano</p>
                    </div>
                    <div class="perroad">
                        <img src="imagenes/perro4.jpg" alt="Blanquito">
                        <h3>Blanquito</h3>
                        <p>Edad: 7</p>
                        <p>Tamaño: Mediano</p>
                    </div>		
				</div>
				<a href="adopta.php" class="btn btna centrado">Ver más perritos</a>
			</section>
			<section>
				<h2 class="titulocentrado">¿Cómo puedo ayudar?</h2>
				<div class="txandimg">
					<img class="imgdetx" src="imagenes/foto-ayuda.jpg" alt="Colaboradores ayudando">
					<div class="txdeimg">
						<p>El Campito Refugio es una ONG con sus balances al día. Nuestra cuenta bancaria está auditada a nombre del refugio por lo cual cada donación es rendida. Se puede ser padrino/ madrina del refugio, o de un perrito que desees proteger en particular, a voluntad: no hay montos fijos y la frecuencia de la ayuda también es voluntaria. Y por superto, deseamos que todos los camperitos encuentren una familia que les de mucho amor, es por eso que la adopción es un objetivo muy importante para nosotros.</p>
						<a href="donar.php" class="btn btna btnrelleno">Donar</a>
					</div>
				</div>
			</section>
		</main>
		<?php
			include "partials/footer.php";
		?>
		<script src="js/main.js"></script>
		
	</body>
</html>