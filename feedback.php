<?php 
require 'config/connect.php';
session_start();
if (isset($_SESSION['user_id'])) {
    header("location:index.php");
}
session_destroy();
session_start();
ob_start(); 
?>
	<!DOCTYPE html>
	<html>
	<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css2/style2.css">
  <link rel="stylesheet" type="text/css" href="css1/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  <style>
  		#transition {
  	 width: 398px;
 	 height: 148px;
 	 background: black;
	 position: relative;
         /*transition: width 2s, height 4s, transform 2s;*/
         animation: mymove 20s infinite;
	}
@keyframes mymove {
  from {left: 50px;}
  to {left: 920px;}
}

/*#transition:hover {width: 300px;  height: 300px;transform: rotate(360deg)}*/


#capstone-effect {
  	 width: 700px;
 	 height: 60px;
 	 background: orange;
	 position: relative;
         transition: width 2s, height 4s, transform 2s;
	   animation-name: example;
           animation-duration: 12s;
           animation-iteration-count: infinite;
	}

/*#capstone-effect:hover 
@keyframes example  {width: 800px;  height: 25px;transform: rotate(360deg)}*/

@keyframes example{
      0%   {background-color:orange; }
  25%  {background-color:yellow; }
  50%  {background-color:purple; }
  75%  {background-color:pink; }
  100% {background-color:orange;}
  0%   { opacity: 0; }
  100% { opacity: 1; }
}

 	 body.homepage{
			background: linear-gradient(132deg, #9f00c5,#ffff00);
			background-size: 400% 400%;
			animation: BackgroundGradient 10s ease infinite;
		}
		@keyframes BackgroundGradient{
			0%{background-position: 0% 50%;}
			50% {background-position: 100% 50%;}
			100% {background-position: 0% 50%;}
		}

 
  /*background-color: orange;
  animation-name: example;
  animation-duration: 12s;
  animation-iteration-count: infinite;
}

@keyframes example {
  <!--from {background-color: orange;}
  to {background-color: purple;}-->
    0%   {background-color:orange; }
  25%  {background-color:yellow; }
  50%  {background-color:purple; }
  75%  {background-color:pink; }
  100% {background-color:orange;}
}*/


hr {
  display: block;
  margin-top: 0.5em;
  margin-bottom: 0.5em;
  margin-left: auto;
  margin-right: auto;
  border-style: inset;
  border-width: 100%;
  height:20px;
  border-width:0;
  color:blue;
  background-color: black
}

hr.horz	 {
  display: block;
  margin-top: 0.5em;
  margin-bottom: 0.5em;
  margin-left: auto;
  margin-right: auto;
  border-style: inset;
  border-width: 100%;
  height:20px;
  border-width:0;
  color: black;
  background-color: black;
}
 .carousel-inner img {
    width: 100%;
    height: 100%;
  }

  .aboutimg{
  	width: 100%;
  	height: 300px!important;
  }
  table#t01 tr:nth-child(even) {
  background-color: #eee;
  text-align: center;
  padding: 15px;
}
table#t01 tr:nth-child(odd) {
 background-color: #fff;
 text-align: center;
 padding: 15px;
}
table#t01 th {
  background-color: black;
  color: white;
  text-align: center;
  padding: 15px;
}

img.vitlogo{
  border-radius: 8px;
}
img:hover {
  box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}

