<?php
	include_once('cabecera.html');
	include_once('menu.html');
?>

<div class="card card-J">
	<header class="card-header">
		<a href="login.php" class="float-right btn btn-outline-primary mt-1">Log in</a>
		<h4 class="card-title mt-2">Registrarse</h4>
	</header>
	<article class="card-body">
		<form action="" method="post" onsubmit="return false">
			<div class="col form-group">
				<label>Nombre:</label>
				<input type="text" class="form-control" placeholder="" required>
			</div>
			<div class="col form-group">
				<label>Apellido Paterno:</label>
				<input type="text" class="form-control" placeholder="" required>
			</div>
			<div class="col form-group">
				<label>Apellido Materno:</label>
				<input type="text" class="form-control" placeholder="">
			</div>
			<div class="col form-group">
				<label>Telefono:</label>
				<input type="text" class="form-control" placeholder="" required name="telefono" maxlength="10" size="10">
			</div>
			<div class="col form-group">
				<label>Correo Electr&oacute;nico:</label>
				<input type="email" class="form-control" placeholder="" required>
			</div>
			<div class="col form-group">
				<label>Direcci&oacute;n:</label>
				<input type="text" class="form-control" required>
			</div>
			<div class="col form-group">
				<label>Contrase&ntilde;a</label>
				<input class="form-control" type="password" required>
			</div>
			<div class="col form-group">
				<label>Confirmar Contrase&ntilde;a</label>
				<input class="form-control" type="RePassword" required>
			</div>
			<input type="submit" value="Registrar" class="btn btn-primary btn-J">
		</form>
	</article>
	<div class="border-top card-body text-center">¿Ya tiene una cuenta? <a href="login.php">Log In</a></div>
</div>

<?php
	include_once('footer.html');
?>