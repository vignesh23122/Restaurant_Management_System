<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Home</title>
  <link rel="stylesheet" href="stylesheat.css">
  <link rel="shortcut icon" href="https://img.icons8.com/wired/64/000000/home-page.png" type="image/x-icon">
  
  
</head>

<body>
  <!-- partial:index.partial.html -->
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resturant</title>
    <link rel="stylesheet" href="stylesheat.css">
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan+2:400,700&display=swap" rel="stylesheet">
   
   
<!--fevicons-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
  </head>

  <body>

    <!--nav bar begins-->
    <div>
      <nav   id="navbar">
        <div class="logo"> <h1 style="font-size:33px">Fir-ed</h1></div>
        <div class="openMenu"><i class="fa fa-bars"></i></div>
        <ul class="mainMenu">
          <li class="diffcol"><a href="index.php">Home</a></li>
          <li><a href="explore.php">Products</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="settings.php">Settings</a></li>
          <div class="closeMenu"><i class="fa fa-times"></i></div>

        </ul>
      </nav>

      <!-- navbar open and close script -->
      
      <script>
        const mainMenu = document.querySelector('.mainMenu');
        const closeMenu = document.querySelector('.closeMenu');
        const openMenu = document.querySelector('.openMenu');
        openMenu.addEventListener('click', show);
        closeMenu.addEventListener('click', close);
        function show() {
          mainMenu.style.display = 'flex';
          mainMenu.style.top = '0';
        }
        function close() {
          mainMenu.style.top = '-100%';
        }
        
      </script>
    </div>
<!-- nav ends -->
     




<!---------------Header section-------------->

    <div id="main">
      
      <header class="header">
        <div class="hero">

          <h1 class="title">Food For Health</h1>
          <a href="Book-a-table.html" class="hero-button pulsate">Book a table</a>

      </header>
<!--End of Header==================-->

<!---Top button-->
      <div>
        <button onclick="window.location.href='#main'" id="myBtn" title="Go to top" href="#navbar">Top</button>

        <!-- go to top script -->
        <script>
          mybutton = document.getElementById("myBtn");

          // When the user scrolls down 20px from the top of the document, show the button
          window.onscroll = function () { scrollFunction() };

          function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
              mybutton.style.display = "block";
            } else {
              mybutton.style.display = "none";
            }
          }

          // When the user clicks on the button, scroll to the top of the document
          
        </script>
      </div>
<!-- top button section ends here -->

<!---=====About Section=====-->
      <section id="about">
        <div>
          <h2 class="title-text">About </h2>
        </div>
        <div class="about-center">
          <!---Single item-->
          <article class="about">
            <div class="about-icon"><i class="fas fa-mug-hot"></i></div>
            <div class="about-text">
              <h2 class="about-subtitle">Drinks</h2>
              <p class="about-info">Sometimes you just need the cup with the little green straw!!</p>
            </div>
          </article>
          <!--End of single item-->

          <!---Single item-->
          <article class="about">
            <div class="about-icon"><i class="fas fa-utensils"></i></div>
            <div class="about-text">
              <h2 class="about-subtitle">Healthy Foods</h2>
              <p class="about-info">When you Start eating foods with labels, Your no onger need to count calories!</p>
            </div>
          </article>
          <!--End of single item-->

          <!---Single item-->
          <article class="about">
            <div class="about-icon"><i class="fas fa-mortar-pestle"></i></div>
            <div class="about-text">
              <h2 class="about-subtitle">Organic Food</h2>
              <p class="about-info">Every Time you buy ORGNIC, you're persuading more farmers to GROW organic!</p>
            </div>
          </article>
          <!--End of single item-->

          <!---Single item-->
          <article class="about">
            <div class="about-icon"><i class="fas fa-drumstick-bite"></i></div>
            <div class="about-text">
              <h2 class="about-subtitle">White Meat</h2>
              <p class="about-info">Flesh-meats will depreciate the blood. Cook meat with spices, and eat it with rich
                cakes and pies, is essential..</p>
            </div>
          </article>
          <!--End of single item-->

          <!---Single item-->
          <article class="about">
            <div class="about-icon"><i class="fas fa-fish"></i></div>
            <div class="about-text">
              <h2 class="about-subtitle">Sea Food</h2>
              <p class="about-info">"Food is for Eating, and Good Food is to be enjoyed.., I think Food is, actually,
                very beautiful in itself."</p>
            </div>
          </article>
          <!--End of single item-->

          <!---Single item-->
          <article class="about">
            <div class="about-icon"><i class="fas fa-pepper-hot "></i></div>
            <div class="about-text">
              <h2 class="about-subtitle">Hot & Spicy</h2>
              <p class="about-info">You can celebrate this holiday by trying some really hot food of Thai, Indian,
                Creole, and the Caribbean which are popular for the recipe with spicy ingredients. If you are a spicy
                food lover, you will surely love this day. You can order your favorite spicy food today as the day is
                dedicated to enjoying spicy food.</p>
            </div>
          </article>
          <!--End of single item-->
        </div>
      </section>
<!--=====End of About Section============-->

<!---Menu Section---=========-->
      <section class="menu" id="menu">
        <article class="menu-image"></article>
        <article class="menu-text">
          <div class="menu-text-center">
            <h1>Our Menu</h1>
            <p>Here we r providing a good and delicious meal that will satisfy your Hunger......</p>
            
            <a href="explore.php">Explore</a>
          </div>
        </article>
      </section>
<!---End of Menu Section============-->

<!---Social Icons-->
      <section id="social-icons">
        <a href="facebook.com"><i class="fab fa-facebook facebook"></i></a>
        <a href="#"><i class="fab fa-twitter twitter"></i></a>
        <a href="#"><i class="fab fa-instagram instagram"></i></a>
        <a href="#"><i class="fab fa-google-plus plus"></i></a>
      </section>
<!--End of Social Icons-->

<!-- offered varieties----- -->
      <div>
        <h2 class="title-text">Varieties we Offer</h2>
      </div>

      <section id="numbers">

        <article class="number">
          <i class="fas fa-cloud-meatball"></i>
          <p>50</p>
          <h3> Meat dishes</h3>
        </article>
        <article class="number">
          <i class="fas fa-cheese"></i>
          <p>35</p>
          <h3> Cheese Variations</h3>
        </article>
        <article class="number">
          <i class="fas fa-pizza-slice"></i>
          <p>25</p>
          <h3> Pizzas</h3>
        </article>
        <article class="number">
          <i class="fas fa-ice-cream"></i>
          <p>40</p>
          <h3> Desserts</h3>
        </article>
      </section>
<!--End of Counter===================-->

 
      


     
<!---footer========-->
      <footer class="footer">

        <div class="section-center">
          <p class="text">
            &copy; <span>Food For Health</span>
          </p>
        </div>

      </footer>

<!-- --end of footer-- -->











      
<!-- script files -->
     <script src="onClickMenu.js"></script>
<!--Magnific POPup Jquery also-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
     
      
      <script src="magnific/jquery.magnific-popup.min.js"></script>
      <script src="magnific/magnific.js"></script>


    
    </div>
  </body>

  </html>
  <!-- partial -->

</body>

</html>