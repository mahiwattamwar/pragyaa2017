<!-- footer starts here -->
<footer class="page-footer" style="position: relative !important;
    width: 100% !important;
    bottom: 0 !important;">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Practical's project</h5>
          <p class="grey-text text-lighten-4">Some text about it..!</p>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="white-text">For Hugs and Bugs..,</h5>
          <form method="post" enctype="multipart/form-data">
            <div class="input-field col s6">
              <input name="fName" id="fName" type="text" class="validate white-text" style="border-bottom: 1px solid white;">
              <label for="fName" class="white-text">Name</label>
            </div>
            <div class="input-field col s6">
              <input id="fMark" type="number" name="fMark" class="validate white-text" style="border-bottom: 1px solid white;">
              <label for="fMark" class="white-text">Rate it out of 10</label>
            </div>
            <div class="input-field col s12">
              <textarea id="textarea1" class="materialize-textarea white-text" name="fSug" style="border-bottom: 1px solid white;"></textarea>
              <label for="textarea1" class="white-text">Feedback</label>
            </div>
            <button class="btn waves-effect waves-light" type="submit" name="submit">Submit
              <i class="material-icons right">send</i>
            </button>
          </form>
          <?php
            if(isset($_POST['submit'])){
              $fName=$_POST['fName'];              
              $fSug=$_POST['fSug'];

              if($_POST['fMark']<11){
               $fMark=$_POST['fMark'];
              }
              else{
                echo "Thnx but rate us only under 10";
                exit();
              }

              $insert=$db->query("INSERT INTO feedback (id, fName, fMark, fSug) VALUES ('', '$fName', '$fMark', '$fSug')");

              if($insert){ ?>
              <div class="card-panel teal">
                <span class="white-text"><?php echo "Thank you for getting in touch!" ?>
                </span>
              </div>
            <?php }
            else{ ?>
              <div class="card-panel teal">
                <span class="white-text"><?php echo $error="Some error occured please try again"; ?>
                </span>
              </div>
            <?php }
            }
          ?>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container row">
      <div class="col s12 m6">© 2016 ALL RIGHTS RESERVED</div>
      <div class="col s12 m6"><a class="grey-text text-lighten-4 right" href="https://docs.google.com/document/d/1gVicigIDPJ3CL1G69tJqf9wHVn0YTvk7hLymakLrf1s/pub">NIKHIL BHANDARKAR</a></div>
      </div>
    </div>
</footer>
  <!-- footer ends here -->
