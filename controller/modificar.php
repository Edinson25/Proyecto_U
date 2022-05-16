<?php

require "bd.php";

$Id = $_GET['id'];

$sql = "SELECT * FROM documentos WHERE id='$Id'";
$query = mysqli_query($conexion, $sql);

$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>

    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">


</head>

<body>
    <div class="container mt-5">
        <h3>Ingrese datos</h3>
        <form action="actualizar.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
            
            <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre'] ?>">
            <input type="text" class="form-control mb-3" name="fecha" placeholder="Fecha" value="<?php echo $row['fecha'] ?>">
            <input type="text" class="form-control mb-3" name="encargado" placeholder="Encargado" value="<?php echo $row['encargado'] ?>">

            <input type="submit" class="btn btn-primary" value="Actualizar">
        </form>
    </div>
</body>

</html>



