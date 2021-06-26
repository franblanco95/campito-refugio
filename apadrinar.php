<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>El Campito Refugio - Apadrinar</title>
        <meta name="description" content="No necesariamente tenés que adoptar, podes apadrinar a un perro haciéndote cargo de alguno de sus gastos mientras se encuentra un hogar en el campito">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="estilos/estilos.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
	</head>
	<body class="bdapadrinar">		
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
							<img src="imagenes/hd-apadrinar-1.png" alt="3 Cachorros"/>
							<h4>La lealtar de un perro<br>no conoce límites</h4>
						</div>
						<div class="slide">
                            <img src="imagenes/hd-apadrinar-2.png" alt="Perro sacando la lengua"/>
							<h4>Nada más divertido que<br>pasar tiempo con tu fiel canino</h4>
						</div>
						<div class="slide">
							<img src="imagenes/hd-apadrinar-3.png" alt="Perro escuchando música"/>
							<h4>Los perros no siempre<br>son distintos a los humanos</h4>
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
                    <h1>Apadrinar</h1>
                    <p class="textolargo">Quizás no puedas adoptar por diferentes razones, pero podes apadrinarlos y ayudarnos con los costos para que el camperito pueda estar saludable hasta que lo adopte una familia que los pueda sustentar.</p>
                </div>
                <div class="txandimg">
                    <div class="txdeimg">
                        <h3>Aportá para conseguirles:</h3>
                        <div class="aportar">
                            <div class="aportar1">
                                <img src="imagenes/apd-comida.svg" alt="Visa"/>
                                <h3>Comida</h3>
                            </div>
                            <div class="aportar1">
                                <img src="imagenes/apd-meds.svg" alt="Visa"/>
                                <h3>Medicinas</h3>
                            </div>
                        </div>
                    </div>
                    <img class="imgdetx" src="imagenes/principio-apd.png" alt="2 Perros en silla de ruedas">				
                </div>
            </section>
            <section class="requisitos-vl">
                <h3>Puedes también ayudarnos mediante</h3>
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
                <p>Mandá un mail a madrinasdelcampito@gmail.com para avisar<br>de tu aporte y el medio por el cual lo hiciste.</p>
            </section>
		</main>
		<?php
			include "partials/footer.php";
		?>
        <script src="js/main.js"></script>
        <script src="js/banco.js"></script>
		
	</body>
</html>