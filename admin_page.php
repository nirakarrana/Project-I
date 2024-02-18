<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <style>
        * {
            margin: 0px;
            padding: 0px;
        }
        
        body {
            background: #f3f4f6;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        
        ul {
            list-style: none;
        }
        
        li {
            display: inline-block;
        }
        
        div {
            display: inline-block;
        }
        
        header {
            margin: auto;
            width: 100%;
        }
        
        .top {
            /* margin: 15px 20px; */
            background: #fff;
            max-width: 100%;
            font-size: 18px;
            font-weight: bolder;
            color: #27272b;
            border-bottom: 1px solid #e4e4e6;
        }
        .middle li {
            margin: 36px;
            color: #aaadb6;
        }

        .left {
            margin: 0px 20px;
            margin-left: 90px;
        }
        
        .middle .current {
            color: #000;
            border-bottom: solid 2px rgb(91, 55, 280);
            opacity: 100%;
        }
        .right {
            margin-left: 480px;
        }
        footer {
        text-align: center;
        padding: 3px;
        background-color: black;
         color: white;
        }        
    </style>
</head>
<body>
<header>
        <div class="top">
            <div class="left">
                <a href="user_page.php">JOBHUB</a>
            </div>
            <div class="middle">
                <ul>
                    <li class="current"><a href="user_page.php">HOME</a></li>
                    <li class="current"><a href="#">ABOUT US</a></li>
                    <li class="current"><a href="contact.php">CONTACT US</a></li>
                </ul>
            </div>   
            <div class="right">
                <a class="btn" href="login_form.php" type="submit">Login</a>
				<a class="btn" href="register_form.php" type="submit">Register</a>  
            </div>  
        </div>
    </header>
<div class="container">

   <div class="content">
      <p>this is an admin page</p>
      <a href="logout.php" class="btn">logout</a>
   </div>
</div>
<footer>
  <p>Prepared By:Nirakar and Saimundra</p>
  <p class="copyright">JOBHUB © 2024, all right reserved</p>
</footer>

</body>
</html>