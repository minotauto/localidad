<?php
require_once '../modelo/claseRegistroUsuario.php';
require_once '../modelo/daoRegistroUsuario.php';
session_start();
$pr = $_SESSION['privilegio'];
$usu = $_SESSION['user'];
if ($pr==2) {
    header("Location: login.php");
}
if(!isset($usu)){
    header("Location: login.php");
}
error_reporting(0);
$varsesion = $_SESSION['user'];
if($varsesion==NULL || $varsesion = ''){
    echo 'usted no tiene autorizacion';
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>USUARIOS</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="vistaPrincipal.php">HOME.COM</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <a href="../controlador/controlador.php?a=salir"><button  type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="left">Cerrar Sesion</button></a>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                           
                            <a class="nav-link" href="vistaPrincipal.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                PRINCIPAL
                            </a>
                            <div class="sb-sidenav-menu-heading">GRAFICOS</div>
                            <a class="nav-link collapsed" href="charts.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                GRAFICO
                               
                            </a>
                             <div class="sb-sidenav-menu-heading">USUARIOS</div>
                            
                            
                             <a class="nav-link collapsed" href="perfil.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                PERFIL  
                               
                            </a>
                            <a class="nav-link collapsed" href="usuario.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                USUARIOS
                               
                            </a>
                             <a class="nav-link collapsed" href="productos.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                MIS ANUNCIOS
                               
                            </a>
                             
                             <a class="nav-link collapsed" href="validarPublicaciones.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                SOLICITUDES  
                            </a>
                             <a class="nav-link collapsed" href="peticiones.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                PETICIONES   
                            </a>
                             
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading"></div>
                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">BIENVENIDO</div>
                        HOME.COM
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        
                        
                         <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal">
  NUEVO USUARIO
</button>
                        <?php include_once '../vistas/registrarUsuarioAdmin.php';?>
                           
                        <br><br>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                USUARIOS
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">NOMBRE</th>
                                                <th scope="col">CELULAR</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">PASS</th>
                                                <th scope="col">PRIVILEGIO</th>
                                                <th scope="col">EDITAR</th>
                                                <th scope="col">ELIMINAR</th>
                                                
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                             <?php foreach (daoRegistroUsuario::listarUsuario() as $fila): ?>
                                            <tr>
                                                <td><?=$fila[0]?></td>
                                                <td><?=$fila[1]?></td>
                                                <td><?=$fila[2]?></td>
                                                <td><?=$fila[3]?></td>
                                                <td><?=$fila[4]?></td>
                                                <td><?=$fila[6]?></td>
                                                
                                                <td><a type="button" class="btn btn-outline-info" href="vistaEditarUsuario.php?ref=<?=$fila[0]?>">Editar</a></td>
                                                <td><a type="button" class="btn btn-outline-danger" href="../controlador/controlador.php?a=eliminarusu&ref=<?=$fila[0]?>">Eliminar</a></td>
                
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
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
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>