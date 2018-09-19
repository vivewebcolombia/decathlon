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

    <!--CSS-->    
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="/media/css/site-examples.css?_=19472395a2969da78c8a4c707e72123a">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/af-2.3.0/b-1.5.2/b-colvis-1.5.2/fh-3.1.4/r-2.2.2/sc-1.5.0/datatables.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
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
		<div class="col-12">
		    <h1>Proveedores
		        <a href="agregar_proveedor.php" class="btn btn-primary pull-right menu"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;Nuevo Proveedor</a>
		    </h1>
		    <h4>
			    <br>
			    <p style="color:#f4003a";> * Recuerda copiar el codigo del proveedor para pegarlo en la herramienta de Concur.</p>
			    <p style="color:#f4003a";> * Si no encuentras el proveedor en la base de datos diligencia en el espacio de codigo del proveedor el siguiente numero : 1000218.</p>
			    
		    </h4>
		</div>
		<div>    
		    <table id="example" class="display" style="width:100%">
		        <thead>
		        <tr>
		            <th style="color:#FF0000";>Codigo</th>
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