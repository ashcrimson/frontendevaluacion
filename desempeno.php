<?php include "header.php";?>

	<title>Desempeño</title>
	<section>
			<div class="row">
				<div class="col-sm-6">
					<div class="barra-azul-izquierda">
					<i class="fa fa-check" aria-hidden="true"></i>Evaluado
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
					<i class="fa fa-check" aria-hidden="true"></i>Evaluación del Desempeño
					</div>
					<p style="text-align: justify; margin-left: 10px;">Puntúe al empleado utilizando la siguiente escala: 
					<ul class="lista-desempeno" style="list-style-type: none;">

<li>5 - Excelente: El empleado cumple de forma excelente el aspecto a evaluar.</li>

<li>4 - Muy bueno: El empleado cumple sobradamente el aspecto a evaluar.</li>

<li>3 - Bueno: El empleado cumple bien el aspecto a evaluar.</li>

<li>2 - Medio: El empleado cumple de forma suficiente el aspecto a evaluar.</li>

<li>1 - Pobre: El empleado no cumple suficientemente con el aspecto a evaluar.</li>
</ul></p>
				</div>
			</div>
				
				<div id="cuestionario-desempeno">
				<?php include "cuestionario-desempeno.php"?>
				</div>
				

	</section>
