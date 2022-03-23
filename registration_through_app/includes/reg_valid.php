<?php
include '../includes/connect.php';
if(isset($_POST['register'])){

if  (isset($_POST['t1']) && isset($_POST['t2']) && isset($_POST['t3']) && isset($_POST['t4']) && isset($_POST['t5'])) {
 
		$name=$_POST['t1'];
		if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
		  $nameErr = "Only letters and white space allowed"; 
		}
		$email=$_POST['t2'];
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		  $emailErr = "Invalid email format"; 
		}
		$college=$_POST['t3'];
		$city=$_POST['t4'];
		$mob=$_POST['t5'];
		$acc=$_POST['r2'];
		$foo=$_POST['r1'];
		$ip=$_SERVER['REMOTE_ADDR'];
		$characters='1234567890';
		$string='';
		for($i=0;$i<=6;$i++) {
			$string.=$characters[rand(0,strlen($characters)-1)];
			$str=$string;
		}
		$to=$email;
		$tos='nikhyl777@gmail.com';
		$subject='Registration Successful';
		$body='Hello '.$name.'
		Registrations are closed you will be notified on next pragyaa.
		Your unique id is '.$str .'.
		Your entered details are as follows :
			College : '.$college.'
			City : '.$city.'
			Mobile number : '.$mob.'
			Accomodation Required : '.$acc.'
		For more details contact www.pragyaa.org';
		$bodys='Name : '.$name.'
		Unique Id : '.$str .'. 
		Entered details are as follows :
			College : '.$college.'
			City : '.$city.'
			Mobile number : '.$mob.'
			Accomodation Required : '.$acc.'
			Email : '.$email.';
			IP : '.$ip.'';
		
		$headers='From: pragyaa_admin@pragyaa.org';
	if(!empty($name) && !empty($email) && !empty($college) && !empty($city) && !empty($mob)) {
		
				
					if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
		 				 $error = "Enter a valid name";
		 			} else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		 				$error = $error." Enter a valid email-id";
		 			} else if(!preg_match("/^[0-9]{10}$/", $mob) ) { 
		  				$error = $error." Enter a valid email-id";
		  			}
		  			else if(!preg_match("/^[a-zA-Z ]*$/",$city)) { 
		  				$error = $error." Enter a valid city name";
		  			}
		  			else if(empty($error)){
		  				
		  				$query1="SELECT * FROM `registration` WHERE `email`='".$email."'";
		  				if($query_run=$db->query($query1)) {
		  				
		  					
		  					if ($query_run->num_rows > 0) {
		  						
		  						?>
		  						<div class="card-panel teal">
						          <span class="white-text err">You have already registered..!</span>
						        </div>
		  						<?php
		  							}
		  					else  {
		  						$query="INSERT INTO `registration` VALUES('$name','$email','$college','$city','$mob','$acc','$foo','$string','')"; 
								if($query_run=@ $db->query($query)) {
									echo '';
		  						mail($to,$subject,$body,$headers);
		  						mail($tos,$subject,$bodys,$headers);
		  						?>
		  						<div class="card-panel teal">
						          <span class="white-text">Thnx for registration, you will get an email in no time..!</span>
						        </div>
		  						<?php
		  						}
		  				}
		  			
		  			}
					
			
			
	} else{
		echo $error;
	}
	}
	else {
	
	?>
		<div class="card-panel teal">
          <span class="white-text">All fields are required..!</span>
        </div>
	<?php;}
	
	}
	}