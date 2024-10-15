<?php
include("connection.php");

$id= $_GET['id'];
$status= $_GET['Status'];


$query= "UPDATE  form SET Status= $status WHERE ID= $id";
mysqli_query($conn, $query);
header("location: Display.php");

?>