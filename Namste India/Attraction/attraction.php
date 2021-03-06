<?php
      session_start();
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="../menuToggle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            <li><a href="../home/index.php">Home</a></li>
            <li><a href="../Covid_guide/ilovepdf_merged (4).pdf" target="_blank">Guidlines_covid</a></li>
            <li><a href="../covidFeedback/index.php">comparison</a></li>
            <li><a href="../flight_booking/flight.php">Book Your Flight</a></li>
            <li><a href="../contact/contact.php">About Us</a></li>
          </ul>
        </div>
      </nav>
    <div id="root">
    
    </div>
    <h1 class="text">Places Of Interest</h1>
    <div class= "outing">
    <main class="page-content">
        <div class="card">
            <div class="content">
                <h2 class="title">Kerala</h2>
                <p class="copy">Kerala is a state on the southwestern Malabar Coast of India. It was formed on 1 November 1956,  the passage of the States Reorganisation Act</p><a href="../Attraction/kerala/kerala.php?state=Kerela" ><button class="btn" >Explore</button></a>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <h2 class="title">Goa</h2>
                <p class="copy">The Andaman and Nicobar Islands,  572 of them islands of which 38 are of the Bay of Bengal and the Andaman Sea.</p><a href="../Attraction/goa/ana.php?state=Goa" target="_blank"><button class="btn">Explore</button></a>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <h2 class="title">Uttar Pradesh</h2>
                <p class="copy">This garden is a European style garden. The vibrant flower bed, lovely fountains will steal your heart with its endless beauty. </p><a href="https://www.google.co.in/maps/place/Dutch+Garden/@21.1913545,72.8111853,17z/data=!3m1!4b1!4m5!3m4!1s0x3be04e7b76e91d67:0xd8001046b5c79dac!8m2!3d21.1913545!4d72.813374" target="_blank"><button class="btn">Explore</button></a>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <h2 class="title">Delhi</h2>
                <p class="copy">This museum has been serving as an important tourist place in Surat. The best thing about this museum is the 3D sound, laser show and lighting effects.</p><a href="https://www.google.co.in/maps/place/Sardar+Patel+Museum/@21.1956721,72.8178593,17z/data=!3m1!4b1!4m5!3m4!1s0x3be04e63b3043311:0xff609ef169f1ada2!8m2!3d21.1956721!4d72.820048" target="_blank"><button class="btn">Explore</button></a>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <h2 class="title">Rajasthan</h2>
                <p class="copy">This water park is one of the top waterparks in Surat and is packed with multiple thrilling water rides. So, get ready to splash!</p><a href="https://www.google.co.in/maps/place/Amaazia+Water+Park/@21.1945138,72.8628476,17z/data=!3m1!4b1!4m5!3m4!1s0x3be04fa54162df73:0xc64e227c6b44a7c1!8m2!3d21.1945138!4d72.8650363" target="_blank"><button class="btn">Explore</button></a>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <h2 class="title">West Bengal</h2>
                <p class="copy">Suvali Beach is an urban beach along the Arabian Sea situated near the village of Suvali in the Hazira suburb of Surat in Gujarat State, India.</p><a href="https://www.google.co.in/maps/place/Suvali+Beach/@21.1641247,72.616472,17.21z/data=!4m5!3m4!1s0x3be1b2263aa762d5:0xb48575dc6f96014a!8m2!3d21.1638544!4d72.6191766" target="_blank"><button class="btn">Explore</button></a>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <h2 class="title">Punjab</h2>
                <p class="copy">Gopi Talav is a lake in the Gopipura locality in the city of Surat in Gujarat state of India. It was built in circa 1510 CE by Malik Gopi.</p><a href="https://www.google.co.in/maps/place/Gopi+Talav/@21.1885633,72.827201,17z/data=!3m1!4b1!4m5!3m4!1s0x3be04e5d35ecc4b5:0x78d4870ec9b7f28!8m2!3d21.1886016!4d72.8297614" target="_blank"><button class="btn">Explore</button></a>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <h2 class="title"> Tamil Nadu</h2>
                <p class="copy">Surat Castle, or Surat Fort, is a 16th-century structure in the city of Surat. </p><a href="https://www.google.co.in/maps/place/Surat+Castle/@21.1960961,72.8155234,17z/data=!3m1!4b1!4m5!3m4!1s0x3be04e62e7128bb3:0x95b25311d0d9496c!8m2!3d21.1960961!4d72.8177121" target="_blank"><button class="btn">Explore</button></a>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <h2 class="title"> Bihar</h2>
                <p class="copy">Most of the people visit this beach for its calmness, beautiful views and to spend some quality time with their family and friends.</p><a href="https://www.google.co.in/maps/place/Dumas+Beach/@21.0864516,72.7031313,15z/data=!3m1!4b1!4m5!3m4!1s0x3be0533302a63a7f:0x6d86e327f98bb542!8m2!3d21.0837964!4d72.7093466" target="_blank"><button class="btn">Explore</button></a>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <h2 class="title">Goa</h2>
                <p class="copy">This is a perfect place for wildlife lovers. And yes, you will be able to spot deer, Bengal tigers, white peafowl and many more.</p><a href="https://www.google.co.in/maps/place/Sarthana+Nature+Park+And+Zoo/@21.2303193,72.896579,17z/data=!3m1!4b1!4m5!3m4!1s0x3be04f5f3b387bb5:0x261e733c27afa7d2!8m2!3d21.2303193!4d72.8987677" target="_blank"><button class="btn">Explore</button></a>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <h2 class="title">Uttarakhand</h2>
                <p class="copy">This garden is a European style garden. The vibrant flower bed, lovely fountains will steal your heart with its endless beauty. </p><a href="https://www.google.co.in/maps/place/Dutch+Garden/@21.1913545,72.8111853,17z/data=!3m1!4b1!4m5!3m4!1s0x3be04e7b76e91d67:0xd8001046b5c79dac!8m2!3d21.1913545!4d72.813374" target="_blank"><button class="btn">Explore</button></a>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <h2 class="title">Tamil Nadu</h2>
                <p class="copy">This museum has been serving as an important tourist place in Surat. The best thing about this museum is the 3D sound, laser show and lighting effects.</p><a href="https://www.google.co.in/maps/place/Sardar+Patel+Museum/@21.1956721,72.8178593,17z/data=!3m1!4b1!4m5!3m4!1s0x3be04e63b3043311:0xff609ef169f1ada2!8m2!3d21.1956721!4d72.820048" target="_blank"><button class="btn">Explore</button></a>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <h2 class="title">Sikkim</h2>
                <p class="copy">This water park is one of the top waterparks in Surat and is packed with multiple thrilling water rides. So, get ready to splash!</p><a href="https://www.google.co.in/maps/place/Amaazia+Water+Park/@21.1945138,72.8628476,17z/data=!3m1!4b1!4m5!3m4!1s0x3be04fa54162df73:0xc64e227c6b44a7c1!8m2!3d21.1945138!4d72.8650363" target="_blank"><button class="btn">Explore</button></a>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <h2 class="title">Mizoram</h2>
                <p class="copy">Suvali Beach is an urban beach along the Arabian Sea situated near the village of Suvali in the Hazira suburb of Surat in Gujarat State, India.</p><a href="https://www.google.co.in/maps/place/Suvali+Beach/@21.1641247,72.616472,17.21z/data=!4m5!3m4!1s0x3be1b2263aa762d5:0xb48575dc6f96014a!8m2!3d21.1638544!4d72.6191766" target="_blank"><button class="btn">Explore</button></a>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <h2 class="title">Meghalaya</h2>
                <p class="copy">Gopi Talav is a lake in the Gopipura locality in the city of Surat in Gujarat state of India. It was built in circa 1510 CE by Malik Gopi.</p><a href="https://www.google.co.in/maps/place/Gopi+Talav/@21.1885633,72.827201,17z/data=!3m1!4b1!4m5!3m4!1s0x3be04e5d35ecc4b5:0x78d4870ec9b7f28!8m2!3d21.1886016!4d72.8297614" target="_blank"><button class="btn">Explore</button></a>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <h2 class="title">Jharkhand</h2>
                <p class="copy">Surat Castle, or Surat Fort, is a 16th-century structure in the city of Surat. </p><a href="https://www.google.co.in/maps/place/Surat+Castle/@21.1960961,72.8155234,17z/data=!3m1!4b1!4m5!3m4!1s0x3be04e62e7128bb3:0x95b25311d0d9496c!8m2!3d21.1960961!4d72.8177121" target="_blank"><button class="btn">Explore</button></a>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <h2 class="title">Chhattisgarh</h2>
                <p class="copy">Most of the people visit this beach for its calmness, beautiful views and to spend some quality time with their family and friends.</p><a href="https://www.google.co.in/maps/place/Dumas+Beach/@21.0864516,72.7031313,15z/data=!3m1!4b1!4m5!3m4!1s0x3be0533302a63a7f:0x6d86e327f98bb542!8m2!3d21.0837964!4d72.7093466" target="_blank"><button class="btn">Explore</button></a>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <h2 class="title">Bihar</h2>
                <p class="copy">This is a perfect place for wildlife lovers. And yes, you will be able to spot deer, Bengal tigers, white peafowl and many more.</p><a href="https://www.google.co.in/maps/place/Sarthana+Nature+Park+And+Zoo/@21.2303193,72.896579,17z/data=!3m1!4b1!4m5!3m4!1s0x3be04f5f3b387bb5:0x261e733c27afa7d2!8m2!3d21.2303193!4d72.8987677" target="_blank"><button class="btn">Explore</button></a>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <h2 class="title">Assam</h2>
                <p class="copy">This garden is a European style garden. The vibrant flower bed, lovely fountains will steal your heart with its endless beauty. </p><a href="https://www.google.co.in/maps/place/Dutch+Garden/@21.1913545,72.8111853,17z/data=!3m1!4b1!4m5!3m4!1s0x3be04e7b76e91d67:0xd8001046b5c79dac!8m2!3d21.1913545!4d72.813374" target="_blank"><button class="btn">Explore</button></a>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <h2 class="title">Andaman and Nicobar Islands</h2>
                <p class="copy">This museum has been serving as an important tourist place in Surat. The best thing about this museum is the 3D sound, laser show and lighting effects.</p><a href="https://www.google.co.in/maps/place/Sardar+Patel+Museum/@21.1956721,72.8178593,17z/data=!3m1!4b1!4m5!3m4!1s0x3be04e63b3043311:0xff609ef169f1ada2!8m2!3d21.1956721!4d72.820048" target="_blank"><button class="btn">Explore</button></a>
            </div>
        </div>
        
    </main>
</div>
<a class="left" href="../home/index.php"><i class="fa fa-arrow-left back" aria-hidden="true"><br>Back</i></a>

</body>
</html>