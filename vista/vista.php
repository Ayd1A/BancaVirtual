

<!DOCTYPE html>
<html lang="es">

       <?php
		$total=count($pd);
		if($total<1){
		print "<script>window.location='../indexError.html';</script>";
			}
		 else {
			$user_name=$pd[0]["nombres"];	$user2=$pd2[0];	$user3=$pd3;	$user4=$pd4;
			session_start();
			$_SESSION['user_name']=$user_name;
			$_SESSION['user1']=$user2;
			$_SESSION['gettable']=$user3;
			$_SESSION['mov']=$user4;
			 }
			
			header('location:../home.php');	
       	//print "<script>window.location.assign = '../home.html';</script>";
    
//print "<script>window.location='../home.html';</script>";
		
	  
       ?>
    
	

