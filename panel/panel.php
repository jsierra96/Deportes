<?php
	session_start();
	include('../modelo/Usuario.php');
	$user = unserialize($_SESSION['user']);
	include 'cabecera.php';
	$prueba = $user->getNombre();
?>
	<section class="container">
		<?php
			include 'aside.php';
		?>
		<section class="main">
			
		</section>
	</section>

</body>
</html>