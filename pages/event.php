<?php

	include "../includes/connect.php";
	if(isset($_GET['d_id'])){
		$d_id=$_GET['d_id'];
	}

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
	<title><? echo $d_name; ?></title>
	<!-- <meta name="description" content="A simple content slider with depth-like zoom functionality" />
	<meta name="keywords" content="blueprint, template, slider, zoom, javascript, depth, 3d, css" />
	<meta name="author" content="Codrops" /> -->
	<!-- <link rel="shortcut icon" href="favicon.ico"> -->
	<!-- Feather Icons -->
	<!-- <link rel="stylesheet" type="text/css" href="fonts/feather/style.css"> -->
	<!-- General demo styles & header -->
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<!-- Component styles -->
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<script src="js/modernizr.custom.js"></script>
</head>
<body>
	<!-- Main container -->
	<div class="container">
		<!-- Blueprint header -->
		<header class="bp-header cf">
			<span><? echo $d_name; ?></span>
			<h1></h1>
			<nav>
				<!-- <a href="http://tympanus.net/Blueprints/FilterableProductGrid/" class="bp-icon bp-icon-prev" data-info="previous Blueprint"><span>Previous Blueprint</span></a> -->
				<!--a href="" class="bp-icon bp-icon-next" data-info="next Blueprint"><span>Next Blueprint</span></a-->
				<!-- <a href="http://tympanus.net/codrops/?p=24330" class="bp-icon bp-icon-drop" data-info="back to the Codrops article"><span>back to the Codrops article</span></a> -->
				<!-- <a href="http://tympanus.net/codrops/category/blueprints/" class="bp-icon bp-icon-archive" data-info="Blueprints archive"><span>Go to the archive</span></a> -->
			</nav>
		</header>
		<!-- Grid -->
		<section class="slider">
		<?php
			// for sub-events
		    $select_sub_event_query="SELECT * FROM event WHERE d_name='$d_name' && de_id != 0 ";
		    $select_sub_event=$db->query($select_main_event_query);

			while($row=$select_main_event->fetch_assoc()){
				$s_de_id=$row['de_id'];
				$s_e_type=$row['e_type'];
				$s_e_name=$row['e_name'];
				$s_desc=$row['desc'];
				$s_rules=$row['rules'];
				$s_gameplay=$row['gameplay'];
				$s_specs=$row['specs'];
				$s_img=$row['s_img'];
    		?>
			<div class="slide slide--current" data-content="content_<?php echo $s_de_id ?>">
				<div class="slide__mover">
					<div class="zoomer flex-center">
						<img class="zoomer__image" src="images/<?php echo "$s_img"?>" alt="<?php echo $s_e_name ?>" />
						<div class="preview">
							<!-- <img src="images/iphone-content-preview.png" alt="iPhone app preview" />
							<div class="zoomer__area zoomer__area--size-2"></div> -->
						</div>
					</div>
				</div>
				<h2 class="slide__title">
				<!-- <span>The Classy</span> -->
				<?php echo $s_e_name;?></h2>
			</div>
			<?php } ?>
			<!-- <div class="slide" data-content="content-2">
				<div class="slide__mover">
					<div class="zoomer flex-center">
						<img class="zoomer__image" src="images/ipad.png" alt="iPad Mini" />
						<div class="preview">
							<img src="images/ipad-content-preview.png" alt="iPad Mini app preview" />
							<div class="zoomer__area zoomer__area--size-4"></div>
						</div>
					</div>
				</div>
				<h2 class="slide__title"><span>The Fantastic</span> iPad Mini</h2>
			</div>
			<div class="slide" data-content="content-3">
				<div class="slide__mover">
					<div class="zoomer flex-center">
						<img class="zoomer__image" src="images/macbook.png" alt="MacBook" />
						<div class="preview">
							<img src="images/macbook-content-preview.jpg" alt="MacBook app preview" />
							<div class="zoomer__area zoomer__area--size-3"></div>
						</div>
					</div>
				</div>
				<h2 class="slide__title"><span>The Amazing</span> MacBook</h2>
			</div>
			<div class="slide" data-content="content-4">
				<div class="slide__mover">
					<div class="zoomer flex-center">
						<img class="zoomer__image" src="images/imac.png" alt="iMac" />
						<div class="preview">
							<img src="images/imac-content-preview.jpg" alt="iMac app preview" />
							<div class="zoomer__area zoomer__area--size-5"></div>
						</div>
					</div>
				</div>
				<h2 class="slide__title"><span>The Glorious</span> iMac</h2>
			</div>
			<div class="slide" data-content="content-5">
				<div class="slide__mover">
					<div class="zoomer flex-center">
						<img class="zoomer__image" src="images/apple-watch.png" alt="Apple Watch" />
						<div class="preview rounded">
							<img src="images/apple-watch-content-preview.png" alt="Apple Watch app preview" />
							<div class="zoomer__area zoomer__area--size-1"></div>
						</div>
					</div>
				</div>
				<h2 class="slide__title"><span>The Fabulous</span> Apple Watch</h2>
			</div>  -->
			<nav class="slider__nav">
				<button class="button button--nav-prev"><i class="icon icon--arrow-left"></i><span class="text-hidden">Previous product</span></button>
				<button class="button button--zoom"><i class="icon icon--zoom"></i><span class="text-hidden">View details</span></button>
				<button class="button button--nav-next"><i class="icon icon--arrow-right"></i><span class="text-hidden">Next product</span></button>
			</nav>
		</section>
		<!-- /slider-->
		<section class="content">
			<?php
			// for sub-event's modal
		    $select_sub_event_query="SELECT * FROM event WHERE d_name='$d_name' && de_id != 0 ";
		    $select_sub_event=$db->query($select_main_event_query);

			while($row=$select_main_event->fetch_assoc()){
				$s_de_id=$row['de_id'];
				$s_e_type=$row['e_type'];
				$s_e_name=$row['e_name'];
				$s_desc=$row['desc'];
				$s_rules=$row['rules'];
				$s_gameplay=$row['gameplay'];
				$s_specs=$row['specs'];
				$s_img=$row['s_img'];
    		?>
			<div class="content__item" id="content_<?php echo $s_de_id ?>">
				<img class="content__item-img rounded-right" src="images/iphone-content.png" alt="Apple Watch Content" />
				<div class="content__item-inner">
					<h2><?php echo $s_e_name;?></h2>
					<h3>Description</h3>
					<p><? echo $s_desc; ?></p>

					<h3>Rules</h3>
					<p><? echo $s_rules; ?></p>

					<h3>Gameplay</h3>
					<p><? echo $s_gameplay; ?></p>

					<h3>Specifications</h3>
					<p><? echo $s_specs; ?></p>
					
				</div>
			</div>
			<?php } ?>
			<div class="content__item" id="content-2">
				<img class="content__item-img rounded-right" src="images/ipad-content.jpg" alt="iPad Mini Content" />
				<div class="content__item-inner">
					<h2>The iPad Mini</h2>
					<h3>Desktop-class architecture without a desktop</h3>
					<p>Don’t let its size fool you. iPad mini 3 is powered by an A7 chip with 64-bit desktop-class architecture. A7 delivers amazing processing power without sacriﬁcing battery life. So you get incredible performance in a device you can take with you wherever you go.</p>
					<p><a href="https://www.apple.com/ipad-mini-3/performance/">Learn more about Performance &xrarr;</a></p>
				</div>
			</div>
			<div class="content__item" id="content-3">
				<img class="content__item-img rounded-right" src="images/macbook-content.jpg" alt="MacBook Content" />
				<div class="content__item-inner">
					<h2>The MacBook</h2>
					<h3>It's the future of the notebook</h3>
					<p>With the new MacBook, we set out to do the impossible: engineer a full-size experience into the lightest and most compact Mac notebook ever. That meant reimagining every element to make it not only lighter and thinner but also better. The result is more than just a new notebook. It's the future of the notebook.</p>
					<p><a href="https://www.apple.com/macbook/design/">Learn more about the design &xrarr;</a></p>
				</div>
			</div>
			<div class="content__item" id="content-4">
				<img class="content__item-img rounded-right" src="images/imac-content.jpg" alt="iMac Content" />
				<div class="content__item-inner">
					<h2>The iMac</h2>
					<h3>Engineered to the very last detail</h3>
					<p>Every new Mac comes with Photos, iMovie, GarageBand, Pages, Numbers, and Keynote. So you can be creative with your photos, videos, music, documents, spreadsheets, and presentations right from the start. You also get great apps for email, surfing the web, sending texts, and making FaceTime calls — there’s even an app for finding new apps.</p>
					<p><a href="https://www.apple.com/imac/built-in-apps/">Learn more about the iMac's features &xrarr;</a></p>
				</div>
			</div>
			<div class="content__item" id="content-5">
				<img class="content__item-img rounded-right" src="images/apple-watch-content.png" alt="Apple Watch Content" />
				<div class="content__item-inner">
					<h2>The Apple Watch</h2>
					<h3>Entirely new ways to stay in touch</h3>
					<p>Apple Watch makes all the ways you're used to communicating more convenient. And because it sits right on your wrist, it can add a physical dimension to alerts and notifications. For example, you’ll feel a gentle tap with each incoming message. Apple Watch also lets you connect with your favorite people in fun, spontaneous ways — like sending a tap, a sketch, or even your heartbeat. </p>
					<p><a href="https://www.apple.com/watch/new-ways-to-connect/">Learn more about new ways to connect &xrarr;</a></p>
				</div>
			</div>
			<button class="button button--close"><i class="icon icon--circle-cross"></i><span class="text-hidden">Close content</span></button>
		</section>
	</div>
	<script src="js/classie.js"></script>
	<script src="js/dynamics.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>