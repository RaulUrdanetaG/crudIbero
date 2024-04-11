<?php

if (isset($_GET['id'])) {
  $id = isset($_GET['id']) ? $_GET['id'] : '';
}
$response = ProductController::getProduct($id);

$product = $response['Producto'];
$ref = $response['Referencia'];
$price = $response['Precio'];
$category = $response['Categoria'];
$stock = $response['Stock'];

if ($_POST) {

  // gets the information from formulary and sets it to vars
  $id = (isset($_POST["id"])) ? $_POST["id"] : "";
  $product = (isset($_POST["name"])) ? $_POST["name"] : "";
  $ref = (isset($_POST["ref"])) ? $_POST["ref"] : "";
  $price = (isset($_POST["price"])) ? $_POST["price"] : "";
  $category = (isset($_POST["category"])) ? $_POST["category"] : "";
  $stock = (isset($_POST["stock"])) ? $_POST["stock"] : "";

  ProductController::updateProduct($id, $product, $ref, $price, $category, $stock);
}
?>
<form method="post" class='p-5'>
  <input type="hidden" class="form-control" name="id" value="<?= $id ?>">
  <div class="mb-3">
    <label for="name">Nombre</label>
    <input type="text" class="form-control" name="name" value="<?= $product ?>" placeholder="Manzana" required>
  </div>
  <div class="mb-3">
    <label for="ref">Referencia</label>
    <input type="number" class="form-control" name="ref" value="<?= $ref ?>" placeholder="12345" required>
  </div>
  <div class="mb-3">
    <label for="price">precio</label>
    <input type="number" class="form-control" name="price" value="<?= $price ?>" placeholder="123" required>
  </div>
  <div class="mb-3">
    <label for="category">Categoria</label>
    <input type="text" class="form-control" name="category" value="<?= $category ?>" placeholder="Fruta" required>
  </div>
  <div class="mb-3">
    <label for="stock">Stock</label>
    <input type="number" class="form-control" name="stock" value="<?= $stock ?>" placeholder="123" required>
  </div>
  <a href="Products" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-success">Actualizar Producto</button>
</form>