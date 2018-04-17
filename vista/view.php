<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
<title>Banca Virtual</title>
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
</head>
<body>	
<h1>Usuarios</h1>
       <?php
		$total=$pd;
		if($total<1){
		
		print "<script>window.location='../indexError.html';</script>";
			}
		else {
				header('location:../index.html');	
			
			}
		?>
</body>
</html>

