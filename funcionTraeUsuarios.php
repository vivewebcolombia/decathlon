<?php
	
	include ("conexion.php");
	$consulta = "SELECT * FROM proveedores";
	$registro = mysqli_query($conexion, "SELECT * FROM `proveedores` ORDER BY `codigo` ASC");
	
	$tabla = "";
	
	while($row = mysqli_fetch_array($registro)){		
		//$editar = '<a href=\"edicionUsuario.php?a='.$row['cedula'].'&b='.$row['nombres'].'&c='.$row['apellidos'].'&d='.$row['correo'].'&e='.$row['telefono'].'\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>';
		//$eliminar = '<a href=\"actionDelete.php?id='.$row['cedula'].'\" onclick=\"return confirm(\'¿Seguro que desea eliminiar este usuario?\')\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a>';
		
		$tabla.='{
				  "codigo":"'.$row['codigo'].'",
				  "nombre_comercial":"'.$row['nombre_comercial'].'",
				  "razon_social":"'.$row['razon_social'].'",
				  "nit":"'.$row['nit'].'",
				  "direccion":"'.$row['direccion'].'",
				  "ciudad":"'.$row['ciudad'].'",
				  "fecha_vinculacion":"'.$row['fecha_vinculacion'].'",
				  "acciones":"'.$editar.$eliminar.'"
				},';
	}	
	//eliminamos la coma que sobra
	$tabla = substr($tabla,0, strlen($tabla) - 1);
	echo '{"data":['.$tabla.']}';
?>