<?php

// Configirar datos de acceso a BD
   $dbuser = "proy1";
   $userpass = "Abdh2695";
   $nombd = "nota_php";
   $dsn = "sqlsrv:Server=ABEL;Database=notas_php";

try {
  //Coneccion a BD SQL serwer
  $conn = new PDO($dsn);
  //Mostrar mensaje de coneccion correcta
  if ($conn) {
    echo "Conectado a BD correctamente";
  }
} catch (PDOExeption $e) {
  echo $e->getMessage();
}

$sentencia = $conn->query("select * from notas");
$mascotas = $sentencia->fetchAll(PDO::FETCH_OBJ);
 ?>
