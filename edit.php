<?php 
include('connection.php');
$connection = connection();

$id                = $_POST["id"]; 
$tipo              = $_POST["documento"];   
$documento         = $_POST["numero"];       
$primerNombre      = $_POST["pnombre"];      
$segundoNombre     = $_POST["snombre"];     
$primerApellido    = $_POST["papellido"];   
$segundoApellido   = $_POST["sapellido"];    
$fechaNacimiento   = $_POST["fnacimiento"];  

$Qsql = "UPDATE clientes SET tipo='$tipo', documento='$documento', primerNombre='$primerNombre', 
segundoNombre='$segundoNombre', primerApellido='$primerApellido', segundoApellido='$segundoApellido', fechaNacimiento='$fechaNacimiento'
WHERE id='$id'";
;


$query =  mysqli_query($connection, $Qsql);



if($query){
    Header("Location: index.php");
};

?>