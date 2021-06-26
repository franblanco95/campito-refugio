<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>El Campito Refugio - Donar</title>
        <meta name="description" content="El campito refugio tiene muchos gastos y necesita de tus donaciones, ayudanos. Tenemos diversos métodos de pago para tu donación">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="estilos/estilos.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
	</head>
	<body class="bddonar">		
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
							<img src="imagenes/hd-donar-1.png" alt="Mirada de perro"/>
							<h4>Hola<br>¿Nos ayudas?</h4>
						</div>
						<div class="slide">
                            <img src="imagenes/hd-donar-2.png" alt="Perro viejito"/>
							<h4>A los perros viejitos<br>no nos cubre el pami</h4>
						</div>
						<div class="slide">
							<img src="imagenes/hd-donar-3.png" alt="Perro acostado"/>
							<h4>Acá, esperando a que<br>lleguen mis medicinas</h4>
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
                    <h1>Donar</h1>
                    <p class="textolargo">El Campito Refugio es una ONG con sus balances al día.<br>Nuestra cuenta bancaria está auditada a nombre del refugio por lo cual cada donación es rendida.</p>
                </div>
                <div class="superposicion">
                    <img src="imagenes/donar.png" alt="Perro en silla de ruedas"/>
                    <div class="superposiciontx donarsp">
                        <h3>¡Gracias!</h3>
                        <p>El dinero nos puede ayudar a conseguir más medicamentos y prótesis para los camperitos</p>
                    </div>					
                </div>
            </section>
            <section class="requisitos-vl">
                <h3>Click para seleccionar método de pago</h3>
                <div class="tips-rq-vl">
                <div class="rq-vl">  
                        <img class="banco" src="imagenes/dn-cuenta.svg" alt="Cuenta Bancaria"/>
                        <h3>Cuenta bancaria</h3>
                        <?php
			                include "partials/banco.php";
		                ?>
                    </div>
                    <div class="rq-vl">
                        <a href="https://www.donaronline.org/refugio-el-campito/colabore-con-el-refugio-el-campito">    
                            <img src="imagenes/dn-visa.svg" alt="Visa"/>
                        </a>
                        <h3>Visa</h3>
                    </div>	
                    <div class="rq-vl">
                        <a href="https://checkout.payulatam.com/ppp-web-gateway-payu/app/v2?k=b2199da17127d92f5cc4cfb507456014#/ar/buyer">    
                            <img src="imagenes/dn-dineromail.svg" alt="Dinero Mail"/>
                        </a>
                        <h3>Dinero Mail</h3>
                    </div>	
                    <div class="rq-vl">
                        <a href="https://www.paypal.com/donate?token=Fmh6X7vYeNwB4nrri5F5V45h2cAxf42Vjnw-soTeUYnokNin2hA7Mf_HcJ1pndGLBC5tC4B5sJzqSobb">
                            <img src="imagenes/dn-paypal.svg" alt="PayPal"/>
                        </a>
                        <h3>PayPal</h3>
                    </div>					
                </div>
                <p>Gracias por tu colaboración</p>
            </section>
		</main>
		<?php
			include "partials/footer.php";
		?>
		<script src="js/main.js"></script>
		<script src="js/banco.js"></script>
	</body>
</html>