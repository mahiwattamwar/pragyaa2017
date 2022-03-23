<?php

	include "../includes/connect.php";
// $db=new mysqli("127.0.0.1", "root", "", "pragyaa");
// 	if (!$db) {
// 	die('Cant connect to server'.mysql_error());
// 	}

	if($_GET['id'] > 0) {
		$e_id=$_GET['id'];
		error_reporting(E_ALL);

    $select_event_query="SELECT * FROM event WHERE e_id='$e_id' ";

    $select_event=$db->query($select_event_query);

	while($row=$select_event->fetch_assoc()){
		$reg = $row['e_id'];
		$d_id=$row['d_id'];
		$d_name=$row['d_name'];
		$e_type=$row['e_type'];
		$e_name=$row['e_name'];
		$e_img=$row['e_img'];
		$desc=$row['desc'];
		$rules=$row['rules'];
		$gameplay=$row['gameplay'];
		$specs=$row['specs'];
    }

?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Events</title>
	<!-- <meta name="description" content="A simple content slider with depth-like zoom functionality" /> -->
	<!-- <meta name="keywords" content="blueprint, template, slider, zoom, javascript, depth, 3d, css" /> -->
	<!-- <meta name="author" content="Codrops" /> -->
	<link rel="shortcut icon" href="favicon.ico">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- Feather Icons -->
	<link rel="stylesheet" type="text/css" href="fonts/feather/style.css">
	<!-- General demo styles & header -->
	<link rel="stylesheet" type="text/css" href="../css/demo.css" />
	<!-- Component styles -->
	<link rel="stylesheet" type="text/css" href="../css/component.css" />
	<script src="../js/modernizr.custom.js"></script>
</head>
<body>
	<!-- Main container -->
	<div class="container">
		<!-- Blueprint header -->
		<header class="bp-header cf">
			<span><?php echo " ".$e_name; ?><br><br>
			<?php $select_coordi_query="SELECT * FROM coordis WHERE e_id='$e_id'";
			    $select_coordi=$db->query($select_coordi_query);
				while($row=$select_coordi->fetch_assoc()){
			      $co_post=$row['co_post'];
			      $co_name=$row['co_name'];
			      $co_num=$row['co_num'];
			      $co_img=$row['co_img'];
			    ?>
			<?php echo $co_name; ?><br><?php echo $co_post; ?><br><?php echo $co_num; ?>
			<?php }?>
			</span>
			<h1></h1>
			<!-- <nav>
				<a href="http://tympanus.net/Blueprints/FilterableProductGrid/" class="bp-icon bp-icon-prev" data-info="previous Blueprint"><span>Previous Blueprint</span></a>
				<a href="" class="bp-icon bp-icon-next" data-info="next Blueprint"><span>Next Blueprint</span></a>
				<a href="http://tympanus.net/codrops/?p=24330" class="bp-icon bp-icon-drop" data-info="back to the Codrops article"><span>back to the Codrops article</span></a>
				<a href="http://tympanus.net/codrops/category/blueprints/" class="bp-icon bp-icon-archive" data-info="Blueprints archive"><span>Go to the archive</span></a>
			</nav> -->
		</header>
		<!-- Grid -->
		<section class="slider">
			<div class="slide slide--current" data-content="<?php echo "content-".$e_id; ?>">
				<div class="slide__mover">
					<div class="zoomer flex-center">
						<img class="zoomer__image" src="" alt="" />
						<div class="preview">
							<img src="../eve_img/<?php echo $e_img; ?>" alt="" />
							<div class="zoomer__area zoomer__area--size-2"></div>
						</div>
					</div>
				</div>
				<h2 class="slide__title">
				<span>Pragyaa</span>
				<?php echo $e_name;?></h2>
			</div>
            <nav class="slider__nav">
				<button class="button button--nav-prev">
					<i class="material-icons">keyboard_arrow_left</i>
					<span class="text-hidden">Previous product</span>
				</button>
				<button class="button button--zoom">
					<!-- <i class="icon icon--zoom"></i> -->
					<i class="material-icons">remove_red_eye</i>
					<span class="text-hidden">View details</span>
				</button>
				<button class="button button--nav-next">
					<i class="material-icons">keyboard_arrow_right</i>
					<span class="text-hidden">Next product</span>
				</button>
			</nav>			
		</section>


		<!-- /slider-->
		<section class="content">
		<!-- <section class=""> -->
			<div class="content__item" id="<?php echo "content-".$e_id; ?>">
				
				<div class="content__item-inner">
					<h2><?php echo $e_name; ?></h2>
					<h3>Description</h3>
					<h4><?php echo $desc; ?></h4>

					<h3>Rules</h3>
					<p><?php echo $rules; ?></p>

					<h3>Gameplay</h3>
					<p><?php echo $gameplay; ?></p>

					<h3>Specifications</h3>
					<p><?php echo $specs; ?></p>
					
					<a href="eve_reg3.php?e_id=<?php echo $reg?>"><h3>Register here</h3></a>
					
				</div>
			</div>
			<button class="button button--close"><i class="material-icons">close</i><span class="text-hidden">Close content</span></button>
		</section>
	</div>
	<script src="../js/classie.js"></script>
	<script src="../js/dynamics.min.js"></script>
	<script src="../js/main.js"></script>
</body>
</html>
<?php } else { ?>
	<h1>Id not set</h1>
	<?php } ?>