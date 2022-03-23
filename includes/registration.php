<?php
	//require_once "includes/connect.php";
	
	//if(isset($_POST['submit'])){
	//	if(isset($_POST['first_name'])){
	//		$first_name= mysqli_reaL_escape_string($db ,$_POST['first_name']);			
	//	}
	//	
	//	if(isset($_POST['last_name'])){
	//		$last_name= mysqli_reaL_escape_string($db ,$_POST['last_name']);			
	//	}
	//	
	//	if(isset($_POST['college_name'])){
	//		$college_name= mysqli_reaL_escape_string($db ,$_POST['college_name']);			
	//	}
	//	
	//	if(isset($_POST['city'])){
	//		$city= mysqli_reaL_escape_string($db ,$_POST['city']);			
	//	}
	//	
	//	if(isset($_POST['phNum'])){
	//		$phNum= mysqli_reaL_escape_string($db ,$_POST['phNum']);			
	//	}
	//	
	//	if(isset($_POST['acc'])){
	//		$acc= $_POST['acc']);
	//	} else{
	//		$error=;
	//	}
		echo pragyaa;


		$d=date ("d");
		$m=date ("m");
		$y=date ("Y");
		$t=time();
		$dmt=$d+$m+$y+$t;    
		$ran= rand(0,10000000);
		$dmtran= $dmt+$ran;
		$un=  uniqid();
		$dmtun = $dmt.$un;
		$mdun = md5($dmtran.$un);
		$sort=substr($mdun, 5); // if you want sort length code.
		
		echo $mdun;
	}
?>