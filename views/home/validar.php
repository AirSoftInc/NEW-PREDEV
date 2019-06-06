<?php 
			
	session_start();
	$sError="";

		if (isset($_POST["email"]) && !empty($_POST["email"]) && isset($_POST["password"])&& !empty($_POST["password"])) {

            $conexion = mysqli_connect("localhost", "root", "");
			mysqli_select_db($conexion, "predev_plataform");
			

			$sql = "SELECT 'email', 'password' FROM users where email = '".$_POST["email"]."'AND password = '".$_POST["password"]."'";

			//$sql2 = "SELECT 'correo', 'pasadmin' FROM usuarios where correo = '".$_POST["correo"]."'AND pasadmin = '".$_POST["psw"]."'";

			$consulta = mysqli_query($conexion, $sql);
            //$consulta2 = mysqli_query($conexion, $sql2);
            
			$extraido = mysqli_fetch_array($consulta);
			//$extraido2 = mysqli_fetch_array($consulta2);
			//$extraidoId = mysqli_fetch_array($consulta3);
			mysqli_close($conexion);

			if (!empty($extraido['email']) && !empty($extraido['password'])) {
				echo '<script>alert("BIENVENIDO USUARIO")</script>';
					$_SESSION['email']= $_POST["email"];
					$_SESSION['password']= $_POST["password"];
					//$_SESSION['id']= $extraidoId['id'];
					$sError = "BIENVENIDO USUARIO";
				
			}else {
				$sError = "CREDENCIALES INVALIDAS";
				echo '<script>alert("CREDENCIALES INVALIDAS")</script>';
			}
							
		}
	if ($sError == "BIENVENIDO USUARIO"){
		header("location:../dashboard/index.php");
	}else{
		echo '<script>location.href="Login.php"</script>';
	}
 ?>