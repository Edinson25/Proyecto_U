<?php
require "datos.php";
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
        <div class="row">
            <div class="col-md-3">
                <h3>Ingrese datos</h3>
                <form action="insertar.php" method="post">
                    <input type="text" class="form-control mb-3" name="Nombre Archivo" placeholder="Nombre">
                    <input type="text" class="form-control mb-3" name="Fecha" placeholder="Fecha">
                    <input type="text" class="form-control mb-3" name="Tipo" placeholder="Tipo">
                    <input type="text" class="form-control mb-3" name="Encargado" placeholder="Encargado">

                    <input type="submit" class="btn btn-primary">
                </form>
            </div>
            <div class="col-md-8">
                <h3>tabla</h3>
                <table class="table">
                    <thead class="table-succes table-responsive table-striped">
                        <tr>
                            <th>Nombre Archivo</th>
                            <th>Fecha Subida</th>
                            <th>Tipo Archivo</th>
                            <th>Modificacion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($row=mysqli_fetch_array($query)){
                            ?>
                        <tr>
                        <th><?php echo $row['Nombre']?></th>
                        <th><?php echo $row['Fecha']?></th>
                        <th><?php echo $row['Tipo']?></th>
                        <th><?php echo $row['Encargado']?></th>
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