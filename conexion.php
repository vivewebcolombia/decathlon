<?php
	
		$conexion = new mysqli("localhost", "vivewebc_prueba", "UIEf0v#a05@e", "vivewebc_prueba_decathlon" );
		
		$tabla_usuarios = "usuarios";
		$tabla_proveedores = "proveedores";
		
		/*function Conexion_fondo(){
			$db=mysql_connect("localhost","ambiente_rootdb","Gwh28dgcmp#") or die("No se conecto al servidor");
            mysql_select_db("ambiente_fondodb",$db) or die ("No se conecto a la base de datos");
            return $db;
}
$dbx=Conexion_fondo();
*/
		
		//Validar conexion
		//if($conexion){
		//	echo "conexion exitosa";
		//}else{
		//	echo "conexion no realizada";
		//}
?>