<?php
//local
$server="localhost";
$username="root";
$password="";
$db="citasmedicas_db";
  $mysqli = new mysqli($server,$username,$password,$db);

  if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
  }
  
?>