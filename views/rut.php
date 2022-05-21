<?php
session_start();

$usuario = $_SESSION ['usuario'];
?>
	
<!DOCTYPE html>
<html lang="en">
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Rut Innapsis</title>
        <link href="../css/estilos.css" rel="stylesheet" />
        <!-- <link href="../css/styles.css" rel="stylesheet" /> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
         <link rel="shortcut icon" href="https://cdn.glitch.me/cf4977ce-e1bc-48e7-9030-bd9c0d1d96a3%2FFrame.png?v=1635344811885" type="image/x-icon">
         <script src="js/scripts.js"></script>
    </head>

    <body>
    <header style="background: currentColor;">
        <a href="#banner" class="logo">FFCD<span>.</span></a>
        <div class="funcionNav" onclick="navFuncion();"></div>
        <ul class="navegador">
            <li><a href="vista-usuario.php">Inicio</a></li>
            <li><a href="#nosotros"  onclick="navFuncion();">Nosotros</a></li>
            <li><a href="../views/rut.php">Servicios</a></li>
            <li><a href="#contactos"  onclick="navFuncion();">Contactos</a></li>
            <!-- <li><a href="#contactos"  onclick="navFuncion();">Login</a></li> -->
            <li> <img class="usuario-imagen" src="../img/sesion.png" alt=""> <a style="color: white">JUANGR2735 </a></li>
            
            <li style="padding-top: 6px;"><a class="dropdown-item" href="../views/logout.php">Cerrar Sesión</a></li>
        </ul>
    </header>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">FFCD</div>
                        <a class="nav-link" href="../Vista-usuario-innapsis/inicio-innapsis.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                            Inicio
                        </a>
                        <div class="sb-sidenav-menu-heading">Documentos</div>
                                   
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="far fa-file-alt"></i></div>
                            Generales
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="rut-innapsis.php">Rut de empresa</a>
                                <a class="nav-link" href="camara-comercio-innapsis.php">Camara de Comercio</a>
                                <a class="nav-link" href="composicion-accionaria-innapsis.php">Composicion Accionaria</a>
                                <a class="nav-link" href="cedula-representantes-innapsis.php">Cedula Representantes</a>

                            </nav>
                        </div>

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Documentos Especificos
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a> 
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link" href="../../views/Vista-usuario-innapsis/estados-financieros-innapsis.php">Estados Financieros</a>
                                <a class="nav-link" href="..//views/Balances.php">Balances</a>
                                <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>

             
                <!-- <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Start Bootstrap
                </div> -->
            </nav>
        </div>
        <div id="layoutSidenav_content">
    <main>
                <div class="container-fluid px-4" style="padding: 44px;">
                    <h1 style="text-align:center ;" class="mt-4">DOCUMENTOS SEBASTIAN GARCIA</h1>
                    
                    <div class="card mb-4">
                        <div class="card-body">
                        <p class="mb-0">
                               Todos los documentos que usted suba a esta plataforma serán confidenciales para las empresas que requieran de su información. 
                               Tenga en cuenta que somos una plataforma que vela por la confianza y seguridad de nuestros clientes asi que brindamos la mejor
                               asesoria y trato en cuanto a la informacion se refiere. !No se arrepentirá!
                            </p>
                        </div>
                    </div>
                    
                <center> <div class="panel-body">
                <div class="col-lg-6">
                <form method="POST" action="../Controlador/Rut/cargar.php" enctype="multipart/form-data">
                <div class="form-group">
             <label class="btn btn-info btn-block" for="my-file-selector">
             <input required="" type="file" name="file" id="exampleInputFile">
            </label>
        <br>
        <br>
      <button class="btn btn-info btn-block1-lg" type="submit" >Cargar Documento</button>
      </form>
    </div>
    <div class="col-lg-6"> </div>
  </div></center>
  <br>
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">Archivos Disponibles</h3>
    </div>
    
    <div class="panel-body">
 
    <table class="table">

    <thead>
    <tr>
        <th width="7%">#</th>
        <th width="25%">Nombre del Archivo</th>
 
        <th style="padding-left: 27px;text-align: center;" width="13%">Descargar</th>
        <th style="padding-left: 17px;text-align: center;" width="10%">Eliminar</th>
        <th style="padding-left: 16px;text-align: center;" width="10%">Visualizar</th>
     </tr>
    </thead>

  <tbody>

<?php

include "../Controlador/Rut/Mostrar.php"
?>

</tbody>
</table>
</div>
</div>
 
  <div style="height: 100vh">

<!-- <div class="caja">
<center><h6>Archivos en la plataforma</h6></center>
    
</div> -->

</div>
               
                
    </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2021</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

    </html>