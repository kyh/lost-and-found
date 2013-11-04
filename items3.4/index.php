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
<body>

  <a class="reveal-trigger" href="#show" >?</a>
  <div class="reveal-content" id="show" style="display:none;">
    <p>Itching to find out if you’ll ever see your Iphone again? Maybe that pink wallet you left at CCT last week… Well you’ve come to the right place. 
      Your UTM Lost and Found team (L&F) is here to help you track your beloved belongings and provide a convenient way to report items that have been found.</p> 
    <p>Fill out the <span style="color:white">LOST</span> form by letting us know what you lost and where you lost it. You’ll be directed to our database with everything that has been reported.
      <i>But what if your item is not there?</i> Try again soon, our system responds to your input instantaneously but we depend on your honesty to report what's missing!</p>
    <p>Fill out the <span style="color:white">FOUND</span> form by letting us know what you found, the colour and the date you found the item.</p>
    <p> Happy searching and reporting! </p>
    <p> Your L&F team. </p>
  </div>

  <div class="wrap">
  <section style="float:left;">
      <h1>I lost my</h1>

      <div id="menu" class="menuwrapper">
       <button class="trigger" id="typeMenu">Keys</button>
        <ul class="menu">
          <li>
              <a href="#">School items</a>
              <ul class="submenu">
                  <li><a href="#" class="search-term-select" data-search-term="notes">Notes</a></li>
                  <li><a href="#" class="search-term-select" data-search-term="binder">Binder</a></li>
                  <li><a href="#" class="search-term-select" data-search-term="text book">Text book</a></li>
                  <li><a href="#" class="search-term-select" data-search-term="agenda">Agenda</a></li>
                  <li><a href="#" class="search-term-select" data-search-term="pencil case">Pencil case</a></li>
                  <li><a href="#" class="search-term-select" data-search-term="school item (other)">School item (other)</a></li>
              </ul>
          </li>
          <li>
              <a href="#">Electronics</a>
              <ul class="submenu">
                  <li><a href="#" class="search-term-select" data-search-term="phone">Phone</a></li>
                  <li><a href="#" class="search-term-select" data-search-term="laptop">Laptop</a></li>
                  <li><a href="#" class="search-term-select" data-search-term="ipod">iPod</a></li>
                  <li><a href="#" class="search-term-select" data-search-term="charger">charger</a></li>
                  <li><a href="#" class="search-term-select" data-search-term="headphones">headphones</a></li>
                  <li><a href="#" class="search-term-select" data-search-term="electronic item (other)">Electronic item (other)</a></li>
              </ul>
          </li>
          <li>
              <a href="#" class="search-term-select" data-search-term="keys">Keys</a>
          </li>
          <li>
              <a href="#">Bag</a>
              <ul class="submenu">
                  <li><a href="#" class="search-term-select" data-search-term="backpack">Backpack</a></li>
                  <li><a href="#" class="search-term-select" data-search-term="purse">Purse</a></li>
                  <li><a href="#" class="search-term-select" data-search-term="messenger bag">Messenger bag</a></li>
                  <li><a href="#" class="search-term-select" data-search-term="bag (other)">bag (other)</a></li>
              </ul>
          </li>
          <li>
              <a href="#">Personal</a>
              <ul class="submenu">
                  <li><a href="#" class="search-term-select" data-search-term="wallet">Wallet</a></li>
                  <li><a href="#" class="search-term-select" data-search-term="water bottle">Water bottle</a></li>
                  <li><a href="#" class="search-term-select" data-search-term="diary">Diary</a></li>
                  <li><a href="#" class="search-term-select" data-search-term="personal item (other)">Personal item (other)</a></li>
              </ul>
          </li>
          <li>
              <a href="#">Clothing</a>
              <ul class="submenu">
                  <li><a href="#" class="search-term-select" data-search-term="jacket">Jacket</a></li>
                  <li><a href="#" class="search-term-select" data-search-term="hat">Hat</a></li>
                  <li><a href="#" class="search-term-select" data-search-term="mitts">Mitts</a></li>
                  <li><a href="#" class="search-term-select" data-search-term="scarf">Scarf</a></li>
                  <li><a href="#" class="search-term-select" data-search-term="jacket">Jacket</a></li>
                  <li><a href="#" class="search-term-select" data-search-term="pants">Pants &amp; or shorts</a></li>
                  <li><a href="#" class="search-term-select" data-search-term="shirt">Shirt</a></li>
                  <li><a href="#" class="search-term-select" data-search-term="shoes">Shoes</a></li>
                  <li><a href="#" class="search-term-select" data-search-term="clothing item (other)">Clothing item (other)</a></li>
              </ul>
          </li>
            <li>
              <a href="#" class="search-term-select" data-search-term="miscellaneous">Miscellaneous</a>
            </li>
          </ul>
        </div><!-- /menuwrapper -->

        <h1>at</h1>

        <div id="menu" class="menuwrapper">
          <button class="trigger" id="buildingMenu">CCIT</button>
          <ul class="menu">
            <li><a href="#" class="search-term-select-building" data-search-term="south">South</a></li>
            <li><a href="#" class="search-term-select-building" data-search-term="north">North</a></li>
            <li><a href="#" class="search-term-select-building" data-search-term="ccit">CCIT</a></li>
            <li><a href="#" class="search-term-select-building" data-search-term="kaneff">Kaneff</a></li>
          </ul>
        </div>

      <form class="lostForm" id="lostForm" action="search.php">
        <input type="text" id="type" name="type" style="display:none;" value="keys"/>
        <input type="text" id="building" name="building" style="display:none;" value="ccit"/>
        <button type="submit" class="submitButton"><i class="icon-search"></i></button>
      </form>
      
  </section>
  <section class="pics" id="boxPic"><img src="pics/box.png"/></section>
  </div>

  <section class="addItem"><a href="add.php">I found something!</a></section>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="js/jquery.dlmenu.js"></script>
  <script>
      $(function() {
          $('.menuwrapper').dlmenu({
              animationClasses : { classin : 'animate-in-5', classout : 'animate-out-5' }
          });

          $('.search-term-select').click(function(e) {
              e.preventDefault();
              var q = $(this).attr('data-search-term');
              $('#typeMenu').html(q);
              $('#type').val(q);
          });

          $('.search-term-select-building').click(function(e) {
              e.preventDefault();
              var b = $(this).attr('data-search-term');
              $('#buildingMenu').html(b);
              $('#building').val(b);
          });

          $('.reveal-trigger').click(function(event) {
              event.preventDefault();
              var target = $(this).attr('href');
              $(target).slideToggle();
          });
      });
  </script>
</body>
</html>