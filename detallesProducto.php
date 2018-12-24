<?php
	include_once('cabecera.html');
	include_once('menu.html');
	include_once("modelo/producto.php");
	if(isset($_GET['clv']) && !empty($_GET['clv'])){
		$oProducto = new producto();
		$id= $_GET['clv'];
		$Detalle = $oProducto->buscarClave($id);
		//print_r($Detalle);
		if($Detalle){
			?>
<section class="section-content bg padding-y-sm">
	<div class="container ">
		<div class="row ">
			<div class="col-xl-10 col-md-9 col-sm-12 m4">
				<main class="card">
					<div class="row no-gutters">
						<aside class="col-sm-6 border-right">
							<article class="gallery-wrap">
								<div class="img-big-wrap">
									<div> <a href="<?php echo $Detalle->getImagen();?>" data-fancybox=""><img src="<?php echo $Detalle->getImagen();?>"></a></div>
								</div>
							</article>
						</aside>
						<aside class="col-sm-6">
							<article class="card-body">
								<h3 class="title mb-3">
									<?php echo $Detalle->getNombre();?>
								</h3>
								<div class="mb-3">
									<var class="price h3 text-warning">
										<span class="currency">$</span><span class="num">
											<?php echo $Detalle->getPrecio();?></span>
										<span class="currency">MX</span>
									</var>
								</div>
								<dl class="row">
									<dt class="col-sm-3">Tipo:</dt>
									<dd class="col-sm-9">
										<?php echo $Detalle->getTipo();?>
									</dd>
									<dt class="col-sm-3">Color:</dt>
									<dd class="col-sm-9">
										<?php echo $Detalle->getColor();?>
									</dd>
									<dt class="col-sm-3">Talla:</dt>
									<dd class="col-sm-9">
										<?php echo $Detalle->getTalla();?>
									</dd>
									<dt class="col-sm-3">Equipo:</dt>
									<dd class="col-sm-9">
										<?php echo $Detalle->getEquipo();?>
									</dd>
									<dt class="col-sm-3">Deporte:</dt>
									<dd class="col-sm-9">
										<?php echo $Detalle->getDisiplina();?>
									</dd>
								</dl>
								<hr>
								<a href="#" class="btn  btn-outline-warning btn-J"> Comprar </a>
							</article>
						</aside>
					</div>
				</main>
			</div>
		</div>
	</div>
</section>
<?php
		}else{
			echo "<div class='error'><h2>Se ha producido un error inesperado</h2></div>";
		}
	}else{
		header("Location: index.php");
	}
?>



<?php
	include_once('footer.html');
?>