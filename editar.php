<?php
if(!isset($_GET["id_comida"])) exit();
$id = $_GET["id_comida"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM comida WHERE id_comida = ?;");
$sentencia->execute([$id]);
$producto = $sentencia->fetch(PDO::FETCH_OBJ);
if($producto === FALSE){
	echo "¡No existe algún producto con ese ID!";
	exit();
}

?>
<?php include_once "encabezado.php" ?>
	<div class="col-xs-12">
		<h1>Editar producto con el ID <?php echo $producto->id_comida; ?></h1>
		<form method="post" action="guardarDatosEditados.php">
			<input type="hidden" name="id_comida" value="<?php echo $producto->id_comida; ?>">
	
			<label for="nombre">Nombre</label>
			<input value="<?php echo $producto->nombre ?>" class="form-control" name="nombre" required type="text" id="nombre" placeholder="Escribe el nombre">

			<label for="precio">Precio</label>
			<input value="<?php echo $producto->precio ?>" class="form-control" name="precio" required type="number" id="precio" placeholder="Escribe el precio">

			<label for="tamano">Tamaño</label>
			<input value="<?php echo $producto->tamano ?>" class="form-control" name="tamano" required type="text" id="tamano" placeholder="Escribe el tamaño">

			<label for="descripcion">Descripcion</label>
			<input value="<?php echo $producto->descripcion ?>" class="form-control" name="descripcion" required type="text" id="descripcion" placeholder="Descripcion del producto">

			<label for="categoria">Categoria</label>
			<input value="<?php echo $producto->categoria ?>" class="form-control" name="categoria" required type="text" id="categoria" placeholder="Categoria">

			<label for="calorias">Calorias</label>
			<input value="<?php echo $producto->calorias ?>" class="form-control" name="calorias" required type="text" id="calorias" placeholder="Calorias">

			<label for="calorias">Foto</label>
			<input value="<?php echo $producto->foto ?>" class="form-control" name="foto" required type="text" id="foto" placeholder="Calorias">

			<br><br><input class="btn btn-info" type="submit" value="Guardar">
			<a class="btn btn-warning" href="./listar.php">Cancelar</a>
		</form>
	</div>
<?php include_once "pie.php" ?>
