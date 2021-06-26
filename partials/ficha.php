<div class="modalperro modal">
    <div class="modal-content">  			 
        <span class="closead">&times;</span>
        <h1>Akmaru</h1> 	
        <div class="ficha">  
            <img src="imagenes/perro1.jpg" alt="fotopersonaperro" class="mimifoto"/>
             <div class="inscripcion" >
                <div>
                    <p><strong>Sexo:</strong> Macho</p>	
                    <p><strong>Edad:</strong> Adulto</p>	
                    <p><strong>Tamaño:</strong> Mediano</p>	
                    <p><strong>Raza:</strong> Mestizo</p>	
                    <p><strong>Carácter:</strong> Dulce, cariñoso, tranquilo.</p>	
                </div>
                <form action= "enviarMail.php" method= "post">
					<div class="contacto1">
						<div class=formcontacto1>
							<input class="input_100" type="text" name="nombre" placeholder="Nombre" required>
                            <input class="input_100" type="email" name="email" placeholder="Email" required email>
                            <textarea class="input_100" id="pregunta" type="paragraph" name="pregunta" placeholder="Cuentanos de vos"></textarea>
						</div>
                    </div>
                    <input class="btn btnrelleno centrado" type="submit" value="Quiero adoptarlo">
                </form>
                <a href="apadrinar.php"><button class="btn btnrelleno">Apadrinar</button></a>
            </div>
        </div>
        <div class="fichamas">
            <h3>Información Adicional</h4>
            <div class="ficha fichados">
                <div>
                    <img src="imagenes/ficha-relacion.svg" alt="fotopersonaperro" class="icono"/>
                    <p>Se lleva bien con otros perros</p>
                </div>
                <div>
                    <img src="imagenes/ficha-bebes.svg" alt="fotopersonaperro" class="icono"/>
                    <p>Se lleva bien con niños pequeños</p>
                </div>
                <div>
                    <img src="imagenes/ficha-cuidados.svg" alt="fotopersonaperro" class="icono"/>
                    <p>Necesita cuidados especiales</p>
                </div>
                <div>
                    <img src="imagenes/ficha-disca.svg" alt="fotopersonaperro" class="icono"/>
                    <p>Perro con una discapacidad</p>
                </div>
            </div>
        </div>
    </div>
</div>