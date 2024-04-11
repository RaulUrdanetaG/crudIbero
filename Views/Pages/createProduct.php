<?php
if ($_POST) {

  // gets the information from formulary and sets it to vars
  $product = (isset($_POST["name"])) ? $_POST["name"] : "";
  $ref = (isset($_POST["ref"])) ? $_POST["ref"] : "";
  $price = (isset($_POST["price"])) ? $_POST["price"] : "";
  $category = (isset($_POST["category"])) ? $_POST["category"] : "";
  $stock = (isset($_POST["stock"])) ? $_POST["stock"] : "";

  ProductController::createProduct($product, $ref, $price, $category, $stock);
}

?>


<form method="post" class='p-5'>
  <div class="mb-3">
    <label for="name">Nombre</label>
    <input type="text" class="form-control" name="name" placeholder="Manzana" required>
  </div>
  <div class="mb-3">
    <label for="ref">Referencia</label>
    <input type="number" class="form-control" name="ref" placeholder="12345" required>
  </div>
  <div class="mb-3">
    <label for="price">precio</label>
    <input type="number" class="form-control" name="price" placeholder="123" required>
  </div>
  <div class="mb-3">
    <label for="category">Categoria</label>
    <input type="text" class="form-control" name="category" placeholder="Fruta" required>
  </div>
  <div class="mb-3">
    <label for="stock">Stock</label>
    <input type="number" class="form-control" name="stock" placeholder="123" required>
  </div>
  <a href="Products" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-success">Crear Producto</button>
</form>