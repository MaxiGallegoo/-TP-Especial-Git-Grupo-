<?php

  if(isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["email"]) && isset($_POST["mail"]) && $_POST["sugerencia"]!="" && $_POST["mail"]!=""){
      $nombre = $_POST["nombre"];
      $apellido = $_POST["apellido"];
      $email = $_POST["email"];
      $sugerencia = $_POST["sugerencia"];
      echo "<h1>El nombre es: $nombre</h1>";
      echo "<h1>El apellido es: $mail</h1>";
      echo "El Email es: $email";
      echo "El Sugerencia es: $sugerencia";
  }
  else{
      echo "ingreso un valor no valido por favor vuelva a Introduzca valores";
  }
 ?>
