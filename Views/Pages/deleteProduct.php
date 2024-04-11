<?php
if (isset($_GET['id'])) {
  $id = isset($_GET['id']) ? $_GET['id'] : '';
}

$productResponse = ProductController::getProduct($id);
$product = $productResponse['Producto'];

if ($_POST) {
  $id = (isset($_POST["id"])) ? $_POST["id"] : "";
  ProductController::deleteProduct($id);
}
?>

<form method="post" class='p-5'>
<input type="hidden" class="form-control" name="id" value="<?= $id ?>">
  <h1>Borrar Producto</h1>
  <h3 class="pb-2">
    ¿Estas seguro que desear eliminar <b><?= $product ?></b>?
  </h3>
  <a href="Products" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-danger">Eliminar Producto</button>
</form>