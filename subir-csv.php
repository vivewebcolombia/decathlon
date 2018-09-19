
	
	<!DOCTYPE html>
	<html lang="es">
		<head>
			<meta charset="UTF-8">
			<title>Subir archivo CSV</title>
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
						
			<div class="container">
				<div class="row">
					<div class="col-12">
							<center>
							<h3><strong>MUY IMPORTANTE</strong></h3><br>
							</center>
						</div>
				</div>
				<div class="row">
					<div class="col-12">
							<left>
							<p><strong>Tenga en cuenta las siguientes recomendaciones para cargar el archivo de excel delimitado por comas tipo CSV:</strong></p><br>
							<p>1: En el contenido del archivo de Excel, por ningun motivo deben haber comillas (") en ninguna de las celdas. para verificarlo, por favor abra el archivo desde Excel y utilice el comando de busqueda para encontrar este caracter y estar seguro de que no exista en ninguna celda.</p>
							<p>2. No oculte columnas en el archivo de Excel que esta subiendo</p>
							<p>3. Utilice la siguiente plantilla con estricto orden de columnas para garantizar la integridad de la Base de Datos.</p>
							<a class="btn btn btn-success" href="PlantillaActualizacionProveedores.csv" role="button">Plantilla</a><br>
							</left>
						</div>
				</div>
			</div>
			
			
			<div class="container">
				<div class="row">
						<div class="col-12">
							<center>
							<h3><strong>ACTUALIZAR LISTA DE PROVEEDORES</strong></h3><br>
							</center>
						</div>
				</div>
				<div class="row">
							<div class="col-12 col-md-6">
								<center>
									<P>Por favor suba un archivo separado por comas .csv</P>
								</center>
							</div>
							<div class="col-12 col-md-6 bg-light">
								<center>
									<div class="formulario">
										<form action="subir-csv.php" class="formulariocompleto" method="post" enctype="multipart/form-data">
											<input type="file" name="archivo">
											<input type="submit" value="Subir archivo" name="enviar">
										</form>
									</div>
	
								</center>
							</div>
				</div>
				
	<?php
	
 	
 	if (isset($_POST["enviar"])){
	 	include("conexion.php");
	 	include("procesar-csv.php");
	 	
		if(substr($_FILES['archivo']['name'], -3)=="csv"){
			
			$archivo = $_FILES["archivo"]["name"];
		 	$archivosubido = $_FILES["archivo"]["tmp_name"];
		 	$archivoguardado = "copia_" . $archivo;
		 	
		 	echo $archivo . " Se esta cargando... <br/>";
		 	
		 	if (copy($archivosubido , $archivoguardado)){
			 	echo "Archivo guardado correctamente <br/>";
		 	}
		 	else
		 	{
			 	echo "hubo un error al copiar el archivo <br/><br/>";
		 	}
		 	
		 	if (file_exists($archivoguardado)){
			 	//echo "si existe una copia del archivo <br/>";
			 	$fp = fopen($archivoguardado, "r"); //Abrir archivo en modo lectura
			 	
			 	$row = 0;
			 	
			 	while ($datos = fgetcsv($fp, 1000, ";")){
				 	$row ++;
				 	//$resultado = insertar_datos($datos[0],$datos[1],$datos[2],$datos[3],$datos[4],$datos[5],$datos[6]);
				 	//echo $datos[0] . " " . $datos[1] . "<br>";
				 	
				 	if ($row > 1){
					 		$conexion->query("INSERT INTO $tabla_proveedores (codigo,nombre_comercial,razon_social,nit,direccion,ciudad,fecha_vinculacion)
							VALUES
							('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]','$datos[6]')");
				 	}
				 	
				 	/*
				 	if($resultado){
					 	echo "se insertaron en la db";
				 	}
				 	else{
					 	echo "no se inserto en la bd";
				 	}
				 	*/
			 	}
			 	$row --;
			 	echo "Se cargaron " . $row . " proveedores.";
		 	}
		 	else
		 	{
			 	echo "no existe una copia del archivo <br/>";
		 	}
		}
		else{
			echo "No es un archivo csv valido, vuelva a  intentarlo ó descargue la plantilla.";
		}
	
	} 
	?>
				
				
			</div>
		</body>
	</html>