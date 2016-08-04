<div class="container">
<header>
 <?php include "header.php";?>
</header>
<section>
		<div class="row">
			<div class="col-sm-8">
				<img src="img/office-people.jpg" class="img-rounded" alt="">
			</div>
			<div class="col-sm-4">
				<aside>
					<p><b>Ingrese su Rut</b><br>
					(sin guión ni dígito verificador)</p>
					<form role="form" id="formulario-login">
						<input type="text" class="form-control"> 
						<input type="text" class="form-control">
						<button type="submit" class="btn btn-primary">Entrar</button>
					</form>
					<div class="clearfix"></div>
					<p class="formulario-info">Por ejemplo, si su RUT es 12134567-8<br> 
					debe ingresar 12345678</p>
				</aside>
			</div>
		</div>
</section>
<footer>
	<?php include "footer.php";?>
</footer>
</div>
</body>
</html>