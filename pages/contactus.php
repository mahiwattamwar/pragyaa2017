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

    <?php require '../includes/connect.php'; ?>

<div class="row">
  <div class="col s12 m3"></div>

<div class="col s12 m6">
    <div class="card-panel teal">
      <span class="white-text">Our site is under construction you can leave your email id and we will get in touch soon..!</span>
    </div><br>

    <div class="card horizontal">
      <div class="card-stacked">
        
        <div class="card-content brown-text">   
          <?php require '../includes/contactvalid.php'; ?>
            <form action="contactus.php" method="post" enctype="multipart/form-data">
            
            <div class="input-field col s12 m12">
              <input id="name" type="text" class="validate" name="f_name" required>
              <label for="name">Name</label>
            </div>

            <!-- <div class="input-field col s12 m12"> -->
            <!-- <p> -->
              <input name="sex" type="radio" id="male" value="male" checked/>
              <label for="male">Male</label>

              <input name="sex" type="radio" id="female" value="female"/>
              <label for="female">Female</label>
            <!-- </p> -->
            <!-- </div> -->

            <div class="input-field col s12 m12">
              <input id="city" type="text" class="validate" name="city" required>
              <label for="city">City</label>
            </div>

            <div class="input-field col s12 m12">
              <input id="email" type="email" class="validate" name="email" required>
              <label for="email">Email</label>
            </div>

            <div class="input-field col s12">
              <textarea id="message" class="materialize-textarea" name="message" length="150"></textarea>
              <label for="message">Message</label>
            </div>
            
        </div>

        <div class="card-action">
          <button class="btn waves-effect waves-light" type="submit" name="send">Send
            <i class="material-icons right">send</i>
          </button>
        </div>
      </form>
      <?php //require '../includes/connect.php'; ?>
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