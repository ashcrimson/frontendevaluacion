<?php include "header.php";?>


	<title>Mi Equipo</title>
	<section>
		<div class="row">
			<div class="col-sm-4" >
		<?php include "sidebar.php";?>
			</div>
			<div class="col-sm-8" style="background-color: white;">
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
					<i class="fa fa-check" aria-hidden="true"></i>Evaluador
					</div>
					<img class="img-circle avatar evaluadores" src="img/Construction Worker.png" alt="" style="margin-right: 20px;">
						<p class="texto-miequipo">
						 Contreras Mena, José Antonio<br>
						 99999<br>
						 Jefe de Operaciones
						</p>
				</div>
			</div>
				
				
				<div id="cuestionario">
				<?php include "cuestionario.php"?>
				</div>

			</div>
</div>
	</section>
