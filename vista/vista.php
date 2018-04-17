

<!DOCTYPE html>
<html lang="es">
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
	  <h1>Usuarios</h1>
       <?php
		$total=count($pd);
		if($total<1){
		print "<script>window.location='../indexError.html';</script>";
			}
		 else {
			$user_name=$pd[0]["nombres"];	$user2=$pd2[0];	
			session_start();
			$_SESSION['user_name']=$user_name;
			$_SESSION['user1']=$user2;
			 }
			
			header('location:../home.php');	
       	//print "<script>window.location.assign = '../home.html';</script>";
    
//print "<script>window.location='../home.html';</script>";
		
	  
       ?>
    
	
    
    
	  <?php if (isset($_SESSION['user_name'])) : ?>
   <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                   
                        <strong>Mahesh</strong>
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
											
											
											
									
											
											
											Bienvenido <?php $_SESSION["user_name"]; ?>	
										
									
											</strong></p>
                                        <p class="text-left small">justdemo@gmail.com</p>
                                        <p class="text-left">
                                            <a href="#" class="btn btn-primary btn-block btn-sm">Logout</a>
                                            
                                          <form action="controlador/controlador.php" method="post">
					<div class="form-group">
						<input type="text" class="form-control" name="user" placeholder="Correo" required="required">		
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Contrasena" required="required">	
					</div>        
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Iniciar Sesion</button>
					</div>
				</form>
				
				  
                               



                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="navbar-login navbar-login-session">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p>
                                        	<a href="#" class="btn btn-primary btn-block">My Profile</a>
                                            <a href="#" class="btn btn-danger btn-block">Change Password</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
            
        <?php    
        else:?>
   <div class="alert alert-warning">
  <strong>Warning!</strong>NO esta autorizado a ver este contenido, logueese primero
</div>

<?php endif; ?>
    
     <script src="librerias/jquery/jquery.min.js"></script>
    <script src="librerias/bootstrap/js/bootstrap.bundle.min.js"></script>

  
    <script src="librerias/jquery-easing/jquery.easing.min.js"></script>

    <script src="librerias/jquery/resume.min.js"></script>
</body>
</html>

