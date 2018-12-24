<?php
	include_once('cabecera.html');
	include_once('menu.html');
?>

<div class="card card-J" name="inises">
	<article class="card-body">
		<h4 class="card-title text-center mb-4 mt-1">Iniciar sesi&oacute;n</h4>
		<hr>
		<p class="text-success text-center">Bienvenido</p>
		<form  onsubmit="return false">
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-user"></i> </span>
					</div>
					<input name="correo" class="form-control user" placeholder="Correo electronico" type="email" required>
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
					</div>
					<input class="form-control clave" placeholder="******" type="password" required name="contra">
				</div>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-block btn-J">Iniciar</button>
			</div>
			<p class="text-center"><a href="registro.php" class="btn">¿No tiene una cuenta?</a></p>
		</form>
	</article>
</div>
<script type="text/javascript" src="js/ingresa.js"></script>
<?php
	include_once('footer.html');
?>