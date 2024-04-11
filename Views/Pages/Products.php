<div class="content p-3" style="min-height: 717px;">

  <a href="createProduct" class="btn btn-primary">
    Agregar producto
  </a>
  <br>

  <div class="table-responsive p-3">
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Producto</th>
          <th scope="col">Referencia</th>
          <th scope="col">Precio</th>
          <th scope="col">Categoria</th>
          <th scope="col">Stock</th>
          <th scope="col">Fecha creacion</th>
          <th scope="col">Fecha ultima venta</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($products as $product) { ?>
          <tr>
            <th><?= $product['id'] ?></th>
            <th><?= $product['Producto'] ?></th>
            <th><?= $product['Referencia'] ?></th>
            <th>$<?= $product['Precio'] ?></th>
            <th><?= $product['Categoria'] ?></th>
            <th><?= $product['Stock'] ?></th>
            <th><?= $product['Creacion'] ?></th>
            <th><?= $product['UltimaVenta'] ?></th>
            <th>
              <a href="editProduct?id=<?= $product["id"] ?>" class="btn btn-warning">Editar <i
                  class="fa-regular fa-pen-to-square"></i></a>
              |
              <a href="deleteProduct?id=<?= $product["id"] ?>" class="btn btn-danger">Borrar <i class="fa-solid fa-trash-can"></i></a>

            </th>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>

<?php include ("C://xampp/htdocs/crudIbero/Views/Modules/delete.modal.php"); ?>