<?php

class ProductController
{
  static public function showProducts()
  {
    $table = "productos";
    $data = Products::showProducts($table);

    return $data;
  }

  static public function createProduct($name, $ref, $price, $category, $stock)
  {
    $productArray = [];
    $creationDate = date("y-m-d");
    array_push($productArray, $name, $ref, $price, $category, $stock, $creationDate);

    Products::createProduct($productArray);

    header("Location:Products");
  }

  static public function updateProduct($id, $name, $ref, $price, $category, $stock)
  {
    $productArray = [];
    $creationDate = date("y-m-d");
    array_push($productArray, $id, $name, $ref, $price, $category, $stock, $creationDate);

    Products::updateProduct($productArray);

    header("Location:Products");
  }

  static public function getProduct($id)
  {
    $data = Products::getProduct($id);

    return $data;
  }

  static public function deleteProduct($id)
  {
    Products::deleteProduct($id);
    header("Location:Products");
  }
}