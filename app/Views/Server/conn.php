<?php

$servername = "localhost";
$username = "NOCASH xD";
$password = "NOCASH xD";
$dbname = "NOCASH xD";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn) {

die(" PROBLEM WITH CONNECTION : " . mysqli_connect_error());

}
  
?>