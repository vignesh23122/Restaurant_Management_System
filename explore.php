<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css"
        integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
        <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan+2:400,700&display=swap" rel="stylesheet">
   <link rel="shortcut icon" href="https://img.icons8.com/plasticine/100/000000/search-more.png" type="image/x-icon">
   <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;

        }body{
        font-family: 'Baloo Chettan 2', cursive;
    line-height: 1.5;
}
       
       

        nav {
            background: #000;
            color: #fff;
            display: flex;
            justify-content: space-between;
            bottom-border:
        }

        nav .mainMenu {
            display: flex;
            list-style: none;
        }

        nav .mainMenu li a {
            display: inline-block;
            padding: 15px;
            text-decoration: none;
            text-transform: uppercase;
            color: #fff;
            font-size: 1.5rem;
        }

        nav .mainMenu li a:hover {
            background: rgb(255, 94, 0);
        }

        nav .openMenu {
            font-size: 2rem;
            margin: 20px;
            display: none;
            cursor: pointer;
        }

        nav .mainMenu .closeMenu,
        .icons i {
            font-size: 2rem;
            display: none;
            cursor: pointer;
        }

        nav .logo {
            margin: 6px;
            font-size: 25px;
            cursor: pointer;
        }

        @media(max-width: 800px) {
            nav .mainMenu {
                height: 100vh;
                position: fixed;
                top: 0;
                right: 0;
                left: 0;
                z-index: 10;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                background: #000;
                transition: top 1s ease;
                display: none;
            }

            nav .mainMenu .closeMenu {
                display: block;
                position: absolute;
                top: 20px;
                right: 20px;

            }

            nav .openMenu {
                display: block;
            }

            nav .mainMenu li a:hover {
                background: none;
                color: rgb(255, 123, 0);
                font-size: 1.6rem;
            }

            .icons i {
                display: inline-block;
                padding: 12px;
            }
        }

        .menu {
            padding: 0 10px 30px 10 px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            grid-gap: 20px 40px;
        }

        .heading {
            background-color: #cb202d;
            color: #ffffff;
            margin-bottom: 30px;
            padding: 30px 0;
            grid-column: 1/-1;
            text-align: center;

        }

        .heading>h1 {
            font-weight: 400;
            font-size: 30px;
            letter-spacing: 10px;
            margin-bottom: 10px;


        }

        .heading>h3 {
            font-weight: 600;
            font-size: 22px;
            letter-spacing: 5px;
            margin-bottom: 10px;

        }

        .food-items {

            display: grid;
            position: relative;
            grid-template: auto 1fr;
            border-radius: 15px;
            box-shadow: 0 0 15px rgb(0, 0, 0, 01);
        }

        .food-items img {
            position: relative;
            width: 100%;
            border-radius: 15px 15px 0 0;

        }

        h1 {
            grid-column: 1/-1;
            text-align: center;

        }

        .details {
            padding: 20px 10px;
            display: grid;
            grid-template-rows: auto 1fr 50px;
            grid: row gap 15px;


        }

        .details-sub {
            display: grid;
            grid-template-columns: auto auto;


        }

        .details-sub>h5 {
            font-weight: 600;
            font-size: 18px;

        }

        .price {
            text-align: right;

        }

        .details>p {
            color: rgb(255, 145, 0);
            font-size: 15px;
            line-height: 28px;
            font-weight: 400;
            align-self: stretch;
        }

        .details>button {
            background-color: #cb202d;
            border: none;
            color: #ffffff;
            font-size: 16px;
            font-weight: 600;
            border-radius: 5px;
            width: 180px;
        }
         
        #myBtn {
    display: none; /* Hidden by default */
    position: fixed; /* Fixed/sticky position */
    bottom: 20px; /* Place the button at the bottom of the page */
    right: 30px; /* Place the button 30px from the right */
    z-index: 99; /* Make sure it does not overlap */
    border: none; /* Remove borders */
    outline: none; /* Remove outline */
    background-color: rgb(255, 145, 0); /* Set a background color */
    color: white; /* Text color */
    cursor: pointer; /* Add a mouse pointer on hover */
    padding: 15px; /* Some padding */
    border-radius: 10px; /* Rounded corners */
    font-size: 18px; /* Increase font size */
    }
  
  #myBtn:hover {
    background-color: #555; /* Add a dark-grey background on hover */
  }
  .user-wel{
      line-height: 10px;
  }
  
li.diffcol{
      background-color: rgb(255, 145, 0);
    }


    </style>


</head>

