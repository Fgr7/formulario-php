<?php 
include('connection.php');
$connection = connection();

$id = $_GET['id'];

$Qsql = "SELECT * FROM clientes WHERE id='$id'";
$query =  mysqli_query($connection, $Qsql);
$row = mysqli_fetch_array($query); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>

    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/flatpickr@4.6.3/dist/flatpickr.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <form action="edit.php" method="POST">

            <input type="hidden" name="id" value="<?= $row['id'] ?>"> 

            <div class="form-group">
                <input type="text" class="form-control" name="documento" placeholder="Tipo de documento" value="<?= $row['tipo'] ?>"> 
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="numero" placeholder="Numero de documento" value="<?= $row['documento'] ?>"> 
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="pnombre" placeholder="Primer Nombre" value="<?= $row['primerNombre'] ?>"> 
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="snombre" placeholder="Segundo Nombre" value="<?= $row['segundoNombre'] ?>"> 
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="papellido" placeholder="Primer Apellido" value="<?= $row['primerApellido'] ?>"> 
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="sapellido" placeholder="Segundo Apellido" value="<?= $row['segundoApellido'] ?>"> 
            </div>

            <div class="form-group">
                <input type="text" class="form-control flatpickr" name="fnacimiento" placeholder="Fecha de nacimiento" value="<?= $row['fechaNacimiento'] ?>"> 
            </div>

            <input type="submit" class="btn btn-primary" value="Actualizar información">
        </form>
    </div>

    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.3/dist/flatpickr.min.js"></script>
    <script>
        flatpickr(".flatpickr", {
            dateFormat: "Y-m-d", 
            locale: "es" 
        });
    </script>

    
</body>
</html>





