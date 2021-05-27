<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario Caldera Vargas</title>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Play&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="wrap">
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
		<label for="nombre">Nombre:</label>
		<input type="text" class="form-control" name="nombre" placeholder="Ingrese su nombre" value="<?php if(!$enviado && isset($nombre)) echo $nombre ?>">
		<br>
		<label for="nombre">Correo:</label>
		<input type="text" class="form-control" name="correo" placeholder="Ingrese su correo electronico" value="<?php if(!$enviado && isset($correo)) echo $correo ?>">
		<br>
		<label for="mensaje">Mensaje:</label>
		<textarea name="mensaje" class="form-control" placeholder="Ingrese el mensaje aquí"><?php if(!$enviado && isset($mensaje)) echo $mensaje ?></textarea>
		<!--<div class="alert error">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</div>
		<div class="alert success">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</div>-->
		<br>
		

		<?php if(!empty($errores)):
		?>
		<div class="alert error">
			<?php echo $errores; ?>
		</div>

		<?php elseif($enviado): ?>
			<div class="alert success">
			<p>Enviado correctamente</p>
		</div>
		<?php endif ?>
		<input type="submit" name="submit" class="btn-primary" value="Enviar correo">

		</form>
	</div>
</body>
</html>