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
				<img src="/decathlon/img/Decathlon_Logo-menu.png" width="300" height="88" alt="">
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
						<h3><strong>REGISTRAR PROVEEDOR</strong></h3><br>
						</center>
					</div>
			</div>
			<div class="row">
						<div class="col-12 col-md-6">
							<center>
								<P>Para registrar un nuevo proveedor, por favor diligenciar el siguiente formulario ó vaya a la seccion de carga masiva utilizando un archivo de Excel delimitado por comas CSV</P>
							</center>
							<center>
								<h3>Actualizacon masiva</h3><br>
								<img src="img/update-icon.jpg" class="img-circle" width="150" height="150">
								<a class="btn btn btn-success" href="subir-csv.php" role="button">ir</a></p>
							</center>
						</div>
						<div class="col-12 col-md-6 bg-light">
							<center>
								<article>
									<form action="agregar_proveedor.php" method="post">
										<div class="container">
											
											<div class="form-group row">
												<label class="col-5 col-form-label" for="id_usuario">Nombre Comercial </label>
												<input class="form-control col-7" type="text" name="nombre_comercial" placeholder="ViveWeb Colombia" required>
											</div>
											<div class="form-group row">
												<label class="col-5 col-form-label" for="nombres">Razón Social </label>
												<input class="form-control col-7" type="text" name="razon_social" placeholder="ViveWeb Colombia - Cesar Cipamocha" required>
											</div>
											<div class="form-group row">
												<label class="col-5 col-form-label" for="apellidos">Codigo Decathlon </label>
												<input class="form-control col-7" type="text" name="id_proveedor" placeholder="0001" required>
											</div>
											<div class="form-group row">
												<label class="col-5 col-form-label" for="correo">NIT </label>
												<input class="form-control col-7" type="text" name="nit_proveedor" placeholder="7187127-5" required>
												</div>
											<div class="form-group row">
												<label class="col-5 col-form-label" for="telefono">Dirección </label>
												<input class="form-control col-7" type="text" name="direccion_proveedor" placeholder="Cll 33 # 13-60" required>
											</div>
											<div class="form-group row">
												<label class="col-5 col-form-label" for="telefono">Ciudad </label>
												<input class="form-control col-7" type="text" name="ciudad_proveedor" placeholder="Tunja" required>
											</div>
											<div class="form-group row">
												<label class="col-5 col-form-label" for="fecha_registro">Fecha de Vinculacion<br>(AAAA-MM-DD) </label>
												<input class="form-control col-7" type="date" name="fecha_registro" placeholder="2018-07-06" required>	
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
							
					$nombre_comercial = $_POST['nombre_comercial'];
					$razon_social = $_POST['razon_social'];
					$codigo_decathlon = $_POST['id_proveedor'];
					$nit = $_POST['nit_proveedor'];
					$direccion_proveedor = $_POST['direccion_proveedor'];
					$ciudad_proveedor = $_POST['ciudad_proveedor'];
					$fecha_registro = $_POST['fecha_registro'];
					
					$conexion->query("INSERT INTO $tabla_proveedores (codigo,nombre_comercial,razon_social,nit,direccion,ciudad,fecha_vinculacion)
					VALUES
					('$codigo_decathlon','$nombre_comercial','$razon_social','$nit','$direccion_proveedor','$ciudad_proveedor','$fecha_registro')");
										
					//mostrar registro digitado
					$resultados = mysqli_query($conexion, "SELECT * FROM $tabla_proveedores WHERE `codigo` = $codigo_decathlon ORDER BY `codigo` DESC LIMIT 1");
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
										      <th scope="col">Codigo Decathlon</th>
										      <th scope="col">Nombre Comercial</th>
										      <th scope="col">Razon Social</th>
										      <th scope="col">Nit</th>
										      <th scope="col">Direccion</th>
										      <th scope="col">Ciudad</th>
										      <th scope="col">Fecha de vinculacion</th>
										    </tr>
										  </thead>
										  <tbody>
										    <tr>
										      <td><?php echo $consulta['codigo']?></td>
										      <td><?php echo $consulta['nombre_comercial']?></td>
										      <td><?php echo $consulta['razon_social']?></td>
										      <td><?php echo $consulta['nit']?></td>
										      <td><?php echo $consulta['direccion']?></td>
										      <td><?php echo $consulta['ciudad']?></td>
										      <td><?php echo $consulta['fecha_vinculacion']?></td>
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