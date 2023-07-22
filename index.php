<?php
include('connection.php');

$connection = connection();

$Qsql  =  "SELECT * FROM clientes";

$query =  mysqli_query($connection, $Qsql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/flatpickr@4.6.3/dist/flatpickr.min.css" rel="stylesheet">
    <title>Formulario</title>
</head>
<body>
    <div class="container mt-5">
        <form action="insert_cliente.php" method="POST">
            <h1 class="mb-4">Creación de clientes</h1>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="documento" name="documento" placeholder=" " required>
                    <label for="documento">Tipo de documento</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="numero" name="numero" placeholder=" " required>
                    <label for="numero">Numero de documento</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="pnombre" name="pnombre" placeholder=" " required>
                    <label for="pnombre">Primer nombre</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="snombre" name="snombre" placeholder=" ">
                    <label for="snombre">Segundo nombre</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="papellido" name="papellido" placeholder=" " required>
                    <label for="papellido">Primer apellido</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="sapellido" name="sapellido" placeholder=" ">
                    <label for="sapellido">Segundo apellido</label>
                </div>
                <div class="form-floating mb-3">
                <input type="text" class="form-control flatpickr" id="fnacimiento" name="fnacimiento" placeholder="" required>
                    <label for="fnacimiento">Fecha de nacimiento</label>
            </div>

            <button type="submit" class="btn btn-primary">Agregar usuario</button>
        </form>
    </div>

    <div class="container mt-5">
        <h2>Usuarios registrados</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tipo de documento</th>
                    <th>Numero de documento</th>
                    <th>Primer nombre</th>
                    <th>Segundo nombre</th>
                    <th>Primer apellido</th>
                    <th>Segundo apellido</th>
                    <th>Fecha de nacimiento</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php  while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['tipo'] ?></td>
                        <td><?= $row['documento'] ?></td>
                        <td><?= $row['primerNombre'] ?></td>
                        <td><?= $row['segundoNombre'] ?></td>
                        <td><?= $row['primerApellido'] ?></td>
                        <td><?= $row['segundoApellido'] ?></td>
                        <td><?= $row['fechaNacimiento'] ?></td>
                        <td><a href="update.php?id=<?= $row['id'] ?>" class="btn btn-primary"> Editar</a></td>
                        <td><a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-danger">  Eliminar</a></td>
                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </div>



        <script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.3/dist/flatpickr.min.js"></script>
    <script>
        flatpickr(".flatpickr", {
            dateFormat: "Y-m-d", 
            locale: "es" 
        });
    </script>
    
</body>
</html>
