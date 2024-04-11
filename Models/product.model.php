<?php
require_once ('C:\xampp\htdocs\crudIbero\Models\connection.php');
class Products
{
  static public function showProducts($table)
  {
    $query = Connection::connectionDB()->prepare("SELECT * FROM productos");
    $query->execute();

    $response = $query->fetchAll();

    return $response;
  }

  static public function createProduct($newProdArray)
  {
    // makes SQL query
    $query = Connection::connectionDB()->prepare("INSERT INTO productos(id,Producto,Referencia,Precio,Categoria,Stock,Creacion,UltimaVenta) 
    VALUES(null,:product,:ref,:price,:category,:stock,:creationDate,null)");

    // Binds query values with form values
    $query->bindParam(":product", $newProdArray[0]);
    $query->bindParam(":ref", $newProdArray[1]);
    $query->bindParam(":price", $newProdArray[2]);
    $query->bindParam(":category", $newProdArray[3]);
    $query->bindParam(":stock", $newProdArray[4]);
    $query->bindParam(":creationDate", $newProdArray[5]);

    $query->execute();
  }

  static public function updateProduct($updateProdArray)
  {
    // makes SQL query
    $query = Connection::connectionDB()->prepare("UPDATE productos 
    SET Producto=:product,Referencia=:ref,Precio=:price,Categoria=:category,Stock=:stock,Creacion=:creationDate
    WHERE id=:id");

    // Binds query values with form values
    $query->bindParam(":id", $updateProdArray[0]);
    $query->bindParam(":product", $updateProdArray[1]);
    $query->bindParam(":ref", $updateProdArray[2]);
    $query->bindParam(":price", $updateProdArray[3]);
    $query->bindParam(":category", $updateProdArray[4]);
    $query->bindParam(":stock", $updateProdArray[5]);
    $query->bindParam(":creationDate", $updateProdArray[6]);

    $query->execute();
  }

  static public function getProduct($id)
  {
    $query = Connection::connectionDB()->prepare("SELECT * FROM productos WHERE id = {$id}");
    $query->execute();

    $response = $query->fetch((PDO::FETCH_ASSOC));
    return $response;
  }
  static public function deleteProduct($id)
  {
    $query = Connection::connectionDB()->prepare("DELETE FROM productos WHERE id = {$id}");
    $query->execute();
  }
}