ul.topnav {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

ul.topnav li {float: left;}

ul.topnav li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

ul.topnav li a:hover:not(.active) {background-color: #111;}

ul.topnav li a.active {background-color: #4CAF50;}

ul.topnav li.right {float: right;}


@media screen and (max-width: 600px) {
  ul.topnav li.right, 
  ul.topnav li {float: none;}
}
  </style>
  </head>
	<body class="homepage">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Connect Life</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="chatbot.php">ChatBot</a>
      </li>

      <li class="nav-item">
        <a class="nav-link " href="contact.php">Contact</a>
      </li>
            <li class="nav-item dropdown">		
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Account Settings
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="about.php">About</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="feedback.php">feedback</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<center><div id="capstone-effect"><b><em><h1 style=" color:black; font-weight: 700; font-size: 220%;">Capstone Project of 16BCE0366</h1><b><em></div></center>
    <h1 style="font-weight: 900;"><u><em><center>Welcome to ConnectLife</em></u></h1></center>
  <hr class="horz"><div id="transition"><img class="vitlogo" src="images/vitlogo.png"  height="150" width="400"></img></div><hr class="horz">
<br>    
<h2 style="color:yellow; font-weight: 900; font-size: 180%;">
<center>A Heart-felt & warm welcome to the website which connects life of people- <em>ConnectLife</em></center>
</h2>

<div id="demo" class="carousel slide py-4" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images2/cl3.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3 >Socialmedia Website</h3>
        <p>A website that connects people!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images2/cl2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Capstone project</h3>
        <p>Thanks VIT for capstone project, 16BCE0366!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images2/cl.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Idea of ConnectLife</h3>
        <p>An idea turned to action!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center" style=" color:black; font-family: 'Josefin Sans', sans-serif; font-weight: 700; font-size: 220%;"><u>About The Page</u></h2>
  </div>
  <div class="container-fluid">
    <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
      <img src="images2/cl2.jpg" class="img-fluid aboutimg">
    </div>
    <div class="col-lg-6 col-md-6 col-12">
      <h2 class="display-4" style=" color:black; font-family: 'Josefin Sans', sans-serif; font-weight: 700; font-size: 220%;">ConnectLife : Socialmedia Website</h2>
      <p class="py-5">
        A Socialmedia webpage for connecting people with simple backend connections.
      </p>
      <a href="index.php" class="btn btn-success">Check more about us</a>
    </div>
  </div>
</div>
</section>

<hr class="horz">

<section class="my-5">
  <div class="py-5">
<h1><u><b><em><center>Our Services</center></em></u></b></h1>
<br>    
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-12">
        <div class="card h-100">
          <img class="card-img-top h-50" src="images/chatbot.png" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">ChatBot</h4>
            <p class="card-text">The chatbot feature can be used here through which you can talk to our chatbot</p>
            <a href="#" class="btn btn-primary">Check out</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-12">
        <div class="card h-100">
          <img class="card-img-top h-50" src="images/contact.jpg" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Contact</h4>
            <p class="card-text">Get the contact details to contact the creator and owner of the  webpage. </p>
            <a href="contact.php" class="btn btn-primary">Contact me</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-12">
        <div class="card h-100">
          <img class="card-img-top h-50" src="images/about.png" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">About</h4>
            <p class="card-text">You can check out more details about the project  </p>
            <a href="#" class="btn btn-primary">Check more</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-12">
        <div class="card h-100">
          <img class="card-img-top" src="images/feedback.jpg" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Feedback</h4>
            <p class="card-text">You can give your valuable feedback.</p>
            <a href="#" class="btn btn-primary">Feedback</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<hr class="horz"><br>
<section><h1><u><b><em><center>Contact Details</center></em></u></b></h1>
<div>	<br>
<table id="t01" style="width:100%">
  <tr>

    <th>Project-Guide Details</th>
    <th>HOD Details</th>
    <th>Dean Details</th>
    <th>Student Details</th>
    
  </tr>
  <tr>

    <td>Prof. Sathyaraj R</td>
    <td>Dr. Santhi V</td>
    <td>Dr. Saravanan R</td>
    <td>Allena Venknata Sai Abhishek</td>
    
  </tr> 
  <tr>
	<td>sathyaraj@vit.ac.in</td>
	<td>hod.ss@vit.ac.in</td>
	<td>dean.scope@vit.ac.in</td>
	<td>venkata.saiabhishek2016@vitstudent.ac.in</td>
  
  </tr>

<tr>
  <td><img class="vitlogo" src="images/proctor.png" height="350" width="280"></img></td>
  <td><img class="vitlogo" src="images/hod.png" height="350" width="280"></img></td>
  <td><img class="vitlogo" src="images/dean.png" height="350" width="280"></img></td>
  <td><img class="vitlogo" src="images/myphoto.jpg" height="350" width="280"></img></td>
</tr> </table>
</div>
</section>
<br><br>
<hr>


<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Gallery</h2>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images2/cl3.jpg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images2/cl3.jpg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images2/cl3.jpg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images2/cl3.jpg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images2/cl3.jpg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images2/cl3.jpg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images2/cl3.jpg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images2/cl3.jpg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images2/cl3.jpg" class="img-fluid pb-4">
			</div>
			
		</div>
		
	</div>
</section>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Gallery</h2>
	</div>
</section>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>	
	</body>
	</html>