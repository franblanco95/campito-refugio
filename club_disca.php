<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>El Campito Refugio - Club de los Disca</title>
        <meta name="description" content="Gran parte de los perritos llegan con algún tipo de problema físico. En el campito nos encargamos de curarlos y rehabilitarlos">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="estilos/estilos.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
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
			<section class="club">
				<h1 class="titulocentrado">El Club de los Disca</h1>
				<p class="textolargo textocentrado">"El club de los disca es el sector del refugio dedicado a los animales especiales, ya que requieren otros cuidados. Son perros paraliticos, ciegos, o con tres patas.</p>			
				<div class="wrapper">	
					<div class="prev-btn">
						<i class="fas fa-chevron-left"></i>
					</div>
					<div class="slides-container">
						<div class="slide">
							<div class="antesdespues">
								<div class="antesdespuestl">
									<h3 class="antes">Antes</h3>
									<h3 class="despues">Despues</h3>
								</div>
								<div class="fotosayd">
									<img class="antesimg" src="imagenes/discaantes.jpg" alt="Perro antes del campito">
									<img class="despuesimg" src="imagenes/discadespues.jpg" alt="Perro después del campito"/>
								</div>
								<p class="txayd">Este cachorro no tenia la posibilidad de poder caminar con las patas traseras pero gracias a la ayuda de la gente pudimos comprar una sila de ruedas para él</p>
							</div>
						</div>
						<div class="slide">
							<div class="antesdespues">
								<div class="antesdespuestl">
									<h3 class="antes">Antes</h3>
									<h3 class="despues">Despues</h3>
								</div>
								<div class="fotosayd">
									<img class="antesimg" src="imagenes/discaantes2.jpg" alt="Perro antes del campito">
									<img class="despuesimg" src="imagenes/discadespues2.jpg" alt="Perro después del campito"/>
								</div>
								<p class="txayd">Bronco era parte de una fábrica, donde lo atropelló un camión, dejándolo inválido.</p>
							</div>
						</div>
						<div class="slide">
							<div class="antesdespues">
								<div class="antesdespuestl">
									<h3 class="antes">Antes</h3>
									<h3 class="despues">Despues</h3>
								</div>
								<div class="fotosayd">
									<img class="antesimg" src="imagenes/discaantes3.jpg" alt="Perro antes del campito">
									<img class="despuesimg" src="imagenes/discadespues3.jpg" alt="Perro después del campito"/>
								</div>
								<p class="txayd">Juana ingresó inválida, Hace aproximadamente 4 años que es parte del Refugio.</p>
							</div>
						</div>
						<div class="slide">
							<div class="antesdespues">
								<div class="antesdespuestl">
									<h3 class="antes">Antes</h3>
									<h3 class="despues">Despues</h3>
								</div>
								<div class="fotosayd">
									<img class="antesimg" src="imagenes/discaantes4.jpg" alt="Perro antes del campito">
									<img class="despuesimg" src="imagenes/discadespues4.jpg" alt="Perro después del campito"/>
								</div>
								<p class="txayd">Poliya llegó al Refugio luego de que lo abandonaran bajó una tormenta, con secuelas de moquillo que no lo dejaban desplazarse de la forma que lo hacen los perros habitualmente.</p>
							</div>
						</div>
					</div> 
					<div class="next-btn">
						<i class="fas fa-chevron-right"></i>
					</div>
					<div class="navigation-dots"></div>
				</div>
			</section>
			<section class="txandimg">
				<img class="imgdetx" src="imagenes/perro-1-3.jpg" alt="Perros en rehabilitación">
				<div class="txdeimg">
					<h2>Conoce más del Club</h2>
					<p>Somos el único refugio del mundo que cuida 130 perros que para trasladarse necesitan carros, como las sillas de rueda, y cuidados muy especiales. Es a través de esta área que el refugio cumple un rol muy importante en la sociedad, al abrir las puertas y permitir crear nexos entre los visitantes y perritos que, a lo largo de sus vidas, enseñan desde las bases el amor y el respeto, no solo por los animales, sino tambien por las personas. Es sumamente importante saber que un animal que posee capacidades diferentes no se auto-compadece, ni tampoco sus compañeros hacen diferencias en cuanto a las mismas. Para un animal las capacidades diferentes es algo con lo que aprenden a manejarse, sin sentirse menoscabado. No tienen conciencia sobre las diferencias que pueden existir con otros animales y, por sobre todas las cosas, pueden ser plenamente felices. </p>
					<a href="voluntariad.php" class="btna btn">Quiero ser Voluntario</a>
				</div>
			</section>
		</main>
		<?php
			include "partials/footer.php";
		?>
		<script src="js/main.js"></script>
	</body>
</html>