<?php include_once "encabezado.php" ?>

<div class="col-xs-12">
	<h1>Nueva comida</h1>
	<form method="post" action="nuevo.php">
		<label for="codigo">Nombre</label>
		<input class="form-control" name="nombre" required type="text" id="nombre" placeholder="Escribe el nombre">

		<label for="descripcion">Precio</label>
		<input class="form-control" name="precio" required type="number" id="precio" placeholder="Escribe el precio">

		<label for="precioVenta">Tamaño</label>
		<input class="form-control" name="tamano" required type="text" id="tamano" placeholder="Tamaño del producto">

		<label for="precioCompra">Descripcion</label>
		<input class="form-control" name="descripcion" required type="text" id="descripcion" placeholder="Descripcion del producto">

		<label for="existencia">Categoría</label>
		<input class="form-control" name="categoria" required type="text" id="categoria" placeholder="Cantidad o existencia">
		
		<label for="descripcion">Calorías</label>
		<input class="form-control" name="calorias" required type="text" id="calorias" placeholder="Escribe las calorías">

		<label for="descripcion">Foto</label>
		<input class="form-control" name="foto" required type="text" id="foto" placeholder="Ingresa la direccion de la foto">


		<br><br><input class="btn btn-info" type="submit" value="Guardar">

	</form>
</div>
<?php include_once "pie.php" ?>