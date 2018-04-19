<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head> <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  
    <title>Banca Virtual</title>
    <link href="../librerias/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="../librerias/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../librerias/devicons/css/devicons.min.css" rel="stylesheet">
    <link href="../librerias/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="../vendor/font-awesome/css/font-awesome.min.css">
    
    <link href="../librerias/css/resume.css" rel="stylesheet">
<link href="../librerias/css/resume.min.css" rel="stylesheet">
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
	  
	  
	  
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none">Banca Virtual</span>
        <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="../img/profile3.png" alt="">
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="../menuCliente.php">Regresar</a>
            
          </li>
  
         
        </ul>
      </div>
    </nav>
  <div class="container">
            <div class="row">
                <h3>Movimiento de Cuenta</h3>
            </div>
            <div class="row">    
                <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Monto</th>
                          <th>Descripción</th>
                          <th>Fecha</th>
                        </tr>
                      </thead>
                      <tbody>
                      
       
<?php
require_once "../configurar.php";
$enlace = mysqli_connect(HOST, USER, PASS, DBNAME);

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

$consulta = "SELECT * FROM Movimiento ";

if ($resultado = mysqli_query($enlace, $consulta)) {


    /* obtener el array asociativo */
    while ($fila = mysqli_fetch_row($resultado)) {

     echo "<tr><td>$fila[0]</td><td>$fila[1]</td><td>$fila[3]</td><td>$fila[4]</td></tr> \n"; 
   
    }
   
    /* liberar el conjunto de resultados */
    mysqli_free_result($resultado);
}

/* cerrar la conexión */
mysqli_close($enlace);
?>
               </tbody>
                </table>
        </div>
    </div> <!-- /container -->
 <script src="../librerias/jquery/jquery.min.js"></script>
    <script src="../librerias/bootstrap/js/bootstrap.bundle.min.js"></script>

  
    <script src="../librerias/jquery-easing/jquery.easing.min.js"></script>

    <script src="../librerias/jquery/resume.min.js"></script>

  </body>

</html>
