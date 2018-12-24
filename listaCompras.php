<?php
	include_once('cabecera.html');
	include_once('menu.html');
?>
<section class="section-content bg padding-y border-top">
	<div class="container">
		<div class="row">
			<main class="col-sm-9">
				<div class="card">
					<table class="table table-hover shopping-cart-wrap">
						<thead class="text-muted">
							<tr>
								<th scope="col">Producto</th>
								<th scope="col" width="120">Cantidad</th>
								<th scope="col" width="120">Precio</th>
								<th scope="col" class="text-right" width="200">Acci&oacute;n</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<figure class="media">
										<div class="img-wrap"><img src="img/productos/prod1camisaBarcelona.jpg" class="img-thumbnail img-sm"></div>
										<figcaption class="media-body">
											<h6 class="title text-truncate">Playera oficial</h6>
											<dl class="dlist-inline small">
												<dt>Tama&ntilde;o:</dt>
												<dd> Mediana </dd>
											</dl>
											<dl class="dlist-inline small">
												<dt>Color: </dt>
												<dd>Azul</dd>
											</dl>
										</figcaption>
									</figure>
								</td>
								<td>
									<select class="form-control">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
									</select>
								</td>
								<td>
									<div class="price-wrap">
										<var class="price">$800 MX</var>
										<small class="text-muted">Cada Pieza</small>
									</div> <!-- price-wrap .// -->
								</td>
								<td class="text-right">
									<a href="" class="btn btn-outline-danger"> × Remover</a>
								</td>
							</tr>
							<tr>
								<td>
									<figure class="media">
										<div class="img-wrap"><img src="img/productos/prod2balonazulnike.jpg" class="img-thumbnail img-sm"></div>
										<figcaption class="media-body">
											<h6 class="title text-truncate">Bal&oacute;n Futbol </h6>
											<dl class="dlist-inline small">
												<dt>Tama&ntilde;: </dt>
												<dd> No. 5</dd>
											</dl>
											<dl class="dlist-inline small">
												<dt>Color: </dt>
												<dd>Azul</dd>
											</dl>
										</figcaption>
									</figure>
								</td>
								<td>
									<select class="form-control">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
									</select>
								</td>
								<td>
									<div class="price-wrap">
										<var class="price">$450 MX</var>
										<small class="text-muted">por cada pieza</small>
									</div> <!-- price-wrap .// -->
								</td>
								<td class="text-right">
									<a href="" class="btn btn-outline-danger btn-round"> × Remover</a>
								</td>
							</tr>
							<tr>
								<td>
									<figure class="media">
										<div class="img-wrap"><img src="img/productos/prod5camisaentrenamiento.jpg" class="img-thumbnail img-sm"></div>
										<figcaption class="media-body">
											<h6 class="title text-truncate">Product name goes here </h6>
											<dl class="dlist-inline small">
												<dt>Size: </dt>
												<dd>XXL</dd>
											</dl>
											<dl class="dlist-inline small">
												<dt>Color: </dt>
												<dd>Orange color</dd>
											</dl>
										</figcaption>
									</figure>
								</td>
								<td>
									<select class="form-control">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
									</select>
								</td>
								<td>
									<div class="price-wrap">
										<var class="price">$250 MX</var>
										<small class="text-muted">cada pieza</small>
									</div> <!-- price-wrap .// -->
								</td>
								<td class="text-right">
									<a href="" class="btn btn-outline-danger btn-round"> × Remover</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div> <!-- card.// -->

			</main> <!-- col.// -->
			<aside class="col-sm-3">
				<p class="alert alert-success">Compras por arriba de los $ 1000 mx, el env&iacute;o es gratuito.</p>

				<dl class="dlist-align h4">
					<dt>Total:</dt>
					<dd class="text-right"><strong>$1,500 MX</strong></dd>
				</dl>
				<dl>
					<button type="submit" class="btn btn-primary btn-J">Comprar</button>
				</dl>
				<hr>
				<figure class="itemside mb-3">
					<aside class="aside"><img src="images/icons/pay-visa.png"></aside>
					<div class="text-wrap small text-muted">
						Pay 84.78 AED ( Save 14.97 AED )
						By using ADCB Cards
					</div>
				</figure>
				<figure class="itemside mb-3">
					<aside class="aside"> <img src="images/icons/pay-mastercard.png"> </aside>
					<div class="text-wrap small text-muted">
						Pay by MasterCard and Save 40%. <br>

					</div>
				</figure>

			</aside> <!-- col.// -->
		</div>

	</div> <!-- container .//  -->
</section>
<?php
	include_once('footer.html');
?>