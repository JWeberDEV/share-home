<?php 
$mysqli = new mysqli("localhost","root","","share_room_database");

if ($mysqli === false){
  die("ERROR: Não foi Possivel conectar com o Banco de dados." . mysqli_connect_error());
}
?>