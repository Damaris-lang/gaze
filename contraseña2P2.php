<!DOCTYPE html>
<html>
<head>
	<title>contraseña_usuario</title>
	<link rel="stylesheet" type="text/css" href="decoracion.css">
</head>
<body bgcolor="seagreen">
<br>
<br>
<h1 class="dec">
<?php
	$cc="secreto123";
	$ci="secreto123";
	$uc="lector22";
	$ui="lector22";

	do {
		if ($ci==$cc && $ui==$uc) {
			echo "Contraseña y usuario correctos !!Acceso concedido!!" . "<br>";
		} else {
			echo "La contraseña o el usuario son incorrectos" . "<br>";
			break;
		}
	} while ($ci<>$cc);
?>
</h1>
</body>
</html>