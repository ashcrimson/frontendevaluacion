<?php include "header.php";?>

	<title>Clima</title>
	<section>
			<div class="row">
				<div class="col-sm-6">
					<div class="barra-azul-izquierda">
					<i class="fa fa-check" aria-hidden="true"></i>Encuestado
					</div>
					<img class="img-circle avatar evaluadores" src="img/1423230010_702583_1423230796_noticia_normal.jpg" alt="" style="margin-right: 20px;">
						<p class="texto-miequipo">
						 Jean Claude Van Damme<br>
						 99999<br>
						 Asistente de documentación
						</p>
				</div>
				<div class="col-sm-6">
					<div class="barra-azul-izquierda">
					<i class="fa fa-check" aria-hidden="true"></i>Encuesta Clima Laboral
					</div>
					<p style="text-align: justify; margin-left: 10px;">Por favor, dedique unos minutos a completar esta encuesta, la información que nos proporcione será utilizada para evaluar el nivel de satisfacción general de nuestros empleados con la empresa.

					Sus respuestas serán tratadas de forma CONFIDENCIAL Y ANÓNIMA y no serán utilizadas para ningún propósito distinto al de ayudarnos a mejorar.

					Esta encuesta dura aproximadamente 10 minutos.</p>
				</div>
			</div>
				
				<div id="cuestionario-clima">
				<?php include "cuestionario-clima.php"?>
				</div>
				

	</section>
