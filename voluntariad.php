<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>El Campito Refugio - Voluntariado</title>
        <meta name="description" content="Podes ser parte del campito refugio como voluntariado, enterate como y para qué">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="estilos/estilos.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
	</head>
	<body class="bdvoluntariado">		
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
							<img src="imagenes/hd-vl-1.png" alt="Perro sentado"/>
							<h4>Ellos están esperando<br>a que vengas</h4>
						</div>
						<div class="slide">
                            <img src="imagenes/hd-vl-2.png" alt="Perro con estetoscopio"/>
							<h4>No solo los humanos<br>necesitan un doctor</h4>
						</div>
						<div class="slide">
							<img src="imagenes/hd-vl-3.png" alt="Perro mirando"/>
							<h4>Los mejores pacientes<br>están aquí</h4>
						</div>
					</div> 
					<div class="next-btn">
						<i class="fas fa-chevron-right"></i>
					</div>
					<div class="navigation-dots">
					</div>
				</div>
			</section>
			<section class="voluntariado">
                <div class="voluntariado-intro">
                    <h1>Voluntariado</h1>
                    <p class="textolargo">Para que puedas integrarte, hemos creado un espacio formativo permanente que nos ayude a potenciar la participación real y efectiva de aquellos que deseen dejar de ser visitantes para convertirse en voluntarios de nuestra ONG.</p>
                </div>
                <div class="superposicion">
                    <img src="imagenes/voluntariado-intro.png" alt="Persona rodeada de perros"/>
                    <div class="superposiciontx">
                        <h3>¿En qué consiste?</h3>
                        <p>Más de150 voluntarios trabajan en nuestro Refugio proveyendo compañía, estímulo y ejercicio a nuestros animales, brindando su trabajo en caniles, enfermería, página web, colectas, reeducación y sociabilización de animales con problemas de conducta, evaluando adoptantes, efectuando traslados y rescates, trabajando en jornadas y asistiendo a colegios para concientizar, dando la bienvenida y asistiendo a nuestros visitantes. Vos podes ser uno de ellos!</p>
                    </div>					
                </div>
            </section>
            <section class="requisitos-vl">
                <h2>Requisitos para Aplicar</h2>
                <div class="tips-rq-vl">
                    <div class="rq-vl">
                        <img src="imagenes/calendar-vl.svg" alt="Calendario"/>
                        <h3>Mínimo de 6 meses de disponibilidad</h3>
                    </div>	
                    <div class="rq-vl">
                        <img src="imagenes/cursos-vl.svg" alt="Persona leyendo"/>
                        <h3>Tomar los cursos dados por el Campito</h3>
                    </div>	
                    <div class="rq-vl">
                        <img src="imagenes/dispuesto-vl.svg" alt="Persona barriendo"/>
                        <h3>Estar dispusto a hacer cualquier tarea asignada</h3>
                    </div>	
                    <div class="rq-vl">
                        <img src="imagenes/pasion-vl.svg" alt="Corazón"/>
                        <h3>Y claramente, pasión por los perros</h3>
                    </div>					
                </div>
                <p>No todos los que se anoten alcanzarán la categoría de voluntario, pues se elegirán para tareas especíﬁcas y la cantidad de los mismos será determinada por la naturaleza de las tareas a desarrollar. El proceso de selección será largo y competitivo.</p>
            </section>
            <section class="inscribirse">
                <form action= "voluntariadoMail.php" method= "post" class="inscripcion" >
                    <h2>Inscribite a esta<br>hermosa aventura</h2>
                    <div class="vl-datos">
                        <input class="input_100" type="text" name="nombre" placeholder="Nombre"required>
                        <input class="input_100" type="number" name="edad" placeholder="Edad" required>
                    </div>	
                    <div class="vl-datos">
                        <input class="input_100" type="email" name="email" placeholder="Email" required email>
                        <input class="input_100" type="tel" name="celular" placeholder="Celular" required>
                    </div>	
                    <div>
                        <p>Contanos por qué querés se voluntario</p>
                        <textarea class="input_100" id="razon" type="paragraph" rows="7" name="razon"></textarea>
                    </div>
                    <input class="btn btnrelleno centrado" type="submit" value="Enviar">
                </form>					
                <img src="imagenes/datos-vl.jpg" alt="Perro siendo curado"/>
			</section>
		</main>
		<?php
			include "partials/footer.php";
		?>
		<script src="js/main.js"></script>	
	</body>
</html>