<?php 
include('connection.php');
$connection = connection();

$id = $_GET['id'];

$Qsql = "DELETE FROM clientes where id='$id'  ";

$query =  mysqli_query($connection, $Qsql);

if($query){
    Header("Location: index.php");
};

?>