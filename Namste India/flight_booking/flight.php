<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../menuToggle.css">

    <link rel="stylesheet" type="text/css" href="fight.css">

</head>
<body>
      
      <section class="hero">
        <nav role="navigation">
            <div id="menuToggle">
              <!--
              A fake / hidden checkbox is used as click reciever,
              so you can use the :checked selector on it.
              -->
              <input type="checkbox" />
              
              <!--
              Some spans to act as a hamburger.
              
              They are acting like a real hamburger,
              not that McDonalds stuff.
              -->
              <span></span>
              <span></span>
              <span></span>
              
              <!--
              Too bad the menu has to be inside of the button
              but hey, it's pure CSS magic.
              -->
              <ul id="menu">
                <li><a href="../home/index.php">Home</a></li>
                <li><a href="../Covid_guide/ilovepdf_merged (4).pdf" target="_blank">Guidlines_covid</a></li>
                <li><a href="../Attraction/attraction.php">Attraction</a></li>
                <li><a href="../covidFeedback/index.php">comparison</a></li>
                <li><a href="../contact/contact.php">About Us</a></li>
              </ul>
            </div>
          </nav>
          <div class="aena">
            
            <script charset="utf-8" src="//www.travelpayouts.com/widgets/2a52ce7dfdb566fe06fa2a3d75069292.js?v=2071" async></script>
          </div>
      </section>
      
      
</body>
</html>
