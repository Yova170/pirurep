<?php
    $conn= new mysqli("localhost:1234", "root", "1319", "cliente" );

    if ($conn->connect_error) {
        die("ERROR: No se puede conectar al servidor: " . $conn->connect_error);
      } 
    
      echo 'Conectado a la base de datos';
    
    
?>