<body>
<div><nav class="wrapper">
        <div class="logo">
        <img src="logos\logo.png" alt="main-logo" style="height: 45px; width: 100px;" srcset="">
        </div>
        <div class="openMenu"><i class="fa fa-bars"></i></div>
        <ul class="mainMenu">
            <li><a href="index.php">Home</a></li>
            <li class="diffcol"><a href="explore.php">Products</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="settings.php">settings</a></li>
            <div class="closeMenu"><i class="fa fa-times"></i></div>

        </ul>
    </nav>


    <script>const mainMenu = document.querySelector('.mainMenu');
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
    
        <div>
            <!---Top button-->
      <div>
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
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
          function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
          }
        </script>
      </div>
        </div>

        <!------MAIN CONTENT ------------->
        <div><div class="menu">
        <div class="heading">
            <h3>
                &mdash; MENU &mdash;
            </h3>

        </div>
        <div class="food-items">
            <img src="https://img.icons8.com/cotton/64/000000/beefburger.png">
            <div class="details">
                <div class="details-sub">
                    <h5> smoky burger </h5>
                    <h5 class="price">Rs:700</h5>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipiscing elit</p>
                <button onclick="window.location.href='checkout.html';"> Add To Cart </button>
            </div>
        </div>
        <div class="food-items">
            <img src="https://img.icons8.com/cotton/64/000000/beefburger.png">
            <div class="details">
                <div class="details-sub">
                    <h5>Smoky Hamburger</h5>
                    <h5 class="price">Rs:900</h5>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipiscing elit</p>
                <button onclick="window.location.href='checkout.html';"> Add To Cart</button>
            </div>
        </div>
        <div class="food-items">
            <img src="https://img.icons8.com/cotton/64/000000/beefburger.png">
            <div class="details">
                <div class="details-sub">
                    <h5>Smoky Hamburger</h5>
                    <h5 class="price">Rs:700</h5>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipiscing elit</p>
                <button onclick="window.location.href='checkout.html';"> Add To Cart</button>
            </div>
        </div>
        <div class="food-items">
            <img src="https://img.icons8.com/cotton/64/000000/beefburger.png">
            <div class="details">
                <div class="details-sub">
                    <h5>Smoky Hamburger</h5>
                    <h5 class="price">Rs:400</h5>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipiscing elit</p>
                <button onclick="window.location.href='checkout.html';"> Add To Cart</button>
            </div>
        </div>
        <div class="food-items">
            <img src="https://img.icons8.com/cotton/64/000000/beefburger.png">
            <div class="details">
                <div class="details-sub">
                    <h5>Smoky Hamburger</h5>
                    <h5 class="price">Rs:988</h5>
                </div>
                <p> Lorem ipsum dolor sit amet consectetur adipiscing elit </p>
                <button onclick="window.location.href='checkout.html';"> Add To Cart</button>
            </div>
        </div>
        <div class="food-items">
            <img src="https://img.icons8.com/cotton/64/000000/beefburger.png">
            <div class="details">
                <div class="details-sub">
                    <h5>Smoky burger</h5>
                    <h5 class="price">Rs:888</h5>
                </div>
                <p> Lorem ipsum dolor sit amet consectetur adipiscing elit </p>
                <button onclick="window.location.href='checkout.html';"> Add To Cart</button>


            </div>
        </div>
        <div class="food-items">
            <img src="https://img.icons8.com/cotton/64/000000/beefburger.png">
            <div class="details">
                <div class="details-sub">
                    <h5> smoky burger </h5>
                    <h5 class="price">Rs:700</h5>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipiscing elit</p>
                <button onclick="window.location.href='checkout.html';"> Add To Cart </button>
            </div>
        </div>
        <div class="food-items">
            <img src="https://img.icons8.com/cotton/64/000000/beefburger.png">
            <div class="details">
                <div class="details-sub">
                    <h5> smoky burger </h5>
                    <h5 class="price">Rs:700</h5>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipiscing elit</p>
                <button onclick="window.location.href='checkout.html';"> Add To Cart </button>
            </div>
        </div>
        <div class="food-items">
            <img src="https://img.icons8.com/cotton/64/000000/beefburger.png">
            <div class="details">
                <div class="details-sub">
                    <h5> smoky burger </h5>
                    <h5 class="price">Rs:700</h5>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipiscing elit</p>
                <button onclick="window.location.href='checkout.html';"> Add To Cart </button>
            </div>
        </div>
        <div class="food-items">
            <img src="https://img.icons8.com/cotton/64/000000/beefburger.png">
            <div class="details">
                <div class="details-sub">
                    <h5> smoky burger </h5>
                    <h5 class="price">Rs:700</h5>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipiscing elit</p>
                <button onclick="window.location.href='checkout.html';"> Add To Cart </button>
            </div>
        </div>
        <div class="food-items">
            <img src="https://img.icons8.com/cotton/64/000000/beefburger.png">
            <div class="details">
                <div class="details-sub">
                    <h5> smoky burger </h5>
                    <h5 class="price">Rs:700</h5>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipiscing elit</p>
                <button onclick="window.location.href='checkout.html';"> Add To Cart </button>
            </div>
        </div>
        <div class="food-items">
            <img src="https://img.icons8.com/cotton/64/000000/beefburger.png">
            <div class="details">
                <div class="details-sub">
                    <h5> smoky burger </h5>
                    <h5 class="price">Rs:700</h5>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipiscing elit</p>
                <button onclick="window.location.href='checkout.html';"> Add To Cart </button>
            </div>
        </div>
        <div class="food-items">
            <img src="https://img.icons8.com/cotton/64/000000/beefburger.png">
            <div class="details">
                <div class="details-sub">
                    <h5> smoky burger </h5>
                    <h5 class="price">Rs:700</h5>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipiscing elit</p>
                <button onclick="window.location.href='checkout.html';"> Add To Cart </button>
            </div>
        </div>
        <div class="food-items">
            <img src="https://img.icons8.com/cotton/64/000000/beefburger.png">
            <div class="details">
                <div class="details-sub">
                    <h5> smoky burger </h5>
                    <h5 class="price">Rs:700</h5>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipiscing elit</p>
                <button onclick="window.location.href='checkout.html';"> Add To Cart </button>
            </div>
        </div>
        <div class="food-items">
            <img src="https://img.icons8.com/cotton/64/000000/beefburger.png">
            <div class="details">
                <div class="details-sub">
                    <h5> smoky burger </h5>
                    <h5 class="price">Rs:700</h5>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipiscing elit</p>
                <button onclick="window.location.href='checkout.html';"> Add To Cart </button>
            </div>
        </div>
        </div>
        </div>


    
</body>

</html>