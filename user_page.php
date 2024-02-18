<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

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
        .job-container{
            display: flex;
            justify-content: center;
            flex-wrap: wrap ;
            margin-top: 100px;
        }
        .job{
           width: 325px;
           background-color: #f0f0f0;
           border-radius: 8px;
           overflow: hidden;
           box-shadow: 0px 2px 4px rgba(0,0,0,0.2);
           margin: 20px;
        }
        .job img{
            width: 100%;
            height: auto;
        }
        .job-content{
            padding: 16px;
        }
        .job-content h3{
            font-size: 28px;
            margin-bottom: 8px;
        }
        .job-content p{
            color: #666;
            font-size: 15px;
            line-height: 1.3;
        }
        .job-content .btn{
            display: inline-block;
            padding: 8px 16px;
            background-color: #333;
            text-decoration: none;
            border-radius: 4px;
            margin-top: 16px;
            color: #fff;
        }     
        .job-content .btn:hover{
            background: red;
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
    <div class="job-container">
        <div class="job">
            <img src="./logo.png">
            <div class="job-content">
                <h3>WEB DEVELOPER</h3>
                <p>Rs.2,00,000</p>
                <a href="" class="btn">Apply</a>
            </div>
        </div>
        <div class="job">
            <img src="./logo.png">
            <div class="job-content">
                <h3> VIDEO GAME DESIGNER</h3>
                <p>Rs.3,00,000</p>
                <a href="" class="btn">Apply</a>
            </div>
        </div>
        <div class="job">
            <img src="./logo.png">
            <div class="job-content">
                <h3> SECURITY ENGINEER </h3>
                <p>Rs.1,00,000</p>
                <a href="" class="btn">Apply</a>
            </div>
        </div>
    </div>
<div class="container">
    <div class="content">
      <a href="logout.php" class="btn">logout</a>
   </div>
</div>
<footer>
  <p>Prepared By:Nirakar and Saimundra</p>
  <p class="copyright">JOBHUB © 2024, all right reserved</p>
</footer>
</body>
</html>