<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Panel de Usuario</title>
	
	<link rel="stylesheet" href="../css/panel.css">
	<link rel="stylesheet" href="../css/fuentes.css">
	<link rel="stylesheet" href="../css/animation.css">
	<link rel="stylesheet" href="../css/fontello.css">
    <script>
      function toggleCodes(on) {
       	var obj = document.getElementById('icons');
      	if (on) {
          obj.className += ' codesOn';
        }else {
          obj.className = obj.className.replace(' codesOn', '');
        }
      }
      
    </script>
    <script src="../js/jquery-2.0.0.min.js" type="text/javascript"></script>
</head>
<body>
	<section class="header">
		<h2 class="panel">Panel de Usuario</h2>
		<h2 class="titulo">SportFit</h2>
	</section>

