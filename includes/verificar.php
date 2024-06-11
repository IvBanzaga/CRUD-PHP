<?php
session_start();
if ($_POST) {
	if (empty($_SESSION["vendedor"])) {
		$_SESSION["vendedor"] = [[$_POST["nombre"], $_POST["pass"]]];
	} else {
		array_push($_SESSION["vendedor"], [$_POST["nombre"], $_POST["pass"]]);
	}
}
?>

<section class="container">
	<form action="includes/verificar_usuario.php" method="POST">
		<label class="form-control-sm">Nombre</label>
		<input type="text" name="nombre" class="form-control-sm" />
		<label class="form-control-sm">Contraseña</label>
		<input type="password" name="pass" class="form-control-sm" />
		<input type="submit" name="login" value="Acceder" class="btn btn-primary" />&nbsp &nbsp &nbsp

	</form>
</section><br><br>