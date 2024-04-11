<?php

class Connection
{
  static public function connectionDB()
  {
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cruduibero";
    
    try {
      $connection = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    } catch (Exception $err) {
      echo $err->getMessage();
    }
    return $connection;
  }
}