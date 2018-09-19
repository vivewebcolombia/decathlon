<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Proveedores - Decathlon Colombia</title>
    	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie-edge">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="icon" type="image/png" href="img/favicon-viveweb.png" />

    <!--CSS-->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <!--Javascript-->    
    <!--<script src="js/jquery-1.10.2.js"></script>-->
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="js/datatables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>          
    <script src="js/bootstrap.js"></script>
    <script src="js/lenguajeusuario.js"></script>
    <script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip(); 
    });
    </script>   
</head>

<body>
	<div class="container">
		<div class="col-10 col-md-offset-2">
		    <h1>Proveedores
		        <a href="agregar_proveedor.php" class="btn btn-primary pull-right menu"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;Nuevo Proveedor</a>
		    </h1>  
		</div>
		<div class="col-md-10 col-md-offset-2">    
		    <table id="example" class="display" style="width:100%">
		        <thead>
		        <tr>
		            <th>Codigo</th>
		            <th>Nombre Comercial</th>
		            <th>Razon Social</th>
		            <th>NIT</th>               
		            <th>Direccion</th>
		            <th>Ciudad</th>
		            <th>Fecha Vinculación</th>
		            <th></th>
		        </tr>
		        </thead>
		        <tbody>
		        </tbody>
		        <tfoot>
		        <tr>
		            <th>Codigo</th>
		            <th>Nombre Comercial</th>
		            <th>Razon Social</th>
		            <th>NIT</th>               
		            <th>Direccion</th>
		            <th>Ciudad</th>
		            <th>Fecha Vinculación</th>
		            <th></th>
		        </tr>
		        </tfoot>
		    </table>        
		</div>
	</div>
	
	<div class="container">		
				<div class="row">
						<div class="col-12">
							<center>
								<h3>Final de los registros</h3><br>
								<a class="btn btn btn-success" href="inicio.php" role="button">Volver al Inicio</a></p>
							</center>
						</div>
				</div>
	</div>
</body>
</html>