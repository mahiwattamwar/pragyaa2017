<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Select event</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
  <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <!-- <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/> -->
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


  $(document).ready(function() {
    $('select').material_select();
  });

  $(document).ready(function() {
    $('select').material_select();
  });

  $('select').material_select('destroy');
        
            
        
  </script>
</head>
<body>
    <?php require '../includes/navbar.php'; ?>
    <?php require '../includes/connect.php'; ?>
    <div class="container">        
        <div class="row">

          <!-- SignUp form starts here-->

          <div class="col s12 m4">
            
          </div>
          <form action="eve_reg3.php" method="get" enctype="multipart/form-data">
          <div class="col s12 m4">
            



            <div class="card blue-grey darken-1">
              <div class="card-content white-text">
              
                <span class="card-title">Event</span>

                <div class="row">

                  <div class="input-field col m12 s12">
                    <br>
                    <!-- <select name="e_id"> -->
                      <!-- <option value="" disabled selected>Choose your option</option> -->
                      <?php

                        $event_query = $db->query("SELECT * FROM event WHERE e_type!='main' && e_id!=47");

                        while($row=$event_query->fetch_assoc()){

                         $eve_id=$row['e_id'];

                         $eve_name=$row['e_name'];

                           ?>
                      

                      <?php if($eve_id!=0 && !empty($eve_id) && !empty($eve_name)){ ?>
                      
                      <!-- <option value="<?php //echo $eve_id ?>"> <?php //echo $eve_name; ?> </option> -->

                     
                        <input name="e_id" type="radio" id="<?php echo $eve_id ?>" value="<?php echo $eve_id ?>" />
                        <label for="<?php echo $eve_id ?>"><?php echo $eve_name; ?></label>
                      <br>
                      
                      <?php } ?>
                      
                      <?php } ?>
                    <!-- </select> -->

                    
                    
                  </div>

                </div>
              </div>
              <div class="card-action">
                <button class="waves-effect waves-light btn" type="submit">Submit</button>
              </div>            
            </div>
          </div>

          </form>
          <div class="col s12 m4">
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