<?php

	include "../includes/connect.php";
	if($_GET['id'] > 0) {
		$d_id=$_GET['id'];

	$select_dept_query="SELECT * FROM dept where d_id='$d_id'";
	$select_dept=$db->query($select_dept_query);

	while($row=$select_dept->fetch_assoc()){
      $d_name=$row['d_name'];
    }

    $select_main_event_query="SELECT * FROM event WHERE d_name='$d_name' && de_id= 0 ";
    $select_main_event=$db->query($select_main_event_query);
	while($row=$select_main_event->fetch_assoc()){
      $m_e_type=$row['e_type'];
      $m_e_name=$row['e_name'];
      $m_desc=$row['desc'];
      $m_rules=$row['rules'];
      $m_gameplay=$row['gameplay'];
      $m_specs=$row['specs'];
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
		<header class="bp-header cf" style="width: 100%;">
			<span><?php echo $d_name." "; ?><?php echo $m_e_name; ?><br><br>

			    <div class="row">
			    <?php $select_m_coordi_query="SELECT * FROM coordis WHERE d_name='$d_name' && de_id= 0 ";
			    $select_m_coordi=$db->query($select_m_coordi_query);
				while($row=$select_m_coordi->fetch_assoc()){
			      $co_post=$row['co_post'];
			      $co_name=$row['co_name'];
			      $co_num=$row['co_num'];
			      $co_img=$row['co_img'];
			    ?>
			    	<div class=" col s4">
			    		<?php echo $co_name; ?><br><?php echo $co_post; ?><br><?php echo $co_num; ?>			
			    	</div><br>
			    	<?php } ?>
			    </div>
			
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
		<?php
			// for sub-events
		    $select_sub_event_query="SELECT * FROM event WHERE d_name='$d_name' && de_id != 0 ";
		    $select_sub_event=$db->query($select_sub_event_query);
		    $var='slide--current';
			while($row=$select_sub_event->fetch_assoc()){
				
				$s_de_id=$row['de_id'];
				$s_e_type=$row['e_type'];
				$s_e_name=$row['e_name'];
				$s_desc=$row['desc'];
				$s_rules=$row['rules'];
				$s_gameplay=$row['gameplay'];
				$s_specs=$row['specs'];
				$s_img=$row['e_img'];
				
    		?>
			<div class="slide <?php echo $var; ?>" data-content="<?php echo "content-".$s_de_id; ?>">
			  <?php $var=''; ?>
				<div class="slide__mover">
					<div class="zoomer flex-center">
						<img class="zoomer__image" src="../eve_img/<?php echo $s_img; ?>" alt="" />
						<div class="preview">
							<!-- <img src="../images/iphone-content-preview.png" alt="iPhone app preview" /> -->
							<div class="zoomer__area zoomer__area--size-2"></div>
						</div>
					</div>
				</div>
				<h2 class="slide__title">
				<span><?php echo $m_e_name; ?></span>
				<?php echo $s_e_name;?></h2>
			</div>
			<?php }?>
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
			<?php
			// for sub-event's modal
		    $select_sub_event_query="SELECT * FROM event WHERE d_name='$d_name' && de_id != 0 ";
		    $select_sub_event=$db->query($select_sub_event_query);
			while($row=$select_sub_event->fetch_assoc()){
				$reg = $row['e_id'];
				$s_de_id=$row['de_id'];
				$s_e_type=$row['e_type'];
				$s_e_name=$row['e_name'];
				$s_desc=$row['desc'];
				$s_rules=$row['rules'];
				$s_gameplay=$row['gameplay'];
				$s_specs=$row['specs'];
				// $s_img=$row['s_img'];
    		?>
			<div class="content__item" id="<?php echo "content-".$s_de_id; ?>">
				<!-- <img class="content__item-img rounded-right" src="../images/iphone-content.png" alt="Apple Watch Content" /> -->
				<div class="content__item-inner">
					<h2><?php echo $s_e_name; ?></h2>
					<h3>Description</h3>
					<h4><?php echo $s_desc; ?></h4>

					<h3>Rules</h3>
					<p><?php echo $s_rules; ?></p>

					<h3>Gameplay</h3>
					<p><?php echo $s_gameplay; ?></p>

					<h3>Specifications</h3>
					<p><?php echo $s_specs; ?></p>
					
					<a href="eve_reg3.php?e_id=<?php echo $reg?>"><h3>Register here</h3></a>
					
				</div>
			</div>
			<?php } ?>
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