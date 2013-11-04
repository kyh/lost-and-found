<?php
require('_signon.php');

$itemType = $_POST['type'];
$dateFound = $_POST['dateFound'];
$itemColor = $_POST['color'];
$buildingFound = $_POST['building'];
$claimed = 0;

$query = "INSERT INTO LostFound (type, dateFound, color, building, claimed) VALUES('" . $itemType . "','" . $dateFound . "','" . $itemColor . "','" . $buildingFound . "','" . $claimed . "') ";

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
		<h1 class="thanks">THANK YOU</h1>
		<p>for being a decent human being and reporting that item missing.</p> 
		<p>Kudos!</p>
		<p>Your L&F team.</p>
	</div>
	<section class="addItem"><a href="index.php">Head Back</a></section>
</body>
</html>