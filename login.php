<!DOCTYPE html>
<html>
	<head>
		<title>Iniciar sesion - Decathlon</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie-edge">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="icon" type="image/png" href="img/favicon-viveweb.png" />
		
		
		<!--<div class="container">
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
		--></div>
	</head>
	
	<body>
		
				<h3>    
			        <p class="bg-danger" align="center">
			        <b>
			            <?php
			            session_start();
			            ob_start();

	                    if($_SESSION['estado_sesion']==2)
	                        {echo "Los campos SON OBLIGATORIOS";}
	                    if($_SESSION['estado_sesion']==3)
			                {echo "DATOS INCORRECTOS";}
			                
			            ?>
			        </b>
			        </p>
			        <p class="bg-success" align="center">
			        <b>
			            <?php
			                if($_SESSION['estado_sesion']==4)
			                    {echo "GRACIAS POR USAR NUESTROS SERVICIOS";}
			                $_SESSION['estado_sesion']=0; //Despues de confirmar el error, igualo lo variable a 0
			            ?>
			        </b>
			        </p>
			    </h3>
				
				<!--Inicio del formulario de Iniciar sesion-->
                <div class="container bg-light text-dark border">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <div class="well"> <!--hace un sombreado a la columna-->
                            <center>
                                <h3><strong>INICIAR SESION</strong></h3><br>
                                <img src="img/usuario.png" class="img-circle" width="150" height="150">
                                
                                <br><br><br>
                                
                                <form class="form-inline" method="POST" action="agregar_proveedor.php" name="login">
                                    <div class="form-group">
                                      <label for="usuario">USUARIO</label>
                                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="text" class="form-control" id="usuario" placeholder="Usuario" name="user">
                                    </div>
                                    <br><br>
                                    <div class="form-group">
                                      <label for="pass">CONTRASEÑA</label>
                                        <input type="password" class="form-control" id="pass" placeholder="Contraseña" name="pass">   
                                    </div>  
                                    <div>
		                                <br><br>
	                                    <input type="hidden" name="envio">
	                                    <p><input type="submit" id="enviar" class="btn btn-success" value="INICIAR SESIÓN" name="btn_index">
	                                     <a class="btn btn btn-danger" href="https://www.viveweb.com.co/decathlon" role="button">SALIR</a></p>
                                    </div>
                                </form>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
              </div>
            </div>
            </div>
            
            <div class="container text-dark ">
	            <p align="right"><i>Creado por <strong>ViveWeb</strong></i> </p>
            </div>
            
            
		


		
			
		<script src="js/jquery-3.3.1.slim.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>