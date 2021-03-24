<?php
require_once '../modelo/claseRegistroUsuario.php';
require_once '../modelo/daoRegistroUsuario.php';
require_once '../modelo/claseRegistroProducto.php';
require_once '../modelo/daoRegistroProducto.php';
require_once '../vistas/sesiones.php';

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
        <title>PRINCIPAL</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="vistaPrincipal.php">HOME.COM</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <h3 class="navbar-brand">HOME.COLOMBIA@GMAIL.COM / CONTACTENOS:3138455086 / Bienvenid@ : <?php echo $usu; ?></h3>
            <!-- Navbar-->
            
            <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
                        <a href="../controlador/controlador.php?a=salir"><button  type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="left">Cerrar Sesion</button></a>
                </li>
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
                            <?php if ($pr==1) {?>
                            <div class="sb-sidenav-menu-heading">GRAFICOS</div>
                            <a class="nav-link collapsed" href="charts.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                GRAFICO
                            </a>
                            <?php } ?> 
                             <div class="sb-sidenav-menu-heading">USUARIOS</div>
                            
                            
                             <a class="nav-link collapsed" href="perfil.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                PERFIL   
                               
                            </a>
                             <?php if ($pr==1) {?>
                                 
                             
                            <a class="nav-link collapsed" href="usuario.php"    >
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                USUARIOS
                             <?php } ?>  
                            </a>
                             
                             <a class="nav-link collapsed" href="productos.php"    >
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                MIS ANUNCIOS
                            </a>
                             <?php if($pr==1){?>
                             <a class="nav-link collapsed" href="validarPublicaciones.php"    >
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                SOLICITUDES
                            </a>
                             <a class="nav-link collapsed" href="peticiones.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                PETICIONES 
                             </a>
                             <?php }?>
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
                        <h3 class="mt-4">Publicaciones</h3>
                        
                        
                        <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <?php if ($pr==1) {    
                                                ?>
                                                <th scope="col">ID</th>
                                                <?php } ?>
                                                <th scope="col">TIENDA</th>
                                                <th scope="col">PRODUCTO</th>
                                                <th scope="col">FOTO</th>
                                                <th scope="col">PRECIO</th>
                                                <?php if ($pr==1) {    
                                                ?>
                                                <th scope="col">ACCION</th>
                                                <?php } ?>
                                                <th scope="col">DETALLE</th>
                                                
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                             <?php foreach (daoRegistroProducto::listarProducto() as $fila): ?>
                                            <tr>
                                                <?php if ($pr==1) {?>
                                                <td><?=$fila[0]?></td>
                                                <?php } ?>
                                                <td><?=$fila[1]?></td>
                                                <td><?=$fila[5]?></td>
                                                <td></td>
                                                <td><?=$fila[8]?></td>
                                                
                                                
                                                <?php if ($pr==1) { ?>
                                                <td>
                                                   
                                                <a type="button" class="btn btn-outline-danger" href="../controlador/controlador.php?a=eliminarpro2&ref=<?=$fila[0]?>">Eliminar</a> 
                                                <?php } ?>
                                                </td>
                                                <td>
                                                    <div class="container-fluid">
                        
                        <button type="button" class="btn btn-outline-secondary " data-bs-toggle="modal" data-bs-target="#exampleModal">
  DETALLE
  
</button>
                            <?php include_once './modalDescripcionProducto.php';?>
                    </div>
                                                </td>
                                                
                                                
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
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


