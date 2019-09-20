<?php
header ("Content-type: application/json");
require_once("conexion.php");
$mysqli=$conn;
$query= "SELECT * FROM people ORDER BY id ASC" ;
$result = $mysqli->query($query);
$json=array();
while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $json[]= array( 
        'id' =>$row['id'],
        'nombre' =>utf8_encode($row['nombre']),
        'edad' =>utf8_encode($row['edad']),
        'url' =>$row['url'],
        
    );
}

$json_string= json_encode($json);

echo $json_string;
?>