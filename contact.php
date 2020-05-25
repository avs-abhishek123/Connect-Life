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
    <title>ConnectLife</title>
    <link rel="stylesheet" type="text/css" href="resources/css1/main.css">
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
@keyframes example  {width: 300px;  height: 25px;transform: rotate(360deg)}*/

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

/*th, td {
  border: 10px solid black;
  padding: 15px;
  text-align: center;
}*/
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

	.container{
            margin: 40px auto;
            width: 400px;
        }
        .content {
            padding: 30px;
            background-color: white;
            box-shadow: 0 0 5px #4267b2;
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


<!--<ul class="topnav">
  <li><a href="index.php">Home</a></li>
  <li><a href="chatbot.php">Chatbot</a></li>
  <li><a class="active" href="contact.php">Contact</a></li>
  <li class="right"><a href="about.php">About</a></li>
</ul>-->
<center><div id="capstone-effect"><b><em><h1 style=" color:black; font-weight: 700; font-size: 220%;">Capstone Project of 16BCE0366</h1><b><em></div></center>
    <h1 style="font-weight: 900;"><u><em>Welcome to ConnectLife</em></u></h1>
	<hr class="horz"><div id="transition"><img class="vitlogo" src="images/vitlogo.png"  height="150" width="400"></img></div><br><hr class="horz">
        <script src="resources/js/main.js"></script>


<h1 style="color:black; font-weight: 900;"><u>Student Details</u></h1>
<br>

<div>	
<table id="t01" style="width:100%" padding:5px>
  <tr>
    <th><b>Student Detail Attribute</b></th>
    <th><b>Student Detail Value</b></th>
    
  </tr>
  <tr>

    <td><b>PHOTO: </b></td>
    <td><img src="images/myphoto.jpg" style="border-radius: 8px;padding: 10px"></img></td>
    
  </tr> 
  <tr>

    <td><b>NAME: </b></td>
    <td>Allena Venknata Sai Abhishek</td>
    
  </tr> 
  <tr>
	<td><b>EMAIL ID: </b></td>
	<td>venkata.saiabhishek2016@vitstudent.ac.in</td>
  
  </tr>
  <tr>
	<td><b>MOBILE No.: </b></td>
	<td>+91-8940624448</td>
  
  </tr>
  <tr>
	<td><b>ADDRESS: </b></td>
	<td>D.no.55-43-78,plot no.52 Road no 3,Doctor's Colony, Seethamadhara, Visakhapatanam, AP-530013,INDIA</td>
  
  </tr>
  <tr>
	<td><b>GITHUB PROFILE: </b></td>
	<td>https://github.com/avs-abhishek123</td>
  
  </tr>
  <tr>
	<td><b>LINKEDIN PROFILE: </b></td>
	<td>https://www.linkedin.com/in/abhishek-a-v-s-381937156/</td>
  
  </tr>
  <tr>
	<td><b>TWITTER PROFILE: </b></td>
	<td>https://twitter.com/AllenaVenkata</td>
  
  </tr>
  <tr>
	<td><b>QUORA PROFILE: </b></td>
	<td>https://www.quora.com/profile/Abhishek-A-V-S</td>
  
  </tr>
  <tr>
	<td><b>MY WEBSITE: </b></td>
	<td>https://www.avsabhishek.com/</td>
  
  </tr>
 </table>
</div>
<br>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
</body>
</html>

