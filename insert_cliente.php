<?php 
include('connection.php');
$connection = connection();


$id                = null; 
$tipo              = $_POST["documento"];   
$documento         = $_POST["numero"];       
$primerNombre      = $_POST["pnombre"];      
$segundoNombre     = $_POST["snombre"];     
$primerApellido    = $_POST["papellido"];   
$segundoApellido   = $_POST["sapellido"];    
$fechaNacimiento   = $_POST["fnacimiento"];  

$Qsql = "INSERT INTO clientes (tipo, documento, primerNombre, segundoNombre, primerApellido, segundoApellido, fechaNacimiento) 
         VALUES ('$tipo', '$documento', '$primerNombre', '$segundoNombre', '$primerApellido', '$segundoApellido', '$fechaNacimiento')";


$query =  mysqli_query($connection, $Qsql);



if($query){
    Header("Location: index.php");
};

?>