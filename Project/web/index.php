<!DOCTYPE HTML>
<html>
<head>
<!-- <title>Flat Search Box Responsive Widget Template | Home :: w3layouts</title> -->
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Flat Search Box Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--Google Fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--Google Fonts-->

<?php
if(isset($_GET["submit"])){
	$link = $_GET["box"];
	$myfile = fopen("link.txt", "w") or die("Unable to open file!");
	fwrite($myfile, $link);
	fclose($myfile);
	header('Location: ../../main.php');
}

?>


</head>
<body>

<h1> Product Review Platform </h1>
<!--search start here-->
<div class="search">
	<i> </i>
	<div class="s-bar">
	  <form method="get">
		<input type="text" name="box" value="Search Here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search Here';}">
		<input type="submit" name="submit"  value="Search"/>
	  </form>
	</div>
	<p> Please Enter the link to the product to be reviewed </p>
</div>
<!--search end here-->
<div class="copyright">
	 <p>2017 &copy Flat Search Box All rights reserved | Template by Samarth Modi </a></p>
</div>
</body>
</html>
