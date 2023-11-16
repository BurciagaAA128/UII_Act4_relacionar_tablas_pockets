<?php

#Salir si alguno de los datos no está presente
if(
	!isset($_POST["nombre"]) || 
	!isset($_POST["precio"]) || 
	!isset($_POST["tamano"]) || 
	!isset($_POST["descripcion"]) || 
	!isset($_POST["categoria"]) || 
	!isset($_POST["calorias"]) || 
	!isset($_POST["foto"]) || 
	!isset($_POST["id_comida"])
) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "base_de_datos.php";
$id_comida = $_POST["id_comida"];
$nombre = $_POST["nombre"];
$precio = $_POST["precio"];
$tamano = $_POST["tamano"];
$descripcion = $_POST["descripcion"];
$categoria = $_POST["categoria"];
$calorias = $_POST["calorias"];
$foto = $_POST["foto"];

$sentencia = $base_de_datos->prepare("UPDATE comida SET nombre = ?, precio = ?, tamano = ?, descripcion = ?, categoria = ?, calorias = ?, foto = ? WHERE id_comida = ?;");
$resultado = $sentencia->execute([$nombre, $precio, $tamano, $descripcion, $categoria, $calorias, $foto, $id_comida]);

if($resultado === TRUE){
	header("Location: ./listar.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del producto";
?>