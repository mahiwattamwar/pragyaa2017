<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Register here</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
  <!-- <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/> -->
  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

    <!-- Dropdown Structure -->
  <!-- <ul id="nav_drop" class="dropdown-content">
    <li><a href="#">Home</a></li>
    <li><a href="#">Submit</a></li>
    <li><a href="#">Notices</a></li>
    <li class="divider"></a></li>
    <li><a href="../pages/logout.php">LogOut</a></li>
  </ul> -->

  <nav>
    <div class="nav-wrapper white-text">
      <a href="#!" class="brand-logo white-text">Pragyaa 2017, Register</a>
      <ul class="right hide-on-med-and-down">
      </ul>
    </div>
  </nav>
<div class="row">
  <div class="col s12 m3"></div>

<div class="col s12 m6">

   <!-- <div class="card-panel teal">
       <span class="white-text"><a href="../../pages/eve_reg2.php" class="white-text"> Wanna register for event, click here </a></span>
    </div>   -->
    
    
    <br>
    
    <div class="card-panel teal">
      <span class="white-text">Register here for Pragyaa 2017,<br>
      for event registrations go to respective events page after registering here.</span>
    </div><br>

    <div class="card horizontal">

      <div class="card-stacked">
        
        <div class="card-content brown-text">   
	<?php require "../includes/reg_valid.php"; ?>
            <form action="registration.php" method="post" enctype="multipart/form-data">           

            <div class="input-field col s12 m12">
              <input id="f_name" type="text" class="validate" name="t1" required>
              <label for="f_name">Full Name</label>
            </div>

            <div class="input-field col s12 m12">
              <input id="college" type="text" class="validate" name="t3" required>
              <label for="college">College</label>
            </div>

            <div class="input-field col s12 m12">
              <input id="p_email" type="email" maxlength=50 length="50" class="validate" name="t2" required>
              <label for="p_email">Email</label>
            </div>

            <div class="input-field col s12 m12">
              <input id="p_num" type="number" maxlength=10 class="validate" name="t5" required>
              <label for="p_num">Phone Number</label>
            </div>

            <div class="input-field col s12 m12">
              <input id="city" type="text" class="validate" name="t4" required>
              <label for="city">City</label>
            </div>

            <p>
              <input type="checkbox" id="acco" value="yes" name="r2"/>
              <label for="acco" value="yes">I want Accomodation</label>
            </p>
            
        </div>

      <div class="card-action">
        <button class="btn waves-effect waves-light" type="submit" name="register">Register
          <i class="material-icons right">send</i>
        </button>
      </div>
      </form>
    </div>
  </div>
</div>

  <div class="col s12 m3"></div>

</div>
    
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
  <!-- <script src="../js/materialize.js"></script> -->
  <script src="../js/init.js"></script>
  <script src="../js/script.js"></script>
</body>
</html>