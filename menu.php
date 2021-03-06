<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head> <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  
    <title>Banca Virtual</title>
    <link href="librerias/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="librerias/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="librerias/devicons/css/devicons.min.css" rel="stylesheet">
    <link href="librerias/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    
    <link href="librerias/css/resume.css" rel="stylesheet">
<link href="librerias/css/resume.min.css" rel="stylesheet">
    <style type="text/css">
	.modal-login {		
		color: green;
		width: 350px;
	}
	.modal-login .modal-content {
		padding: 20px;
		border-radius: 5px;
		border: none;
	}
	.modal-login .modal-header {
		border-bottom: none;   
        position: relative;
        justify-content: center;
	}
	.modal-login h4 {
		text-align: center;
		font-size: 20px;
		margin: 30px 0 -15px;
	}
	.modal-login .form-control:focus {
		border-color: #70c5c0;
	}
	.modal-login .form-control, .modal-login .btn {
		min-height: 40px;
		border-radius: 3px; 
	}
	.modal-login .close {
        position: absolute;
		top: -5px;
		right: -5px;
	}	
	.modal-login .modal-footer {
		background: #ecf0f1;
		border-color: #dee4e7;
		text-align: center;
        justify-content: center;
		margin: 0 -20px -20px;
		border-radius: 5px;
		font-size: 13px;
	}
	.modal-login .modal-footer a {
		color: #999;
	}		
	.modal-login .avatar {
		position: absolute;
		margin: 0 auto;
		left: 0;
		right: 0;
		top: -70px;
		width: 95px;
		height: 95px;
		border-radius: 50%;
		z-index: 9;
		background: #008000;
		padding: 15px;
		box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
	}
	.modal-login .avatar img {
		width: 100%;
	}
	.modal-login.modal-dialog {
		margin-top: 80px;
	}
    .modal-login .btn {
        color: #fff;
        border-radius: 4px;
		background: #008000;
		text-decoration: none;
		transition: all 0.4s;
        line-height: normal;
        border: none;
    }
	.modal-login .btn:hover, .modal-login .btn:focus {
		background: #088A29;
		outline: none;
	}
	.trigger-btn {
		display: inline-block;
		margin: 100px auto;
	}
	
</style>
  </head>
  <body id="page-top">
	  
	  
	    <?php if (isset($_SESSION['user_name'])) : ?>
	  
	

   <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="glyphicon glyphicon-user"></span> 
                        <a href="#myModal" class="btn btn-success" data-toggle="modal">
                        <strong><?php echo $_SESSION["user_name"]; ?>	</strong>
                       </a>
                        <span class="glyphicon glyphicon-chevron-down"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="navbar-login">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <p class="text-center">
                                            <span class="glyphicon glyphicon-user icon-size"></span>
                                        </p>
                                    </div>
                                    <div class="col-lg-8">
                                        <p class="text-left"><strong>
											
											
											
									
											Bienvenido <?php echo $_SESSION["user_name"]; ?>
											
								
											</strong>
											<a href="home.php">Mi cuenta</a>
											</p>
                                     
                                          <form action="controlador/end.php" method="post">
					   
			<div class="text-center">


		<button type="submit" class="btn btn-success">Cerrar Sesión</button>
</div>

				</form>
				
				  
                               


                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                      
                    </ul>
                </li>
            </ul>
            
      
<?php endif; ?>




  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none">Banca Virtual</span>
        <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/profile3.png" alt="">
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#cc">Crear cliente</a>
          </li>
             <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#ec">Editar Cliente</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#bc">Borrar Cliente</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container-fluid p-0">

