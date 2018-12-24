    <?php 
       include 'cabecera.html';
       include 'menu.html';
    ?>
    <figure class="home">
        <img src="img/banner1.jpg">
    </figure><br><br>
        <section class=row>
        <?php include 'novedades.php';
            $aux = array_reverse($producto);
                for ($i=0; $i < 8 ; $i++) {
            ?>
            <div class="col-md-3">
                <figure class="card card-sm card-product">
                    <span class="badge-new"> NEW </span>
                    <div class="img-wrap"> <img src="<?php echo $aux[$i]->getImagen();?>"> </div>
                    <figcaption class="info-wrap">
                        <h6 class="title text-truncate t-J"><a href="#"><?php echo $aux[$i]->getNombre();?></a></h6>
                        <p class="title">Equipo: <?php echo $aux[$i]->getEquipo();?></p>
						<span class="price-new title">Precio: <?php echo "$ ".$aux[$i]->getPrecio()." MX";?></span>
                    </figcaption>
                </figure>
            </div>
            <?php
                 }
             ?>
        </section>
    <?php include 'footer.html';?>

   