<?php
require "../controller/datos.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>


    <link rel="stylesheet" href="../css/estilos.css">
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">


</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <h3>Ingrese datos</h3>
                <form action="../controller/insertar.php" method="post">
                    <input type="text" class="form-control mb-3" name="id" placeholder="ID">
                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                    <input type="text" class="form-control mb-3" name="fecha" placeholder="Fecha">
                    <input type="text" class="form-control mb-3" name="tipo" placeholder="Tipo">
                    <input type="text" class="form-control mb-3" name="encargado" placeholder="Encargado">

                    <input type="submit" class="btn btn-primary">
                </form>
            </div>
            <div class="col-md-8">
                <table class="table">
                    <thead class="table-succes table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Nombre Archivo</th>
                            <th>Fecha Subida</th>
                            <th>Tipo Archivo</th>
                            <th>Modificacion</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <th><?php echo $row['id'] ?></th>
                                <th><?php echo $row['nombre'] ?></th>
                                <th><?php echo $row['fecha'] ?></th>
                                <th><?php echo $row['tipo'] ?></th>
                                <th><?php echo $row['encargado'] ?></th>
                                <th><a href="../controller/modificar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                <th><a href="../controller/eliminar.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</body>

</html>