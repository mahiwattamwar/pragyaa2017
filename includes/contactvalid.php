<?php
	require "../includes/connect.php";
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	if(isset($_POST['send']))
		{
		$name= mysqli_real_escape_string($db, $_POST['f_name']);
		if(!preg_match("/^[a-zA-Z ]*$/",$name)){
			$error=$error." A name should contain only characters and white spaces.";
		}

		$city= mysqli_real_escape_string($db, $_POST['city']);
		if(!preg_match("/^[a-zA-Z ]*$/",$city)){
			$error=$error." A city name should contain only characters and white spaces.";
		}

		$gender=$_POST['sex'];

		$email = $_POST["email"];

		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		  $error = $error." Please enter a valid email format.";
		}
		
		$message= mysqli_real_escape_string($db, $_POST['message']);

		if(empty($error)){
		
			$insert_query=$db->query("INSERT INTO feedback (id, name, gender, email, message, city) VALUES ('', '$name', '$gender', '$email', '$message', '$city')");
			
			if($insert_query){
			?>
				<div class="card-panel teal">
		          		<span class="white-text"> <?php echo "Successfuly sent your feedback, thankyou for getting in touch." ?>
		          		</span>
		        	</div>		
			<?php } else{ ?>
			<div class="card-panel teal">
		          <span class="white-text"><?php echo "Thnx we will get in touch soon..!"; ?>
		          </span>
		        </div>
			<?php }

		} else { ?>
			<div class="card-panel teal">
	          		<span class="white-text"><?php echo $error; ?>
	          		</span>
	        	</div>
		<?php }


	}
?>