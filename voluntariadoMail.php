<?php

	if (isset($_POST['nombre'])) {

		$contenido = '
        <p><b>Nombre: </b>'. $_POST['nombre'] .'<br><br></p>
        <p><b>Edad: </b>'. $_POST['edad'] .'<br><br></p>
        <p><b>Celular: </b>'. $_POST['celular'] .'<br><br></p>
        <p><b>Email: </b>'. $_POST['email'] .'<br><br></p>
        <p><b>Razón: </b>'. $_POST['razon'] .'<br><br></p>
		';
		$header = "From: ". $_POST['email'] ."\nReply-To:". $_POST['email'] ."\n";
		$header .= "Mime-Version: 1.0\n";
		$header .= "Content-type: text/html; charset=utf-8\r\n";

		$asunto = "Consulta desde la web";

		if( mail ("antobine@gmail.com", $asunto , $contenido , $header )){
			header('Location:gracias.php');
		}else{
			echo "<h1>Error al enviar el mail</h1>";
		}
	}


?>