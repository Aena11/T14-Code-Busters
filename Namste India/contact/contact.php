<?php
session_start();
?><!DOCTYPE html>

<html>
<head>
  
    <title>Golden Ratio</title>
  <link rel="shortcut icon" href="assets/logo.png" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="../menuToggle.css">
 
  <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href='https://fonts.googleapis.com/css?family=Lora:400italic' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Poppins:ital,wght@1,200&family=Sriracha&display=swap" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
  <style type="text/css">

#loading
  {
  position: fixed;
  top:0;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 100;
  display: flex;
  justify-content: center;
  align-items: center;
}
.gif
{
width: 50%;
}
header,
section {
  overflow-x: hidden;
}

:root {
  --Sniglet-font: "Sniglet", cursive;
  --Rubik: "Rubik", cursive;
  --Patua: "Patua One", cursive;
  --Lobster: "lobster", cursive;
  --light-black: #2e2c2caf;
  --bggradient: linear-gradient(to bottom,  #11093b, #21569c);
  --light-gray: rgb(35, 103, 187);
}

header a {
  font-family: var(--Sniglet-font);
  font-size: 0.9em;
  color: rgb(207, 37, 37);
}


header .nav-item:last-child {
  padding-right: 10.5em;
}

header .nav-item {
  padding: 0.9em;
}

header .navbar-brand {
  padding-left: 8rem;
}

header .nav-link:hover {
  color: rgb(219, 196, 67);
  border-bottom: 2px solid rgb(219, 196, 67);
}
 
header .row .col-md-7 {
  padding: 22vmin 1vmin;
  padding-bottom: 35vmin;
}

header .row .col-md-5 {
  padding: 4.2vmin 1vmin;
}

header .row .col-md-5 img {
  width: 90%;
}

header {
  background: #ff512f;
  /* fallback for old browsers */
  background: var(--bggradient);
 
}
#navbarNav ul li a {
  font-size: 13.2px;
}
.quiz{
  border: 2px solid rgb(219, 196, 67);
  border-radius: 10px;
}   
.names{
    background-color:rgb(180, 236, 240);
    padding-top: 50px;
    padding-bottom: 50px;
}
.names p{
  font-family: 'Kalam', cursive;
  color: rgb(19, 16, 16);
  font-size: small;
}
.names h1{
  font-family: 'Merriweather', serif;
  text-shadow: 1px 1px rgb(12, 9, 9);
}
.names .subt1{
  font-family: 'Dancing Script', cursive;
  font-size: large;
}
.imgabout{
  height: 200px;
  margin-bottom: 20px;
  border-radius: 100px;
  box-shadow: 5px 5px 5px rgb(27, 25, 25);
}
.imgabout:hover{
  transform: scale(1.1);
  transition-duration: 1s ease;
  cursor: pointer;
  transition-timing-function: linear;
}
.formus{
  padding-top: 50px;
  padding-bottom: 50px;
  padding-left: 25%;
  padding-right: 25%;
  background-color: rgb(248, 186, 207);
}
.formus h1{
  font-family: 'Merriweather', serif;
  text-shadow: 1px 1px rgb(28, 32, 32);
}
.formus .subt2{
  font-family: 'Dancing Script', cursive;
  font-size: large;
  color: grey;
}
.btn{
  background-color: rgba(255,0,0,0.7) !important;
  padding-left: 10%;
  padding-right: 10%;
  border: none;
}
@media only screen and (max-width: 700px){
  .formus{
  padding-top: 50px;
  padding-bottom: 50px;
  padding-left: 5%;
  padding-right: 5%;
  background-color: rgb(212, 32, 92);
}
.names{
    background-color:rgb(165, 247, 240);
}
</style>
</head>
  <body>
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
            <li><a href="../home/index.html">Home</a></li>
            <li><a href="../Attraction/attraction.html">Attraction</a></li>

            <li><a href="../Covid_guide/ilovepdf_merged (4).pdf" target="_blank">Guidlines_covid</a></li>
            <li><a href="#">comparison</a></li>
            <li><a href="#">Bookings</a></li>
          </ul>
        </div>
      </nav>

  <div class="container-fluid">
    <div class="names">
      <center>  
            <h1>ABOUT US</h1>
            <p class="subt1">Just one click and go to the event description.</p><br><br>
       
        <div class="d-flex justify-content-center row">
          
          <div class="col-md-3">
            <img src="https://images.ctfassets.net/u4vv676b8z52/60zM6XTHxGoqD9Am2KllNr/9c671ede560f911271385a0e19a1299e/why-people-wink-hero-678x4446-compressor.jpg?fm=jpg&q=80" class="imgabout img-fluid">
            <h5>Aena Verma</h5>
            <p>Student<br>Pursuing BTech from vit vellore, CSE</p>
          </div><br>
          <div class="col-md-3">
            <img src="https://img.freepik.com/free-photo/portrait-beautiful-playful-brunette-girl-smiling-winking_176420-10013.jpg?size=626&ext=jpg" class="imgabout img-fluid">
            <h5>Lisa Verma</h5>
            <p>Student<br>Pursuing BTech from NIT Surat, CSE</p>
          </div><br>
          <div class="col-md-3">
            <img src="https://images.pexels.com/photos/1006202/pexels-photo-1006202.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" class="imgabout img-fluid">
            <h5>Prince Nandha</h5>
            <p>Student<br>Pursuing BTech from NIT Surat, CSE</p>
          </div><br>
        </div>
      </center>      
    </div>


    <div class="formus">
      <center>
      <h1>CONTACT US</h1>
      <p class="subt2">We'd love to connect with you</p><br><br>
      <form class="was-validated">
        <div class="form-group">
            <label for="text">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter Email Address" name="email" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="form-group">
            <label for="email">comment:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter comment" name="Ask" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <button type="submit" class="btn btn-primary" >Submit</button>
      </form>
    </center>
    </div>
  </div>

    <script>
            var preloader = document.getElementById('loading');
            function myFunction(){
            preloader.style.display = 'none';}
      </script>
</body> 
</html>