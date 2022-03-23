<!DOCTYPE html>

<html lang="en">

<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

  <title>Select Event</title>

<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
          

  <!-- CSS  -->

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">

  <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>

  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>



</head>

<body>

    <?php //require '../includes/connect.php'; ?>
    <?php //require '../includes/navbar.php'; ?>

    



<div class="row">

  <div class="col s12 m3"></div>



<div class="col s12 m6">

    <div class="card-panel teal">

      <span class="white-text">Select Event</span>

    </div><br>



    <div class="card horizontal">
      <div class="card-stacked">
        <div class="card-content brown-text"> 
            <form action="" method="get" enctype="multipart/form-data">

            <div class="input-field col s12">

              <select>
                <option value="" disabled selected>Choose your option</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
              </select>
              <label>Materialize Select</label><BR>
            
          
              <select name="event">

                <option value="" disabled selected>Choose Event</option>

                <?php
                $event_query = $db->query("SELECT * FROM event");

                while($row=$event_query->fetch_assoc()){

                 echo $eve_id=$row['e_id'];

                 echo $eve_name=$row['e_name'];

                   ?>

                <option value="<?php //echo $eve_id ?>"> <?php //echo $eve_name; ?> </option>

                <?php //} ?>

              </select>

            </div>

            <div class="input-field col s12">
              <select>
                <option value="" disabled selected>Choose your option</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
              </select>
              <label>Materialize Select</label>
            </div>
            <BR>
            <BR>
      <div class="card-action">

        <button class="btn waves-effect waves-light" type="submit" name="register">Select

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

  
    <script type="text/javascript">


  $('#textarea1').val('New Text');
  $('#textarea1').trigger('autoresize');
  
    $(document).ready(function() {
      $('select').material_select();
    });

     $('select').material_select('destroy');
  
  </script>

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>

  <script src="../js/materialize.js"></script>

  <script src="../js/init.js"></script>

  <script src="../js/script.js"></script>

</body>

</html>