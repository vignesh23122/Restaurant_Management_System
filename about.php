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
   
  <style>
         * {
       box-sizing: border-box;
       margin: 0;
       padding: 0;
   
   }
   body{
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    line-height: 1.5;
}

::-webkit-scrollbar{
    background: transparent;
    width: 1px;
}
::-webkit-scrollbar-thumb{
    background: transparent;
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
    
                  
    .about-section{
    width:100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap:5px;
    text-align:center;
    background-color: #474e5d;
    padding: 2em 0;
    
}
.about-section h1{
  font-size:45px;
}
.about-section {
  font-size:23px;
 
}
.row{
  display:grid;
  grid-template-columns: repeat(2,1fr);
gap:10px;
place-items:center;
max-width:50rem;
margin:3em auto;
padding:0 1em;
}
.card img{
 display:none;
}
.card{
  margin:.3em;
  padding:20px;
  background:whitesmoke;
  max-width:39ch;
  box-shadow: 5px 5px 30px 0 black;
  border-radius:15px;
 
}
.card h2{
  font-size:30px;
}
.card .title{
  font-size:22px;
  font-weight:400;
}
.card p{
  margin:5px;
}

.btn{
  font-size:20px;
  height:38px;
  border-radius:10px;
  padding:5px 8px;
  text-align:center;
  color:white;
  background:black;
  outline:none;
  border:none;
  border-radius:none;
  cursor:pointer;
  transition: transform .7s ease, background .9s ease;
  
}
.btn:hover{
  transform: scale(1.1,1.1);
  background: rgb(255,94,0);
}
@media(max-width:685px){
    .row{
        grid-template-columns: repeat(1,1fr);
    }
}
   
    </style>
    
   
   </head>
   <body>
           <nav class="wrapper">
               <div class="logo">
              <h1>Fri-ed</h1>
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
           

           <div class="about-section">
  <h1>About Us </h1>
  <p>Persons behind the project..<br>
   </p>
</div>

<h2 style="text-align:center;margin-top:10px">Our Team</h2>
<div class="row">
  

  
    <div class="card">
    <img src="https://img.icons8.com/emoji/48/000000/man-beard.png" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Shanmugam</h2>
        <p class="title" >Master-Chef</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p><a href="mailto:shanmugamsekar153@gmail.com" >shanmugamsekar153@example.com</a></p>
        <p><button class="btn">Contact</button></p>
      </div>
    </div>
    <div class="card">
      <img src="https://img.icons8.com/emoji/48/000000/man-beard.png" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Shristhidharan</h2>
        <p class="title">CEO</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p><a href="mailto:shrishtidharan@gmail.com">shristhidharan@gmail.com</a></p>
        <p><button class="btn">Contact</button></p>
      </div>
    </div>
  

  
  
    <div class="card">
    <img src="https://img.icons8.com/emoji/48/000000/man-beard.png" alt="John">
      <div class="container">
        <h2>Srivignesh</h2>
        <p class="title">Founder & Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p><a href="mailto:srivigneshssv@gmail.com">srivigneshssv@gmail.com</a></p>
        <p><button class="btn">Contact</button></p>
      </div>
    </div>
  
  
    <div class="card">
      <img src="https://img.icons8.com/emoji/48/000000/man-beard.png" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Suchit</h2>
        <p class="title">Enthusiast & Sponser</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p><a href="mailto:suchitchan2004@gmail.com">suchitchan2004@gmail.com</a></p>
        <p><button class="btn">Contact</button></p>
      </div>
    </div>
  
</div>
      
              
 
          
   </body>
   </html>
   