<?php
#Salir si alguno de los datos no está presente
if(!isset($_POST["nombre"]) || !isset($_POST["precio"]) || !isset($_POST["tamano"]) || !isset($_POST["precio"]) || !isset($_POST["categoria"]) || !isset($_POST["calorias"]) || !isset($_POST["foto"])) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "base_de_datos.php";
$nombre = $_POST["nombre"];
$precio = $_POST["precio"];
$tamano = $_POST["tamano"];
$descripcion = $_POST["descripcion"];
$categoria = $_POST["categoria"];
$calorias = $_POST["calorias"];
$foto = $_POST["foto"];

$sentencia = $base_de_datos->prepare("INSERT INTO comida(nombre, precio, tamano, descripcion, categoria, calorias, foto) VALUES (?, ?, ?, ?, ?, ?, ?);");
$resultado = $sentencia->execute([$nombre, $precio, $tamano, $descripcion, $categoria, $calorias, $foto]);

if($resultado === TRUE){
	header("Location: ./listar.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista";


?>
<?php include_once "pie.php" ?>