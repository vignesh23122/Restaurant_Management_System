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
    <title>contact</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css"
        integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
        <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan+2:400,700&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="https://img.icons8.com/metro/26/000000/phone.png" type="image/x-icon">
  <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;

        }
        
::-webkit-scrollbar{
    background: transparent;
    width: 1px;
}
::-webkit-scrollbar-thumb{
    background: transparent;
}
        body{

        /* font-family: 'Baloo Chettan 2', cursive; */
        
 font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
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
        
/* MAIN CONTENET */
/* Style inputs with type="text", select elements and textareas */
input[type=text], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: rgb(255, 145, 0);
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #0067ab;
}

/* Add a background color and some padding around the form */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

/*MAIN CONTENET ENDS HERE****/
li.diffcol{
      background-color: rgb(255, 145, 0);
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
            <li><a href="index.php">Home</a></li>
            <li><a href="explore.php">Products</a></li>
            <li class="diffcol"><a href="contact.php">Contact</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="settings.php">settings</a></li>
            <div class="closeMenu"><i class="fa fa-times"></i></div>

        </ul>
    </nav>


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
        }</script>

        <!--main content-->
        <div>
          <h2 style="text-align:center">For any queries contact...</h2>
        </div>
        <div class="container">
  <form action="#">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
      <option value="India">India</option>
      <option value="Japan">Japan</option>
      <option value="uk">UK</option>
      <option value="Africa">Africa</option>
     
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
  <div class="queries">
    <h3>For contacts: <a href="mailto:sidiot151@yahoo.com">sidiot151@yahoo.com</a></h3>
  </div>
</div>


</body>
</html>