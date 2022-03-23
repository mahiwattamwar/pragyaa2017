<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-devive-width, initial-scale=1.0">
	<title>Pragyaa-2017</title>
	<link href="../css/mdl-overwrite.css" rel="stylesheet">
  <!-- mdl -->
	<link href="../css/material.css" rel="stylesheet">
  <script src="../js/material.js"></script>
  <!-- mdl-ends -->

</head>
<body>
<?php include 'connect.php'; ?>
<?php
  if(isset($_POST['submit'])) {
		$post_event_name = $_POST['event_name'];
	  	$post_dep = $_POST['dep'];
	  	$post_category = $_POST['category'];
	  	$post_rules = $_POST['rules'];
	  	$post_descr = $_POST['descr'];
	  	$post_arena = $_POST['arena'];
	  	$post_requir = $_POST['requir'];
	  	$post_rounds = $_POST['rounds'];
	  	$post_coordis = $_POST['coordis'];
		$post_img = $_FILES['img']['name'];
		$image_tmp = $_FILES['img']['tmp_name'];

		if ($post_event_name=='' && $post_dep=='' && $post_category=='' && $post_rules=='' && $post_descr=='' && $post_arena=='' && $post_requir=='' && $post_rounds=='' && $post_coordis=='' && $post_img=='') {
			?><center><h1>You can't submit a blank form..!</h1></center><?php
		}else{
			move_uploaded_file($image_tmp, "../images/$post_img");
		  	$insert_query = "INSERT INTO event (event_name, dep, category, rules, descr, arena, requir, rounds, coordis, img) VALUES ('$post_event_name','$post_dep','$post_category','$post_rules','$post_descr','$post_arena','$post_requir','$post_rounds','$post_coordis','$post_img')";
		  	
		  	if(mysql_query($insert_query)){
		    	echo"<center><h1>Great job ;) </h1></center>";
		  	}else{
				echo "<center><h1>Some error occurred please contact pragyaa web team<h1><center>";
			}
		}
	}
?>

<div class="mdl-layout mdl-js-layout mdl-color--grey-100">

	<main class="mdl-layout__content">
		<h1 class="">Pragyaa 2k17</h1>
		<div class="mdl-card mdl-shadow--6dp">
			<div class="mdl-card__title mdl-color--primary mdl-color-text--white">
        <h2 class="mdl-card__title-text">Events Info</h2>
			</div>
	  	<div class="mdl-card__supporting-text">
				<form action="eventInfo.php" method="post" enctype="multipart/form-data">
					<div class="mdl-textfield mdl-js-textfield">
						<textarea class="mdl-textfield__input" type="text" name="event_name" ></textarea>
						<label class="mdl-textfield__label" for="event_name">Event Name</label>
					</div>
          <div class="mdl-textfield mdl-js-textfield">
						<textarea class="mdl-textfield__input" type="text" name="dep" ></textarea>
						<label class="mdl-textfield__label" for="dep">Department</label>
					</div>
          <div class="mdl-textfield mdl-js-textfield">
						<textarea class="mdl-textfield__input" type="text" name="category" ></textarea>
						<label class="mdl-textfield__label" for="category">Category</label>
					</div>
          <div class="mdl-textfield mdl-js-textfield">
						<textarea class="mdl-textfield__input" type="text" name="rules" ></textarea>
						<label class="mdl-textfield__label" for="rules">Rules</label>
					</div>
          <div class="mdl-textfield mdl-js-textfield">
						<textarea class="mdl-textfield__input" type="text" name="descr" ></textarea>
						<label class="mdl-textfield__label" for="descr">Description</label>
					</div>
          <div class="mdl-textfield mdl-js-textfield">
						<textarea class="mdl-textfield__input" type="text" name="arena" ></textarea>
						<label class="mdl-textfield__label" for="arena">Arena</label>
					</div>
          <div class="mdl-textfield mdl-js-textfield">
						<textarea class="mdl-textfield__input" type="text" name="requir" ></textarea>
						<label class="mdl-textfield__label" for="requir">Requirements</label>
					</div>
          <div class="mdl-textfield mdl-js-textfield">
						<textarea class="mdl-textfield__input" type="text" name="rounds" ></textarea>
						<label class="mdl-textfield__label" for="rounds">Rounds</label>
					</div>
          <div class="mdl-textfield mdl-js-textfield">
						<textarea class="mdl-textfield__input" type="text" name="coordis" ></textarea>
						<label class="mdl-textfield__label" for="coordis">Co-ordinators main & joint</label>
					</div>
          <br><br>
          <div class="mdl-textfield mdl-js-textfield">
            <style>#file { display: none }</style>
            <input type="file" name="img" id="file">
            <label for="file" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
              Upload a pic
            </label>
			</div>
					<div class="mdl-card__actions mdl-card--border">
						<button class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" type="submit" name="submit">Submit</button>
						<p style="position: absolute; right: 1em;">-pragyaa web team</p>
					</div>
				</form>
			</div>

		</div>
	</main>
</div>
</body>
</html>
