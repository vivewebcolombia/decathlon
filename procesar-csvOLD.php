<?php
	
	include("conexion.php");

	if(substr($_FILES['excel']['name'],-3) =="csv")
	{
		$fecha = date('y-m-d');
		$ruta = "/files/";
		$excel = $fecha . "-" . $_FILES['excel']['name'];
		
		move_uploaded_file($_FILES['excel']['tmp_name'], "$ruta$excel");
		
		$row = 1;
		
		$fp = fopen($ruta$excel, "r");
		
		// fgetcsv. obtiene los valores que estan en el csv y los extrae
		
		while($data = fgetcsv($fp, 1000, ","))
		{
			// si la linea es igual a 1 no guardamos por que serían los titulos del archivo csv
			if($row!=1)
			{
				$sql_guardar = "INSERT INTO $tabla_proveedores (codigo, nombre_comercial, razon_social, nit, direccion, ciudad, fecha_vinculacion)";
				$sql_guardar .= "VALUES('data[0]','data[1]','data[2]','data[3]','data[4]','data[5]','data[6]')";
				
				mysql_query($sql_guardar) or die(mysql_error());
				
				if(!$sql_guardar)
				{
					echo "<div> Hubo un problema al momento de importar el archivo, Por favor vuelva a cargarlo</div>";
					exit;
				}
			}
		$row++;
		
		}
		
		fclose($fp);
		
		echo "<div>La importacion del archivo subio satisfactoriamente</div>";
		exit;
	}	
	else
	{
		echo "No es un archivo de Excel válido, verifique y vuelva a intentarlo";
	}
?>