<?php
require('_signon.php');
$getType = $_GET['type'];
$getBuilding = $_GET['building'];
$query = "SELECT * FROM LostFound WHERE building='" . $getBuilding . "' AND type='" . $getType . "'";
$items = mysql_query($query) or die(mysql_error());
if (mysql_num_rows($items) == 0) {
  header( 'Location: /~ccit1241/items3.4/errorpage.html' ) ;
} else {
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,minimum-scale=1.0">
  <title>Lost and Found</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="js/jquery-2.0.3.min.js"></script>
</head>
<body id="search">
  <div class="wrap" id="searchWrap">
    <header id="main-header">
      <h1 id="losth1">Lost And Found</h1>
    </header>
	<section class="ib-container" id="ib-container">
    <div class="list">
      <?php while ($item = mysql_fetch_array($items)) { 
          $randomQuote = rand(1, 3);
      ?>
        <div id="grid">
          <?php
            if ($randomQuote == 1){ ?>
          <p class="block">Lost <span class="lostit"><?php echo($item['color']); ?> <?php echo($item['type']); ?></span> were found on <span class="lostit"><?php echo($item['dateFound']); ?></span> at <span class="lostit"><?php echo($item['building']); ?></span>.</p>
            <?php } elseif ($randomQuote == 2) { ?>
          <p class="block">Someone found your <span class="lostit"><?php echo($item['color']); ?> <?php echo($item['type']); ?></span> on <span class="lostit"><?php echo($item['dateFound']); ?></span> at <span class="lostit"><?php echo($item['building']); ?></span>.</p>
            <?php } elseif ($randomQuote == 3) { ?>
          <p class="block">Is this <span class="lostit"><?php echo($item['color']); ?> <?php echo($item['type']); ?></span> found on <span class="lostit"><?php echo($item['dateFound']); ?></span> at <span class="lostit"><?php echo($item['building']); ?></span> yours?</p>
            <?php } else { ?>
          <p class="block">Hey look, these <span class="lostit"><?php echo($item['color']); ?> <?php echo($item['type']); ?></span> found on <span class="lostit"><?php echo($item['dateFound']); ?></span> at <span class="lostit"><?php echo($item['building']); ?></span> sounds like the one you lost!</p>
            <?php } ?>
          <?php
          if ( ($item['claimed']) == '1' ) {
            $given = "Claimed";
          } else {
            $given = "Unclaimed";
          }
          ?>

          <?php if ( $given == "Unclaimed" ) { ?>
            <p class="otherinfo" id="claimit"><button class="claimbutton"><a class="claimingit" href="give.php?id=<?php echo($item['id'])?>">THAT'S MINE!</a></button></p>
          <?php } else { ?>
          <p class="otherinfo"><span class="claimed">
            <?php echo($given); ?>
          </span></p>
          <?php } ?>
        </div>
      <?php } } ?>
    </div>
    </section>
  </div>

  <section class="addItem"><a href="index.php">Back</a></section>
</body>
</html>