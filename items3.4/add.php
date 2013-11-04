<?php
require('_signon.php');
$items = mysql_query("SELECT * FROM LostFound") or die(mysql_error());
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
<body id="found">
  <div class="wrap">
    <section style="float:left">
      <h1>I found your</h1>

      <div id="menu" class="menuwrapper">
        <button class="trigger" id="colorMenu">White</button>
        <ul class="menu">
          <li><a href="#" class="found-term-select-color" data-found-term="white">White</a></li>
          <li><a href="#" class="found-term-select-color" data-found-term="black">Black</a></li>
          <li><a href="#" class="found-term-select-color" data-found-term="grey">Grey</a></li>
          <li><a href="#" class="found-term-select-color" data-found-term="blue">Blue</a></li>
          <li><a href="#" class="found-term-select-color" data-found-term="green">Green</a></li>
          <li><a href="#" class="found-term-select-color" data-found-term="red">Red</a></li>
          <li><a href="#" class="found-term-select-color" data-found-term="purple">Purple</a></li>
        </ul>
      </div>

      <div id="menu" class="menuwrapper">
       <button class="trigger" id="typeMenu">Keys</button>
        <ul class="menu">
          <li>
              <a href="#">School items</a>
              <ul class="submenu">
                  <li><a href="#" class="found-term-select" data-found-term="notes">Notes</a></li>
                  <li><a href="#" class="found-term-select" data-found-term="binder">Binder</a></li>
                  <li><a href="#" class="found-term-select" data-found-term="text book">Text book</a></li>
                  <li><a href="#" class="found-term-select" data-found-term="agenda">Agenda</a></li>
                  <li><a href="#" class="found-term-select" data-found-term="pencil case">Pencil case</a></li>
                  <li><a href="#" class="found-term-select" data-found-term="school item (other)">School item (other)</a></li>
              </ul>
          </li>
          <li>
              <a href="#">Electronics</a>
              <ul class="submenu">
                  <li><a href="#" class="found-term-select" data-found-term="phone">Phone</a></li>
                  <li><a href="#" class="found-term-select" data-found-term="laptop">Laptop</a></li>
                  <li><a href="#" class="found-term-select" data-found-term="ipod">iPod</a></li>
                  <li><a href="#" class="found-term-select" data-found-term="charger">charger</a></li>
                  <li><a href="#" class="found-term-select" data-found-term="headphones">headphones</a></li>
                  <li><a href="#" class="found-term-select" data-found-term="electronic item (other)">Electronic item (other)</a></li>
              </ul>
          </li>
          <li>
              <a href="#" class="found-term-select" data-found-term="keys">Keys</a>
          </li>
          <li>
              <a href="#">Bag</a>
              <ul class="submenu">
                  <li><a href="#" class="found-term-select" data-found-term="backpack">Backpack</a></li>
                  <li><a href="#" class="found-term-select" data-found-term="purse">Purse</a></li>
                  <li><a href="#" class="found-term-select" data-found-term="messenger bag">Messenger bag</a></li>
                  <li><a href="#" class="found-term-select" data-found-term="bag (other)">bag (other)</a></li>
              </ul>
          </li>
          <li>
              <a href="#">Personal</a>
              <ul class="submenu">
                  <li><a href="#" class="found-term-select" data-found-term="wallet">Wallet</a></li>
                  <li><a href="#" class="found-term-select" data-found-term="water bottle">Water bottle</a></li>
                  <li><a href="#" class="found-term-select" data-found-term="diary">Diary</a></li>
                  <li><a href="#" class="found-term-select" data-found-term="personal item (other)">Personal item (other)</a></li>
              </ul>
          </li>
          <li>
              <a href="#">Clothing</a>
              <ul class="submenu">
                  <li><a href="#" class="found-term-select" data-found-term="jacket">Jacket</a></li>
                  <li><a href="#" class="found-term-select" data-found-term="hat">Hat</a></li>
                  <li><a href="#" class="found-term-select" data-found-term="mitts">Mitts</a></li>
                  <li><a href="#" class="found-term-select" data-found-term="scarf">Scarf</a></li>
                  <li><a href="#" class="found-term-select" data-found-term="jacket">Jacket</a></li>
                  <li><a href="#" class="found-term-select" data-found-term="pants">Pants &amp; or shorts</a></li>
                  <li><a href="#" class="found-term-select" data-found-term="shirt">Shirt</a></li>
                  <li><a href="#" class="found-term-select" data-found-term="shoes">Shoes</a></li>
                  <li><a href="#" class="found-term-select" data-found-term="clothing item (other)">Clothing item (other)</a></li>
              </ul>
          </li>
            <li>
              <a href="#" class="found-term-select" data-found-term="miscellaneous">Miscellaneous</a>
            </li>
          </ul>
        </div><!-- /menuwrapper -->

        <h1>at</h1>

        <div id="menu" class="menuwrapper">
          <button class="trigger" id="buildingMenu">CCIT</button>
          <ul class="menu">
            <li><a href="#" class="found-term-select-building" data-found-term="south">South</a></li>
            <li><a href="#" class="found-term-select-building" data-found-term="north">North</a></li>
            <li><a href="#" class="found-term-select-building" data-found-term="ccit">CCIT</a></li>
            <li><a href="#" class="found-term-select-building" data-found-term="kaneff">Kaneff</a></li>
          </ul>
        </div>

      <form action="create.php" id="addForm" method="post" class="lostForm" id="lostForm">
        <input type="text" id="type" name="type" style="display:none;" value="keys"/>
        <input type="text" id="building" name="building" style="display:none;" value="ccit"/>
        <input type="text" id="color" name="color" style="display:none;" value="white"/>
        <label for="dateFound">Date Found</label>
        <input id="diameter" type="date" name="dateFound">
        <br>
        <button type="submit" class="submitButton"><i class="icon-ok"></i></button>
      </form>
  </section>
  <section class="pics" id="boxPic2"><img src="pics/box2.png"/></section>
  </div>
  
  <section class="addItem"><a href="index.php">I lost something!</a></section>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="js/jquery.dlmenu.js"></script>
  <script>
      $(function() {
          $('.menuwrapper').dlmenu({
              animationClasses : { classin : 'animate-in-5', classout : 'animate-out-5' }
          });

          $('.found-term-select').click(function(e) {
              e.preventDefault();
              var q = $(this).attr('data-found-term');
              $('#typeMenu').html(q);
              $('#type').val(q);
          });

          $('.found-term-select-building').click(function(e) {
              e.preventDefault();
              var b = $(this).attr('data-found-term');
              $('#buildingMenu').html(b);
              $('#building').val(b);
          });

          $('.found-term-select-color').click(function(e) {
              e.preventDefault();
              var c = $(this).attr('data-found-term');
              $('#colorMenu').html(c);
              $('#color').val(c);
          });
      });
  </script>
</body>
</html>