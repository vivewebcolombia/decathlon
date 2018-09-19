<!DOCTYPE html>
<html>
	<head>
		<title>Agregar proveedor - Decathlon</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie-edge">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="icon" type="image/png" href="img/favicon-viveweb.png" />
		
		
		<div class="container">
			<nav class="navbar navbar-dark bg-dark navbar-toggleable-md sticky-top">
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#menu_pricipal" aria-controls="menu_pricipal" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>
				<a class="navbar-brand" href="index.php">
				<img src="/decathlon/img/favicon-rocky.ico" width="100" height="100" alt="">
  				</a>
  				<div class="collapse navbar-collapse" id="menu_pricipal">
	  				<div class="navbar-nav">
		  				<a class="nav-item nav-link active" href="index.php">Inicio <span class="sr-only">(current)</span></a>
					      <a class="nav-item nav-link" href="proveedores.php">Proveedores</a>
					      <a class="nav-item nav-link" href="login.php">Iniciar Sesion</a>
	  				</div>
  				</div>
			</nav>
		</div>
		<script src="js/jquery.dataTables.min.js"></script>
		<script src="js/dataTables.bootstrap.min.js"></script>
		<script src="js/jquery-3.3.1.slim.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery-3.3.1.min.js"></script>
		<script >
			$(document).ready(function(){
				$('[data-toggle="tooltip"]').tooltip();
				});
		</script>
	</head>
	
	
	
	<body>
		
  <?php
	  session_start();
      ob_start();
	 
    if(isset($_POST['btn_index']))//Verifico que el boton "iniciar sesion" fue oprimido
    {
      $_SESSION['estado_sesion']=0;
      $user = $_POST['user'];
      $pass = $_POST['pass'];

      if($user=="" || $pass=="")
      {
        $_SESSION['estado_sesion']=2;//2 sera error de campos vacios
      }
      else
      {
        include("conexion.php");  
        $_SESSION['estado_sesion']=3;//3 Datos Incorrectos
        $resultados = mysqli_query($conexion,"SELECT * FROM $tabla_usuarios WHERE correo = '$user' AND pass = '$pass'");
        while($consulta = mysqli_fetch_array($resultados))
            {
               $_SESSION['estado_sesion']=1;//Inicio Sesion :D
            }
        include("cerrar_conexion.php");
      }
    }
    else
    {	    
	    header("location:../login.php");
	    //exit();
	    
	}

    if($_SESSION['estado_sesion']<>1)
    {
      include("login.php");
      exit();
    }
  ?>
		
		<div class="container">		
			<div class="row">
					<div class="col-12">
						<center>
						<h3><strong>REGISTRAR</strong></h3><br>
						</center>
					</div>
			</div>
			<div class="row">
						<div class="col-12 col-md-6">
							<center>
								<P>Para registrar por favor diligenciar el siguiente formulario</P>
							</center>
						</div>
						<div class="col-12 col-md-6 bg-light">
							<center>
								<article>
									<form action="prueba.php" method="post">
										<div class="container">
											
											<div class="form-group row">
												<label class="col-5 col-form-label" for="id_usuario">Interno </label>
												<input class="form-control col-7" type="text" name="interno" placeholder="Numero interno" required>
											</div>
											<div class="form-group row">
												<label class="col-5 col-form-label" for="nombres">Nombre </label>
												<input class="form-control col-7" type="text" name="nombre" placeholder="Nombre" required>
											</div>
											<div>
												<input type="submit" value="Registrar" name="registro-proveedor-btn" class="btn btn-success">
											</div>
										</div>

									</form>
								</article>
							</center>
						</div>
			</div>
		</div>
		
		
		<?php
			
			if(isset($_POST['registro-proveedor-btn'])){
				include("conexion.php");
							
					$campo1 = $_POST['interno'];
					$campo2 = $_POST['nombre'];
					
					$conexion->query("INSERT INTO rocky (interno,nombre)
					VALUES
					('$campo1','$campo2')");
										
					//mostrar registro digitado
					$resultados = mysqli_query($conexion, "SELECT * FROM rocky WHERE `interno` = $campo1 ORDER BY `interno` DESC LIMIT 1");
					?>
					
					<?php
					while($consulta = mysqli_fetch_array($resultados)){
						?>
							<div class="container">
								<div class="row">
									<div class="col-12">
										<table class="table table-striped" id="tabla-registro-asociado-exitoso">
										  <thead>
										    <tr>
										      <th scope="col">Codigo interno</th>
										      <th scope="col">Nombre</th>
										    </tr>
										  </thead>
										  <tbody>
										    <tr>
										      <td><?php echo $consulta['interno']?></td>
										      <td><?php echo $consulta['nombre']?></td>
										    </tr>
										  </tbody>
										</table>
									</div>
								</div>
							</div>

						<?php
						$existe++;
					}
					
				include("cerrar_conexion.php");
			}else
			{
				//echo "no se registro nada";
			}
			
			?>
			
			<div class="container">		
				<div class="row">
						<div class="col-12">
							<center>
								<h3>Mas Acciones:</h3><br>
								<a class="btn btn btn-success" href="inicio.php" role="button">Volver al Inicio</a></p>
							</center>
						</div>
				</div>
			</div>

		
		
	</body>
</html>