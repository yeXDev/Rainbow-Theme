<!DOCTYPE html>
<html>
<head>
	<meta name="author" content="yeXWeb">
	<meta name="description" content="Random Theme">
	<link rel="stylesheet" type="text/css" href="main.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<title>Rainbow Theme</title>
</head>
<body>
	<header>
		<div class="container"><h2>Rainbow</h2></div>
	</header>
	<?php 
		$colors = array("#60A65F", "#2980b9", "#e74c3c", "#c0392b", "#9b59b6", "#8e44ad", "#e67e22", "#1abc9c","#27ae60","#16a085");

	 ?>

	<?php for ($i=0; $i < count($colors); $i++) { ?>
		<section style="background-color: <?php echo $colors[rand(0,9)] ?>">
			<span>COLOR <?php echo $i ?></span>
		</section>
	<?php } ?> 
</body>
</html>