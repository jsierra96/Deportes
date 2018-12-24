<?php
	include_once('cabecera.html');
	include_once('menu.html');
?>

<div class="card card-J2">
	<header class="card-header">
		<h4 class="card-title mt-2">Registro de productos</h4>
	</header>
	<article class="card-body">
		<form action="" method="post" onsubmit="return false" class="row">
			<div class="logo">
				<input id="file-input" name="file" type="file" accept="image/jpeg, image/png" required>
			</div><br><br>

			<div class="col form-group col-md-6">
				<label>Nombre del producto:</label>
				<input type="text" class="form-control" placeholder="Nombre del producto" required onkeypress="letras()">
			</div>
			<div class="col form-group col-md-6">
				<label>Tama&ntilde;o:</label>
				<input type="text" class="form-control" placeholder="Tama&ntilde;o del producto" required name="telefono">
			</div>
			<div class="col form-group col-md-6">
				<label>Precio:</label>
				<input type="text" class="form-control" placeholder="Precio del producto" required pattern="\d*.\d{2}|\d*">
			</div>
			<div class="col form-group col-md-6">
				<label>Talla:</label>
				<input type="text" class="form-control" placeholder="Talla del producto" required>
			</div>
			<div class="col form-group col-md-6">
				<label>Color:</label>
				<input type="text" class="form-control" placeholder="Color del producto" required onkeypress="letras()">
			</div>
			<div class="col form-group col-md-6">
				<label>Tipo:</label>
				<input type="text" class="form-control" placeholder="Tipo de producto" required onkeypress="letras()">
			</div>
			<div class="col form-group col-md-6">
				<label>Equipo:</label>
				<input class="form-control" placeholder="Equipo distintivo" type="text" required onkeypress="letras()">
			</div>
			<div class="col form-group col-md-6">
				<label>Disciplina:</label>
				<input class="form-control" type="text" placeholder="Disiplina" required onkeypress="letras()">
			</div>
			<div class="col form-group col-md-6">
				<label>Cantidad:</label>
				<input class="form-control beta" type="number" required onkeypress="numero()" max="10" min="0">
			</div>
			<div class="col form-group col-md-6">
				<label>G&eacute;nero:</label>
				<select class="form-control">
					<option value="Masculino">Masculino</option>
					<option value="Femenino">Femenino</option>
					<option value="boy">Ni&ntilde;o</option>
					<option value="girl">Ni&ntilde;a</option>
				</select>
			</div>
			<input type="submit" value="Agregar" class="btn btn-primary btn-J">
		</form>
	</article>
</div>

<?php
	include_once('footer.html');
?>