<?php
session_start();
$usu = $_SESSION['user'];
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
        <title>GRAFICOS</title>
        <link href="css/styles.css" rel="stylesheet" />
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
                             
                                 
                             
                            <a class="nav-link collapsed" href="usuario.php"    >
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                USUARIOS
                             
                            </a>
                             
                             <a class="nav-link collapsed" href="productos.php"    >
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                MIS ANUNCIOS
                            </a>
                             
                             <a class="nav-link collapsed" href="validarPublicaciones.php"    >
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
                        <h1 class="mt-4">GRAFICAS</h1>
                           
                        <br>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-area mr-1"></i>
                                USUARIOS 
                            </div>
                            <div class="card-body"><canvas id="myAreaChart" width="100%" height="30"></canvas></div>
                                                    </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar mr-1"></i>
                                        REGISTRO INMUEBLES
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="50"></canvas></div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-pie mr-1"></i>
                                        Pie Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myPieChart" width="100%" height="50"></canvas></div>
                                   
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
        <script src="assets/demo/chart-pie-demo.js"></script>
    </body>
</html>
