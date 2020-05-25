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
 	 height: 50px;
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
  height:4px;
  border-width:0;
  color: black;
  background-color: black;
}

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

.about{
color: 	yellow;
text-align:left;
font-weight: 1000;
}

ul.features {
  background: #3399ff;
  padding: 20px;
   list-style-type: square;
}

ul.features li {
  background: #cce5ff;
  margin: 5px;
}


	.container{
            margin: 40px auto;
            width: 400px;
border-style: solid;
border-width: 20px;
border-color: #3b5998;
  border-radius: 5px;
padding: 10px;
        }

dl dt{
   color:#ff0000;
   font-size: 150%;
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
  <li><a href="contact.php">Contact</a></li>
  <li class="right" class="active"><a href="about.php">About</a></li>
</ul>-->

<center><div id="capstone-effect"><b><em><h1 style=" color:black; font-weight: 700; font-size: 220%;">Capstone Project of 16BCE0366</h1><b><em></div></center>
    <h1 style="font-weight: 900;"><u><em>Welcome to ConnectLife</em></u></h1>
	<hr class="horz"><div id="transition"><img class="vitlogo" src="images/vitlogo.png"  height="150" width="400"></img></div><hr class="horz">
<br>  

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center" style=" color:black; font-family: 'Josefin Sans', sans-serif; font-weight: 700; font-size: 220%;">About The Page</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
      <img src="images2/cl2.jpg" class="img-fluid aboutimg">
    </div>
    <div class="col-lg-6 col-md-6 col-12">
      <h2 class="display-4" style=" color:black; font-family: 'Josefin Sans', sans-serif; font-weight: 700; font-size: 220%;">ConnectLife : Socialmedia Website</h2>
      <p class="py-5">
        A socialmedia webpage for connecting people with simple backend connections.
      </p>
      <a href="index.php" class="btn btn-success">Check homepage</a>
    </div>
  </div>
</div>
</section>

<h1 class="about"> <u>ABOUT  THE  PROJECT</u></h1>
    <script src="resources/js/main.js"></script>
<hr>
<br>


<h1 style="color:purple; font-weight: 900;">This is a simple social network website designed with core php and of course with the aid of the html, css and core javascript. It supports the following functionalities:</h1>
<ul class="features">
<li><dl>
  <dt><u>User registeration:</u></dt>
  <dd>- User can register through pressing up on Sign up button below the floating VIT logo</dd>
</dl></li>

<li><dl>
  <dt><u>Posting on timeline:</u></dt>
  <dd>- User can create post with a possibility of stamping a picture along with it through pressing on Post button after logging in.</dd>
</dl></li>
<li><dl>
<dt><u>Friend Request:</u></dt>
<dd>Sending and recieving friend requests as well as accepting or ignoring them.</dd>
</dl></li>
<li><dl>
<dt><u>Checking out Friend's profile:</u></dt>
<dd>User can view the profiles of friends and thier relation with them.</dd>
</dl></li>
<li><dl>
<dt><u>Changing profile picture:</u></dt>
<dd>User can change thier profile picture by going into thier profile section.</dd>
</dl></li>
<li><dl>
<dt><u>Posts in Chronological order:</u></dt>
<dd>User can change Posts are displayed in chronological order from latest to oldest.</dd>
</dl></li>
<li><dl>
<dt><u>Search Facility based on:</u></dt>
<dd>Email</dd>
<dd>Name</dd>
<dd>Hometowns</dd>
<dd>posts</dd>
</dl></li>
<li><dl>
<dt><u>Gender based profile photo:</u></dt>
<dd>Initially created accounts have a default profile picture based on their gender.</dd>
</dl></li>
<li><dl>
<dt><u>Privacy of user is respected:</u></dt>
<dd>It doesn't show private posts except if the poster is on your friend list.
</dd>
</dl></li>
</ul>
Notes:
Home shows all public posts.Home also shows your own posts.Different users may suffer layout inconsistency or rather not
 the required smooth interface if the specified font isn't installed on the user's device (to be solved).
<br>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
</body>
</html>

