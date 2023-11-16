<?php
if(!isset($_GET["id_comida"])) exit();
$id_comida = $_GET["id_comida"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("DELETE FROM comida WHERE id_comida = ?;");
$resultado = $sentencia->execute([$id_comida]);
if($resultado === TRUE){
	header("Location: ./listar.php");
	exit;
}
else echo "Algo salió mal";
?>