<?php
   if (isset($_SESSION['user1']) && $_SESSION['user1'] == 'admin' ) : ?>
   
   
      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="cc">
        <div class="my-auto">
          <h2 class="mb-5">Crear Clientes</h2>

          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
            
          		
            <form  action="controlador/crear.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombres</label>
    <input class="form-control" name="nombres" id="nombres" placeholder="Nombres">   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Apellidos</label>
    <input class="form-control" name="apellido" placeholder="Apellidos"> 
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Telefono</label>
    <input  class="form-control" name="telefono" placeholder="Telefono"> 
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Dpi</label>
    <input  class="form-control" name="dpi" placeholder="dpi">
  </div>
  
    <div class="form-group">
    <label for="exampleInputPassword1">Direccion</label>
    <input class="form-control" name="direccion" placeholder="direccion">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Correo Electronico</label>
    <input  type="email" class="form-control" name="correo" placeholder="email">
     <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

 <div class="form-group">
	  <label for="exampleInputPassword1">Contraseña</label>
		<input type="password" class="form-control" name="password" placeholder="Contraseña" required="required">	
				
  </div>
  
  
 <div class="form-group">
	  <label for="exampleInputPassword1">Tipo de Usuario</label>
		<select name="user_type" id="user_type" >	
			<option value="user">Normal</option>
				<option value="admin">Admin</option>
			</select>
				
				
  </div>
  

			
			
  <button type="submit" class="btn btn-success btn-block">Guardar</button>
</form>

           
</div>
            
            
              
            </div>
          </div>
        </div>






      </section>
   <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="ec">
             <div class="my-auto">
          <h2 class="mb-5">Editar Clientes</h2>

          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
            
                     
            <form  action="controlador/editar.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombres</label>
    <input class="form-control" name="nombres" id="nombres" placeholder="Nombres">   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Apellidos</label>
    <input class="form-control" name="apellido" placeholder="Apellidos"> 
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Telefono</label>
    <input  class="form-control" name="telefono" placeholder="Telefono"> 
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Dpi</label>
    <input  class="form-control" name="dpi" placeholder="dpi">
  </div>
  
    <div class="form-group">
    <label for="exampleInputPassword1">Direccion</label>
    <input class="form-control" name="direccion" placeholder="direccion">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Correo Electronico</label>
    <input  type="email" class="form-control" name="correo" placeholder="email">
     <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

 <div class="form-group">
	  <label for="exampleInputPassword1">Contraseña</label>
		<input type="password" class="form-control" name="password" placeholder="Contraseña" required="required">	
				
  </div>
  
  
 <div class="form-group">
	  <label for="exampleInputPassword1">Tipo de Usuario</label>
		<select name="user_type" id="user_type" >	
			<option value="user">Normal</option>
				<option value="admin">Admin</option>
			</select>
				
				
  </div>
  

			
			
  <button type="submit" class="btn btn-success btn-block">Guardar</button>
</form>


           
</div>
            
            
              
            </div>
          </div>
        </div>

      </section>
      
      
     <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="bc">
            <div class="my-auto">
          <h2 class="mb-5">Borrar Clientes</h2>

          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
            
             <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Nombres</label>
    <input class="form-control" id="nombres" aria-describedby="emailHelp" placeholder=" Nombres">   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Apellidos</label>
    <input class="form-control" id="apellido" placeholder=" Apellidos"> 
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Telefono</label>
    <input  class="form-control" id="telefono" placeholder="Telefono"> 
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Dpi</label>
    <input  class="form-control" id="dpi" placeholder="dpi">
  </div>
  
    <div class="form-group">
    <label for="exampleInputPassword1">Direccion</label>
    <input class="form-control" id="direccion" placeholder="direccion">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Correo Electronico</label>
    <input  type="email" class="form-control" id="correo" placeholder="Password">
     <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-success btn-block">Guardar</button>
</form>

           
</div>
            
            
              
            </div>
          </div>
        </div>

      </section>
      
      
      
         <?php    
        else:?>
 


<div class="alert alert-warning">
  <strong>Warning!</strong> Necesita ser Administrador para entrar a esta sección.
</div>

<?php endif; ?>


   </div>
  
    <script src="librerias/jquery/jquery.min.js"></script>
    <script src="librerias/bootstrap/js/bootstrap.bundle.min.js"></script>

  
    <script src="librerias/jquery-easing/jquery.easing.min.js"></script>

    <script src="librerias/jquery/resume.min.js"></script>

  </body>

</html>
