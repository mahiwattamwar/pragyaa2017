<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-devive-width, initial-scale=1.0">
	<title>Pragyaa-2017</title>
	<link href="../css/mdl-overwrite.css" rel="stylesheet">
  <!-- mdl -->
	<link href="../css/material.css" rel="stylesheet">
	<link href="../css/ribbon.css" rel="stylesheet">
  <script src="../js/material.js"></script>
  <!-- mdl-ends -->

</head>

<body>
	<?php include 'connect.php'; ?>
	<?php
		$select_posts="SELECT * FROM event ORDER BY 1 DESC";
		$run_posts=mysql_query($select_posts);

		while($row=mysql_fetch_array($run_posts)){
			$post_id=$row['id'];
			$post_event_name = $row['event_name'];
		  	$post_dep = $row['dep'];
		  	$post_category = $row['category'];
		  	$post_rules = $row['rules'];
		  	$post_descr = $row['descr'];
		  	$post_arena = $row['arena'];
		  	$post_requir = $row['requir'];
		  	$post_rounds = $row['rounds'];
		  	$post_coordis = $row['coordis'];
			$post_img = $row['img'];
			?>

			<div>
				<div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell ">
	            
		        	<div class="ribbon"><span><?php echo $post_id ?></span></div>

	            	<div class="mdl-card__title mdl-card--expand" style="background-image: url('../images/<?php echo $post_img ?>');">
	              		<h2 class="mdl-card__title-text"><?php echo $post_event_name ?></h2>
	            	</div>

		            <div class="mdl-card__supporting-text">
		              <?php echo $post_dep ?>
		            </div>

		            <div class="mdl-card__actions mdl-card--border">
		        		<?php echo $post_category ?>
		            </div>

	        	</div>
          </div>
			<?php } ?>
</body>
</html>