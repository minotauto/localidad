<?php
    require_once '../modelo/claseConexion.php';
    require_once '../modelo/claseLogin.php';
    require_once '../modelo/daoClaseLogin.php';
    require_once '../modelo/claseRegistroUsuario.php';
    require_once '../modelo/daoRegistroUsuario.php';
    require_once '../modelo/claseRegistroProducto.php';
    require_once '../modelo/daoRegistroProducto.php';
    require_once '../modelo/claseInquietudes.php';
    
    
    switch($_GET['a']){
        case 'entrada':
            $l=new claseLogin();
            $u=$_POST['usuario'];
            $p=$_POST['pass'];
            $l= daoClaseLogin::buscarPorUsuario($u);
            if ($l[4]==$p) {
                session_start();
                $_SESSION['user']=$u;
                $_SESSION['privilegio']=$l[6];
                $_SESSION['idUsuario']=$l[0];
                header("Location: ../vistas/vistaPrincipal.php");
                if ($l[6]==1) {
                    header("Location: ../vistas/vistaPrincipal.php");
                } else {
                    header("Location: ../vistas/vistaPrincipal.php");    
                }
            }
            else{
                header("Location: ../vistas/login.php");
            }
            break;
            
            
        case 'registrar':
            $p=new claseRegistroUsuario();
            $p->setNombre($_POST['nombre']);
            $p->setCelular($_POST['celular']);
            $p->setEmail($_POST['email']);
            $p->setPassword($_POST['pass']);
            daoRegistroUsuario::ingresarDato($p);
            header('Location: ../vistas/login.php');
            break;
        
      case 'registraradmin':
            $p=new claseRegistroUsuario();
            $p->setNombre($_POST['usuario']);
            $p->setCelular($_POST['celular']);
            $p->setEmail($_POST['email']);
            $p->setPassword($_POST['pass']);
            daoRegistroUsuario::ingresarDato($p);
            if (true) {
                header("Location: ../vistas/usuario.php");
            }else{
                echo "no se puedo hacer el registro";
            }
            break;
        
    case 'editarusu':
            $p = new claseRegistroUsuario();
            $p->setIdUsuario($_POST['id']);
            $p->setNombre($_POST['nombre']);
            $p->setCelular($_POST['celular']);
            $p->setEmail($_POST['email']);
            $p->setPassword($_POST['pass']);
            $p->setPrivilegio($_POST['privilegio']);
            daoRegistroUsuario::editardato($p);
            header("Location: ../vistas/usuario.php");
        break;
        
        case 'eliminarusu':
            daoRegistroUsuario::eliminarUsuario($_GET['ref']);
            header('Location: ../vistas/usuario.php');
        break;
    
        case'salir':
                session_start();
                session_destroy();
                header("Location: ../vistas/principal/index.php");
                exit();
                break;
            
        case 'registrarproducto':
            $p=new claseRegistroProducto();
            
            $p->setTienda($_POST['tienda']);
            $p->setUsuario($_POST['usuario']);
            $p->setCelular($_POST['celular']);
            $p->setDireccion($_POST['direccion']);
            $p->setProducto($_POST['producto']);
            $p->setDescripcion($_POST['descripcion']);
            $p->setPrecio($_POST['precio']);
            daoRegistroProducto::ingresardato($p);
            if (true) {
                 header("Location: ../vistas/productos.php");
            } else {
                echo 'no se puedo registrar los datos ';
            }
            break;
            
        case 'eliminarpro':
            daoRegistroProducto::eliminarProducto($_GET['ref']);
            header('Location: ../vistas/productos.php');
            break;
        
        case 'eliminarpro2':
            daoRegistroProducto::eliminarProducto($_GET['ref']);
            header('Location: ../vistas/vistaPrincipal.php');
            break;
        
        case 'eliminarvali':
            daoRegistroProducto::eliminarProductoPendiente($_GET['ref']);
            header('Location: ../vistas/validarPublicaciones.php');
            break;
        
        
            case 'validarproducto':
            $p=new claseRegistroProducto();
            
            $p->setTienda($_POST['tienda']);
            $p->setUsuario($_POST['usuario']);
            $p->setCelular($_POST['celular']);
            $p->setDireccion($_POST['direccion']);
            $p->setProducto($_POST['producto']);
            $p->setDescripcion($_POST['descripcion']);
            
            $p->setPrecio($_POST['precio']);
            daoRegistroProducto::validardato($p);
            if (true) {
                 header("Location: ../vistas/productos.php");
            } else {
                echo 'no se puedo registrar los datos ';
            }
            break;
            
            case'inquietud':
                $p=new claseInquietudes();
                $p->setNombre($_POST['nombre']);
                $p->setCorreo($_POST['correo']);
                $p->setAsunto($_POST['asunto']);
                $p->setMensaje($_POST['mensaje']);
                daoRegistroUsuario::ingresarInquietud($p);
                header('Location: ../vistas/principal/index.php');
                break;
            
            case'eliminarpeticion':
                daoRegistroUsuario::eliminarPeticion($ref);
                header('Location: ../vistas/peticiones.php');
                break;
    }

