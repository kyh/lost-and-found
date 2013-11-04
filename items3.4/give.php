<?php
require('_signon.php');
require('_signon.php');

$id = $_GET['id'];

$query = "UPDATE LostFound SET claimed='1' WHERE id='" . $id . "'";

mysql_query($query) or die(mysql_error());

?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,minimum-scale=1.0">
  <title>Lost and Found</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/component.css" />
  <script src="js/modernizr.custom.js"></script>
</head>
<body id="thankyou">
	<div class="wrap" id="thanks">
		<h1 class="thanks">Woohoo!</h1>
		<p>You found your stuff</p> 
		<p>Come to Davis room 314 to get it</p> 
		<p>Your L&F team.</p>
	</div>
	<section class="addItem"><a href="index.php">Head Back</a></section>
</body>
</html>