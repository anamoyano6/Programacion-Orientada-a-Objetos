<?php 

require_once("Config/config.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PRODUCTOS</title>
</head>
<body>
	<a href="<?php echo Config::$URL; ?>">HOME</a>
	<a href="productos.php">Productos</a>
	<?php 
	require_once("Libraries/libraries.php");
	$datos = array(
		array(
		"Marca"=>"Adidas",
		"Precio"=>"$40000",
		"Color"=>"Azul"),
		array(
		"Marca"=>"Nike",
		"Precio"=>"$50000",
		"Color"=>"Blancas"),
	);
	Libraries::crearTabla($datos);
	?>
</body>
</html>