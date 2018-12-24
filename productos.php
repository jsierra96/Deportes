<?php 
	include 'cabecera.html';
	include 'menu.html';
?>
	<section class="filtro">
		<h2>Filtrar productor por:</h2>
		<hr>
		<header>
			<h5>--- Disciplina ---</h5>
		</header>
		<div class="filtrado">
			<?php
		$genero = $_GET['cat'];
		$dis1 = "cat=".$genero."&opcion=Futbol";
		$dis2 = "cat=".$genero."&opcion=Beisbol";
		$dis3 = "cat=".$genero."&opcion=Baloncesto";
		?>
			<button class="btn-JF" onClick="ActualizaPro('<?php echo $dis1;?>','disciplina');">Futbol</button><br>
			<button class="btn-JF" onClick="ActualizaPro('<?php echo $dis2;?>','disciplina');">Beisbol</button><br>
			<button class="btn-JF" onClick="ActualizaPro('<?php echo $dis3;?>','disciplina');">Baloncesto</button>
		</div>
		<header>
			<h5>--- Equipo ---</h5>
			<form action="" method="get" onsubmit="return false" name="formu">
				<input class="form-control f" type="text" name="equi" id="equi" placeholder="Buscar por equipo">
				<br>
				<input class="btn btn-warning btn-J" type="submit" value="Filtrar" onClick="ActualizaPro('cat=<?php echo $genero;?>','equipo')">
			</form>
		</header>
	</section>
	<section class="main">
		<article class="row-sm" id="producto">
			<?php
		if(!$error){
			for($i = 0; $i<count($sProduc);$i++){
		?>
			<div class="col-md-3 col-sm-6">
				<figure class="card card-product">
					<div class="img-wrap"> <img src="<?php echo $sProduc[$i]->getImagen();?>"></div>
					<figcaption class="info-wrap">
						<a href="detallesProducto.php?clv=<?php echo $sProduc[$i]->getClave();?>" class="title t-J ">
							<?php echo $sProduc[$i]->getNombre();?></a>
						<p class="title">Talla:
							<?php echo $sProduc[$i]->getTalla();?>
						</p>
						<p class="title">Equipo:
							<?php echo $sProduc[$i]->getEquipo();?>
						</p>
						<span class="title">Precio:
							<?php echo "$".$sProduc[$i]->getPrecio()." MX";?></span>
					</figcaption>
				</figure> <!-- card // -->
			</div>
			<?php
			}
		}else{
			echo "<div class='error'><h2>No se encontraron productos</h2></div>";
		}
		?>
		</article>
	</section>

<script src="js/productos.js"></script>
<?php include 'footer.html'?>