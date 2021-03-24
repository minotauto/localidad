<?php
   	include "db.php";
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

<html>
<head>

	<title>CHAT</title>
        <link rel="stylesheet" type="text/css" href="estilos.css">
        <link href = "https://fonts.googleapis.com/css2? family = Mukta + Vaani: wght @ 200 & display = swap" rel = "stylesheet">
        <script type="text/javascript">
        	function ajax(){
        		var req = new XMLHttpRequest();

        		req.onreadystatechange = function(){
        		if (req.readyState == 4 && req.status == 200){
        			document.getElementById('chat').innerHTML = req.responseText;
        	}
        	}
        		req.open('GET', 'chat.php', true);
        		req.send();
        }

        setInterval(function(){ajax();}, 1000);

        </script>
        
       
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<body style="background-color:#972247;">
    <br>
    <br>
	<div id="contenedor">
		<div id="caja-chat">
			<div id="chat">
				
		   </div>
		</div>
	
            <form method="POST" action="index.php">
                
                <textarea name="mensaje" class="input-group" placeholder="Escribe un mensaje"></textarea>
                <input type="submit" class="btn btn-info " name="enviar" value="Enviar">
                <br>
                
                <br>
                <div>
                    <a class="btn btn-danger"   href="limpiar.php?a=limpiar">LIMPIAR</a>
                    <a class="btn btn-success" href="../../vistaPrincipal.php">SALIR</a>
                </div>
                
	</form>
            
	<?php
		if (isset($_POST['enviar'])) {
			$nombre = $_POST['nombre'];
			$mensaje = $_POST['mensaje'];

			$consulta = "INSERT INTO chat (nombre, mensaje) VALUES ('$usu','$mensaje')";
				$ejecutar = $conexion->query($consulta);

				if ($ejecutar){
					echo "<embed loop='false' src='beep.mp3' hidden='true' autoplay='true'>";

				}
			
		}
	?>
	</div>
	</body>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</html>