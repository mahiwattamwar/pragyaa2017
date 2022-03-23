<?php
  if(isset($_GET['e_id'])){
      $e_id=$_GET['e_id'];
    }
    else{
      header("location: eve_reg2.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Register for event</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
  <!-- <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/> -->
  <script type="text/javascript">
    
  $('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrainWidth: false, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: false, // Displays dropdown below the button
      alignment: 'left', // Displays dropdown with edge aligned to the left of button
      stopPropagation: false // Stops event propagation
    }
  );


  $('.dropdown-button').dropdown('open');
        

  $('.dropdown-button').dropdown('close');

  $(document).ready(function() {
    $('select').material_select();
  });


  $('select').material_select('destroy');
            
        
  </script>
</head>
<body>
    <?php require '../includes/navbar.php'; ?>
    <?php require '../includes/connect.php'; ?>

    <?php
      $e_name_query = $db->query("SELECT * FROM event WHERE e_id = '$e_id'");

      while($row1=$e_name_query->fetch_assoc()){
        $e_name=$row1['e_name'];
        $d_name=$row1['d_name'];
      }
    ?>
    <div class="container">        
        <div class="row">

          <!-- SignUp form starts here-->

          <div class="col s12 m2">
          </div>
          <div class="col s12 m8">
            <div class="card blue-grey darken-1">
              <div class="card-content white-text">
              <form method="post" enctype="multipart/form-data">
                <span class="card-title">Register for <?php 
                if($d_name!=0){
                  echo $d_name." ";
                }
                echo $e_name; 

                ?></span>
                <div class="row">

                  <div class="input-field col s12 m12">
                    <input id="t_name" type="text" class="validate" name="t_name" required>
                    <label for="t_name" data-error="wrong" data-success="right">Team name</label>
                  </div>

                  <?php
                  $mem_query = $db->query("SELECT * FROM eDetails WHERE e_id = '$e_id' ");

                  while($row=$mem_query->fetch_assoc()){

                         $e_id=$row['e_id'];

                         $max_d = $row['max'];

                         $min = $row['min'];
                  }
                  ?>

                  <?php 
                  $max = $max_d;
                  $req = "required";
                  while($max>0) { ?>

                  <div class="input-field col s12 m12">
                    <input id="m_id" type="text" class="validate" name="<?php echo "m_id_".$max; ?>" <?php echo $req; ?>>
                    <label for="m_id" data-error="wrong" data-success="right">Members Pragyaa UID</label>
                  </div>

                  <?php $max--; 
                  $req= "";} ?>
                  

                </div>
              </div>
              <div class="card-action">
                <button class="waves-effect waves-light btn" name="submit" type="submit">Submit</button>
              </div>            
            </div>
          </div>

          </form>
          
          <div class="card-panel teal">
            <span class="white-text"><a href="../../pages/eve_reg2.php" class="white-text">For single participants team name should be your name.</a></span>
          </div><br>
          
          <!-- validation starts here -->

          <?php 

            if(isset($_POST['submit'])){
              if(preg_match("/^[a-zA-Z ]*$/",$_POST['t_name'])){
                $t_name= mysqli_reaL_escape_string($db ,$_POST['t_name']);      
              } else{
                $error="A team name should only contain characters and white spaces.";
              }
              
              $m_id_1 = $_POST['m_id_1'];
              $m_id_2 = $_POST['m_id_2'];
              $m_id_3 = $_POST['m_id_3'];
              $m_id_4 = $_POST['m_id_4'];
              $m_id_5 = $_POST['m_id_5'];
              $m_id_6 = $_POST['m_id_6'];
              $m_id_7 = $_POST['m_id_7'];

              // starts
              if(!empty($m_id_1)){
               $uid_query = $db->query("SELECT * FROM registration WHERE id = '$m_id_1' ");
                    if($uid_query->num_rows != 1){
                      $error = "There is no Unique ID like this, please register for pragyaa first and get Unique ID or try checking it.";
                    }
              }
              // ends

              // starts
              if(!empty($m_id_2)){
               $uid_query = $db->query("SELECT * FROM registration WHERE id = '$m_id_2' ");
                    if($uid_query->num_rows != 1){
                      $error = "There is no Unique ID like this, please register for pragyaa first and get Unique ID or try checking it.";
                    }
              }
              // ends

              // starts
              if(!empty($m_id_3)){
               $uid_query = $db->query("SELECT * FROM registration WHERE id = '$m_id_3' ");
                    if($uid_query->num_rows != 1){
                      $error = "There is no Unique ID like this, please register for pragyaa first and get Unique ID or try checking it.";
                    }
              }
              // ends

              // starts
              if(!empty($m_id_4)){
               $uid_query = $db->query("SELECT * FROM registration WHERE id = '$m_id_4' ");
                    if($uid_query->num_rows != 1){
                      $error = "There is no Unique ID like this, please register for pragyaa first and get Unique ID or try checking it.";
                    }
              }
              // ends

              // starts
              if(!empty($m_id_5)){
               $uid_query = $db->query("SELECT * FROM registration WHERE id = '$m_id_5' ");
                    if($uid_query->num_rows != 1){
                      $error = "There is no Unique ID like this, please register for pragyaa first and get Unique ID or try checking it.";
                    }
              }
              // ends

              // starts
              if(!empty($m_id_6)){
               $uid_query = $db->query("SELECT * FROM registration WHERE id = '$m_id_6' ");
                    if($uid_query->num_rows != 1){
                      $error = "There is no Unique ID like this, please register for pragyaa first and get Unique ID or try checking it.";
                    }
              }
              // ends
                    

              if(empty($error)){

                $insert_query = "INSERT INTO `eve_reg` (
                `t_name` ,
                `m1` ,
                `m2` ,
                `m3` ,
                `m4` ,
                `m5` ,
                `m6` ,
                `m7` ,
                `count`,
                `e_name`,
                `d_name`
                )
                VALUES (
                '$t_name', '$m_id_1', '$m_id_2', '$m_id_3', '$m_id_4', '$m_id_5', '$m_id_6', '$m_id_7','', '$e_name', '$d_name')

                ";

                

                $insert = $db->query($insert_query);
                if($insert){
                  ?>

                <div class="card-panel teal">
                  <span class="white-text">
                  Successfully registered your team, see you in PRAGYAA.
                  </span>
                </div>

               <?php } else{ ?>

               <div class="card-panel teal">
                  <span class="white-text">
                  Some error occured please contact admin.
                  </span>
                </div>

                <?php }

              } else {?>

              <div class="card-panel teal">
                <span class="white-text">
                <?php 
                echo $error;
                ?>
                </span>
              </div>

              <?php }      

            } ?>

            <!-- validation ends here -->
          <div class="col s12 m2">
          </div>
        </div>
      </div> 
      <!-- login form ends here--> 

    <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
  <!-- <script src="../js/materialize.js"></script> -->
  <script src="../js/init.js"></script>
  <script src="../js/script.js"></script>
  
</body>
</html>