<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>El Campito Refugio - Adoptá</title>
        <meta name="description" content="Mirá todos los perritos que tenemos en nuestro predio disponibles para adopción y ser amados">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="estilos/estilos.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
	</head>
	<body class="bdtransparente">		
		<?php
			include "partials/header.php";
		?>
		<main>
            <section>
                <h1>Ellos te necesitan<br>No compres, adoptá</h1>
                <div class="txandimg">
                    <div class="txdeimg">
                        <p>¿Por qué adoptar en vez de comprar? Porque adoptando estás salvando la vida de un animal rescatado. Cada perro adoptado deja su lugar para que ingrese otro y pueda ser recuperado en el refugio. Adoptar es un acto de amor y de responsabilidad, por eso es necesario estar completamente seguros de que estamos capacitados y listos para tener un perro. Un animal de compañía dependerá toda su vida de nosotros. Recordá que un perro puede vivir entre 15 y 20 años y estás asumiendo un compromiso serio por todo ese tiempo.</p>
                        <button class="btn btnrelleno btnlargo" id="myBtn">Conocer los requisitos</button>
                        <div id="myModal" class="modal">
                            <div class="modal-content"> 
                                <span class="close">&times;</span>
                                <h2>Requisitos para Adoptar</h2>  
                                <div class="lista">
                                    <ul>
                                        <li>Es requisito excluyente ser mayor de 21 años</li>
                                        <li>Las adopciones se tratan solamente con el adoptante final (no mediante terceros)</li>
                                        <li>No damos en adopción cachorritos de menos de 5 meses cuando hay niños menores a 6 años en la casa</li>
                                    </ul>
                                </div>
                                <div class="lista pasos">
                                    <h3>Pasos a seguir:</h3>
                                    <ul>
                                        <li>Enviamos un cuestionario de pre-adopción para ser completado por el interesado al solicitar la adopción</li>
                                        <li>Hacemos una visita al domicilio para conocer a la familia y constatar las condiciones en que vivirá nuestro camperito</li>
                                        <li>En caso de aprobar la adopción, solicitamos los datos del adoptante, de su veterinario de confianza y el telefono y dirección de cuatro familiares</li>
                                        <li>El adoptante deberá encargar la chapita identificatoria para el animal incluyendo nuestro teléfono</li>
                                        <li>Luego coordinamos el traslado del adoptado a su hogar, donde se firma el Contrato de Adopción</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img class="imgdetx" src="imagenes/adopta-ad.jpg" alt="Hombre abrazando a un perro">
                </div>				
			</section>
            <section>
			    <h2>Conocelos</h2>
				<div class=detalles1>
                    <select name="edad">
                        <option value="" disabled selected hidden>Edad</option>
                        <option value="1">Cachorro</option>
                        <option value="2">Adulto</option>
                    </select>
                    <select name="tamaño">
                        <option value="" disabled selected hidden>Tamaño</option>
                        <option value="1">Pequeño</option>
                        <option value="2">Mediano</option>
                        <option value="3">Grande</option>
                    </select>
                    <select name="sexo">
                        <option value="" disabled selected hidden>Sexo</option>
                        <option value="1">Macho</option>
                        <option value="2">Hembra</option>
                    </select>
                    <select name="compatible">
                        <option value="" disabled selected hidden>Compatible con</option>
                        <option value="1">Bebés</option>
                        <option value="2">Gatos</option>
                        <option value="3">Otros Perros</option>
                    </select>
				</div>
			    <div class="adoptar">
                    <div class="perroad">
                        <img class="fichaperro" src="imagenes/perro1.jpg" alt="Akamaru">
                        <h3>Akamaru</h3>
                        <p>Edad: 5</p>
                        <p>Tamaño: Mediano</p>
                        <?php
			                include "partials/ficha.php";
		                ?>
                    </div>
                    <div class="perroad">
                        <img class="fichaperro" src="imagenes/perro2.jpg" alt="André">
                        <h3>André</h3>
                        <p>Edad: 2</p>
                        <p>Tamaño: Mediano</p>
                        <?php
			                include "partials/ficha.php";
		                ?>
                    </div>
                    <div class="perroad">
                        <img class="fichaperro" src="imagenes/perro3.jpg" alt="Bala">
                        <h3>Bala</h3>
                        <p>Edad: 5</p>
                        <p>Tamaño: Mediano</p>
                        <?php
			                include "partials/ficha.php";
		                ?>
                    </div>
                    <div class="perroad">
                        <img class="fichaperro" src="imagenes/perro4.jpg" alt="Blanquito">
                        <h3>Blanquito</h3>
                        <p>Edad: 7</p>
                        <p>Tamaño: Mediano</p>
                        <?php
			                include "partials/ficha.php";
		                ?>
                    </div>		
                </div>
                <div class="adoptar">
                    <div class="perroad">
                        <img class="fichaperro" src="imagenes/perro5.jpg" alt="Dulce">
                        <h3>Dulce</h3>
                        <p>Edad: 6</p>
                        <p>Tamaño: Chico</p>
                        <?php
			                include "partials/ficha.php";
		                ?>
                    </div>
                    <div class="perroad">
                        <img class="fichaperro" src="imagenes/perro6.jpg" alt="Fito">
                        <h3>Fito</h3>
                        <p>Edad: 2</p>
                        <p>Tamaño: Mediano</p>
                        <?php
			                include "partials/ficha.php";
		                ?>
                    </div>
                    <div class="perroad">
                        <img class="fichaperro" src="imagenes/perro7.jpg" alt="Fleko">
                        <h3>Fleko</h3>
                        <p>Edad: 4</p>
                        <p>Tamaño: Mediano</p>
                        <?php
			                include "partials/ficha.php";
		                ?>
                    </div>
                    <div class="perroad">
                        <img class="fichaperro" src="imagenes/perro8.jpg" alt="Hund">
                        <h3>Hund</h3>
                        <p>Edad: 7</p>
                        <p>Tamaño: Mediano</p>
                        <?php
			                include "partials/ficha.php";
		                ?>
                    </div>		
                </div>
                <div class="adoptar">
                    <div class="perroad">
                        <img class="fichaperro" src="imagenes/perro9.jpg" alt="Isadora">
                        <h3>Isadora</h3>
                        <p>Edad: 5</p>
                        <p>Tamaño: Chico</p>
                        <?php
			                include "partials/ficha.php";
		                ?>
                    </div>
                    <div class="perroad">
                        <img class="fichaperro" src="imagenes/perro10.jpg" alt="Mimi">
                        <h3>Mimi</h3>
                        <p>Edad: 2</p>
                        <p>Tamaño: Mediano</p>
                        <?php
			                include "partials/ficha.php";
		                ?>
                    </div>
                    <div class="perroad">
                        <img class="fichaperro" src="imagenes/perro11.jpg" alt="Mireya">
                        <h3>Mireya</h3>
                        <p>Edad: 10</p>
                        <p>Tamaño: Mediano</p>
                        <?php
			                include "partials/ficha.php";
		                ?>
                    </div>
                    <div class="perroad">
                        <img class="fichaperro" src="imagenes/perro12.jpg" alt="Lady">
                        <h3>Lady</h3>
                        <p>Edad: 7</p>
                        <p>Tamaño: Mediano</p>
                        <?php
			                include "partials/ficha.php";
		                ?>
                    </div>		
                </div>
                <div class="adoptar">
                    <div class="perroad">
                        <img class="fichaperro" src="imagenes/perro13.jpg" alt="Firu">
                        <h3>Firu</h3>
                        <p>Edad: 7</p>
                        <p>Tamaño: Chico</p>
                        <?php
			                include "partials/ficha.php";
		                ?>
                    </div>
                    <div class="perroad">
                        <img class="fichaperro" src="imagenes/perro14.jpg" alt="Saja">
                        <h3>Saja</h3>
                        <p>Edad: 2</p>
                        <p>Tamaño: Mediano</p>
                        <?php
			                include "partials/ficha.php";
		                ?>
                    </div>
                    <div class="perroad">
                        <img class="fichaperro" src="imagenes/perro15.jpg" alt="Wally">
                        <h3>Wally</h3>
                        <p>Edad: 9</p>
                        <p>Tamaño: Mediano</p>
                        <?php
			                include "partials/ficha.php";
		                ?>
                    </div>
                    <div class="perroad">
                        <img class="fichaperro" src="imagenes/perro2.jpg" alt="Zeus">
                        <h3>Zeus</h3>
                        <p>Edad: 7</p>
                        <p>Tamaño: Mediano</p>
                        <?php
			                include "partials/ficha.php";
		                ?>
                    </div>		
                </div>
            </section>		
		</main>
		<?php
			include "partials/footer.php";
		?>
        <script src="js/FichaConocelosRequisitos.js"></script>
        <script src="js/FichaAdoptar.js"></script>		
	</body>
</html>