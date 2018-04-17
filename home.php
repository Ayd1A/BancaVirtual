
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
		color: #636363;
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
											
								
											</strong></p>
                                     
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
            <a class="nav-link js-scroll-trigger" href="#about">Acerca de</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#mision">Misión</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#vision">Visión</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#beneficios">Beneficios</a>
          </li>
              <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#menu">Menu</a>
          </li>
          
           <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#login">Login</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container-fluid p-0">

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <h1 class="mb-0">Banca
            <span class="text-primary">Virtual</span>
          </h1>
          <div class="subheading mb-5">Guatemala,2018.
            <a href="mailto:name@email.com">bv@gmail.com</a>
          </div>
          <p class="mb-5">Con este servicio puedes efectuar tus transacciones de consultas, transferencias, pagos de servicios y otras gestiones, sin necesidad de presentarte a una agencia Bancaria. Este servicio te simplifica la vida, únicamente debes ingresar a nuestro portal desde la comodidad de tu hogar, trabajo o cualquier ubicación en la cual tengas a tu disposición una computadora con acceso a Internet.</p>
          <ul class="list-inline list-social-icons mb-0">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="mision">
        <div class="my-auto">
          <h2 class="mb-5">Mision</h2>

          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
            
              <p>
              Somos un grupo financiero orientado al desarrollo rural integral del país, con capital privado y multisectorial con servicios de banca universal y cobertura nacional y regional, dirigido a toda la poblacion.
              </p>
            </div>
          </div>
        </div>

      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="vision">
        <div class="my-auto">
          <h2 class="mb-5">Vision</h2>

          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
             
               <p>
              Ocupar en la región la posición de Grupo Financiero líder en el financiamiento del desarrollo, a través de sus agencias y diferentes canales; con rentabilidad justa sin descuidar la responsabilidad social.
              
              </p>
            </div>
          </div>
          </div>
      </section>

      

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="beneficios">
        <div class="my-auto">
          <h2 class="mb-5">Beneficios</h2>
          <p>
    Permite organizar tu tiempo de manera eficiente al poder administrar tus cuentas de ahorro y monetarias, y llevar un control de tus    préstamos, en una versión segura y eficiente.
   
</p>
          <p class="mb-0"> Comodidad de poder realizar tus transacciones desde cualquier lugar a nivel nacional e internacional.
    Disponibilidad las 24 horas para realizar consultas.</p>
        </div>
      </section>

      

    </div>

    
    <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="menu">
        <div class="my-auto">
          <h2 class="mb-5">Menu</h2>
<p class="mb-5"> Permite elegir , crear y editar usuarios, debes ser administrador para entrar a esta seccion.</p>
  <div class="text-center">

	<a href="menu.php" class="btn btn-success">INGRESAR</a>
</div>
   </div>
         
      </section>

    </div>
    

<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="login">
        <div class="my-auto">
          <h2 class="mb-5">Mi cuenta</h2>
<p class="mb-5">A CONTINUACION SE MUESTRAN SUS CUENTAS Y SALDO DISPONIBLE.</p>
<div class="text-center">

	<a href="#myModal" class="btn btn-success" data-toggle="modal">SALIR</a>
</div>

<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">
				<div class="avatar">
					<img src="img/avatar.png" alt="Avatar">
				</div>				
				<h4 class="modal-title">Login</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form action="controlador/controlador.php" method="post">
					<div class="form-group">
						<input type="text" class="form-control" name="user" placeholder="Usuario" required="required">		
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Contraseña" required="required">	
					</div>        
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Iniciar Sesión</button>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<a href="#">Olvido su contraseña? Restaurar</a>
			</div>
		</div>
	</div>
</div> 
 
  </div>

          
      
      </section>

    <script src="librerias/jquery/jquery.min.js"></script>
    <script src="librerias/bootstrap/js/bootstrap.bundle.min.js"></script>

  
    <script src="librerias/jquery-easing/jquery.easing.min.js"></script>

    <script src="librerias/jquery/resume.min.js"></script>

  </body>

</html>
