<?php
	
	function insertar_datos($codigo,$nombre_comercial,$razon_social,$nit,$direccion,$ciudad,$fecha_vinculacion)
	{
			include("conexion.php");
			// $sentencia = "INSERT INTO proveedores (codigo,nombre_comercial,razon_social,nit,direccion,ciudad,fecha_vinculacion) VALUES ('codigo','nombre_comercial','razon_social','nit','direccion','fecha_vinculacion')";
			$ejecutar = mysqli_query($conexion, "INSERT INTO $tabla_proveedores (`codigo`,`nombre_comercial`,`razon_social`,`nit`,`direccion`,`ciudad`,`fecha_vinculacion`) VALUES ('codigo','nombre_comercial','razon_social','nit','direccion','fecha_vinculacion')");
			
			return $ejecutar;
	}
	
	?>