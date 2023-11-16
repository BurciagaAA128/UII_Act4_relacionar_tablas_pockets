<?php
if (!isset($_POST["id_comida"])) {
    return;
}

$id_comida = $_POST["id_comida"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM comida WHERE id_comida = ? LIMIT 1;");
$sentencia->execute([$id_comida]);
$producto = $sentencia->fetch(PDO::FETCH_OBJ);
# Si no existe, salimos y lo indicamos
if (!$producto) {
    header("Location: ./vender.php?status=4");
    exit;
}

session_start();
# Buscar producto dentro del cartito
$indice = false;
for ($i = 0; $i < count($_SESSION["carrito"]); $i++) {
    if ($_SESSION["carrito"][$i]->id_comida == $id_comida) {
        $indice = $i;
        break;
    }
}
# Si no existe, lo agregamos como nuevo
if ($indice === false) {
    $producto->cantidad = 1;
    $producto->total = $producto->precio;
    array_push($_SESSION["carrito"], $producto);
} else {
    # Si ya existe, se agrega la cantidad
    # Pero espera, tal vez ya no haya
    # si al sumarle uno supera lo que existe, no se agrega
   
    $_SESSION["carrito"][$indice]->cantidad++;
    $_SESSION["carrito"][$indice]->total = $_SESSION["carrito"][$indice]->cantidad * $_SESSION["carrito"][$indice]->precio;
}
header("Location: ./vender.php");
