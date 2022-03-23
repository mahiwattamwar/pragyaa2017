<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Register here</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
  <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

    <?php require '../includes/navbar.php'; ?>

<div class="row">
  <div class="col s12 m3"></div>

<div class="col s12 m6">
    <div class="card-panel teal">
      <span class="white-text">Register here</span>
    </div><br>

    <div class="card horizontal">
      <div class="card-stacked">
        
        <div class="card-content brown-text">   

            <form action="fac_search.php" method="get" enctype="multipart/form-data">

            <div class="input-field col s12">
              <select name="srchYear">
                <option value="" disabled selected>Choose Event</option>
                <?php  
                //$event_query = $db->query("SELECT * FROM event");
                //while($row=$sub_query->fetch_assoc()){
                //  $eve_id=$row['eId'];
                //  $eve_name=$row['eName'];
                   ?>         
                <option value="<?php //echo $eId ?>"> <?php //echo $eve_name; ?></option>
              </select>
            </div>            

            <div class="input-field col s12 m12">
              <input id="f_name" type="text" class="validate" name="f_name" required>
              <label for="f_name">Full Name</label>
            </div> 

            <!-- <div class="input-field col s12 m12"> -->
            <p>
              <input name="sex" type="radio" id="test1" />
              <label for="test1">Male</label>
            </p>

            <p>
              <input name="sex" type="radio" id="test2" />
              <label for="test2">Female</label>
            </p>
            <!-- </div> -->

            <div class="input-field col s12 m12">
              <input id="p_email" type="email" class="validate" name="p_email" required>
              <label for="p_email">Email</label>
            </div> 

            <div class="input-field col s12 m12">
              <input id="p_num" type="number" maxlength=10 class="validate" name="p_num" required>
              <label for="p_num">Phone Number</label>
            </div> 

            <div class="input-field col s12 m12">
              <input id="college" type="text" class="validate" name="college" required>
              <label for="college">College</label>
            </div>

            <div class="input-field col s12 m12">
              <input id="branch" type="text" class="validate" name="branch" required>
              <label for="branch">Branch</label>
            </div>

            <div class="input-field col s12">
              <select name="Year">
                <option value="" disabled selected>Choose Year</option>       
                <option value="1">First Year</option>
                <option value="2">Second Year</option>
                <option value="3">Third Year</option>
                <option value="4">Fourth Year</option>
              </select>
            </div> 

            <div class="input-field col s12 m12">
              <input id="city" type="text" class="validate" name="city" required>
              <label for="city">City</label>
            </div>

            <p>
              <input type="checkbox" id="acco" />
              <label for="acco">I want Accomodation</label>
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
  <script src="../js/materialize.js"></script>
  <script src="../js/init.js"></script>
  <script src="../js/script.js"></script>
</body>
</html>