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
    <title>About</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
   <link rel="shortcut icon" href="https://img.icons8.com/cute-clipart/64/000000/about.png" type="image/x-icon">
   <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan+2:400,700&display=swap" rel="stylesheet">
  <style>
         * {
       box-sizing: border-box;
       margin: 0;
       padding: 0;
   
   }
   body{
   font-family: 'Baloo Chettan 2', cursive;
    line-height: 1.5;
}
   nav {
       background: #000;
       color: #fff;
       display: flex;
       justify-content: space-between;
       align-item:center;
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
       background: rgb(255,94,0);
   }
   nav .openMenu {
       font-size: 2rem;
       margin: 20px;
       display: none;
       cursor: pointer;
   }
   nav .mainMenu .closeMenu , .icons i {
       font-size: 2rem;
       display: none;
       cursor: pointer;
   }
   
   nav .logo {
       margin: 6px;
       font-size: 25px;
       cursor: pointer;
   }
   @media(max-width: 800px){
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
  
li.diffcol{
      background-color: rgb(255, 145, 0);
    }
    
                  

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

   
    </style>
    
   
   </head>
   <body>
           <nav class="wrapper">
               <div class="logo">
               <img src="logos\logo.png" alt="main-logo" style="height: 45px; width: 100px;" srcset="">
               </div>
               <div class="openMenu"><i class="fa fa-bars"></i></div>
               <ul class="mainMenu">
                   <li ><a href="index.php">Home</a></li>
                   <li ><a href="explore.php">Products</a></li>
                   <li ><a href="contact.php">Contact</a></li>
                   <li class="diffcol" ><a href="about.php">About</a></li>
                   <li ><a href="settings.php">settings</a></li>
                   <div class="closeMenu"><i class="fa fa-times"></i></div>
                   
               </ul>
           </nav>
   
   
       <script >const mainMenu = document.querySelector('.mainMenu');
           const closeMenu = document.querySelector('.closeMenu');
           const openMenu = document.querySelector('.openMenu');
           
           
           
           
           openMenu.addEventListener('click',show);
           closeMenu.addEventListener('click',close);
           
           function show(){
               mainMenu.style.display = 'flex';
               mainMenu.style.top = '0';
           }
           function close(){
               mainMenu.style.top = '-100%';
           }</script>
           <div>

           <div class="about-section">
  <h1>About Us </h1>
  <p>A sample page noting to show <br>
   <img src="https://img.icons8.com/cotton/64/000000/rolling-on-the-floor-laughing-icon.png"/></p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  

  <div class="column">
    <div class="card">
    <img src="https://img.icons8.com/emoji/48/000000/man-beard.png" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Shanmugam</h2>
        <p class="title" style="font-family:yellowtail">Chef</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p><a href="mailto:shanmugam@gmail.com" >shanmugam@example.com</a></p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
<div class="column">
    <div class="card">
      "<img src="https://img.icons8.com/emoji/48/000000/man-beard.png" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Shristhidharan</h2>
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p><a href="mailto:shrishtidharan@gmail.com">shristhidharan@example.com</a></p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
    <img src="https://img.icons8.com/emoji/48/000000/man-beard.png" alt="John" style="width:100%">
      <div class="container">
        <h2>Srivignesh</h2>
        <p class="title">Artist</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p><a href="mailto:srivigneshssv@gmail.com">srivigneshssv@gmail.com</a></p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      "<img src="https://img.icons8.com/emoji/48/000000/man-beard.png" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Suchit</h2>
        <p class="title">Sponsor</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p><a href="mailto:suchit@gmail.com">suchit@gmail.com</a></p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
      
              
           </div>
          
   </body>
   </html>
   