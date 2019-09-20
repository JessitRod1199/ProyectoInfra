<?php

  $conn=mysqli_connect('servdesarrollo.mysql.database.azure.com','administrador@servdesarrollo','Password2019','dbpeople');

  if(mysqli_connect_error($conn)){
  echo "Fallo al conectar a mysql: ".mysqli_connect_error();
}

 ?>
