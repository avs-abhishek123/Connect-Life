<?php 
require 'config/connect.php';
session_start();
if (isset($_SESSION['user_id'])) {
    header("location:home.php");
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
  	 width: 750px;
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

hr.chat {
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

@keyframes ex {
  0%   {background-color:white; left:0px; top:0px;}
  25%  {background-color:#F5F5F5; left:200px; top:0px;}
  50%  {background-color:white; left:350px; top:0px;}
  75%  {background-color:#F5F5F5; left:480px; top:0px;}
  100% {background-color:white; left:640px; top:0px;}
}

/* The element to apply the animation to */
#chatlog {
  width: 700px;
  height: 400px; 
  position: relative;
  background-color: red;
  animation-name: ex;
  animation-direction:alternate-reverse;
  animation-duration: 4s;
  animation-iteration-count: infinite;
}

.chatinput1 {
            width: 1000px;
            height: 290px;
			align:center;
            background: rgb(0, 0, 0);
            -webkit-transition: width 2s; /* Safari */
            transition: width 1s;
			transition-timing-function: linear;
        }
		.chatinput1:hover{
		width: 100%;
		}

        .chatinput {
            width: 100%;
            height: 120px;
            background: black;/*rgb(238, 255, 0);*/
            -webkit-transition: width 2s; /* Safari */
            transition: width 2s;
        }
        #div1 {
            transition-timing-function: linear;
        }
        div:hover {
            width: 100%;
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
<script>
        var know={
                "hi":"Hi, welcome to chatbot",
				"hey":"Hi, welcome to chatbot",
				"what is your name?":"ConnectLife",
				"who has created you?":"Abhishek",
				"what is your creator's name?":"Abhishek",
				"what's your name?":"ConnectLife",
				"who is Abhishek?":" ConnectLife Creator",
				"hello":"Hi, Welcome to chatbot",
               			"how are you?":"good",
                		"ok":":) Have a nice day",
				"ohk":":) Have a nice day",
				"okay":":) Have a nice day",
				"k":":) Have a nice day",
				"Thank you":"welcome",
				"thank you":"welcome",
				"thanks":"welcome",
				"Thank u":"welcome",
				"thank u":"welcome",
				"tysm":"welcome",
				"Thanks":"welcome",
				"Tysm":"wlcm",
				"hello":"hi",
				"creator":"Abhishek",
				"bye":"bye, Have a nice day :)",
				"goodbye":"bye, Have a nice day :)",
				"connectlife":"This is a simple social network website designed with core php and of course with the aid of the html, css and core javascript.",
				"connectlife?":"This is a simple social network website designed with core php and of course with the aid of the html, css and core javascript.",
				"what is connectlife":"This is a simple social network website designed with core php and of course with the aid of the html, css and core javascript.",
				"what's connectlife":"This is a simple social network website designed with core php and of course with the aid of the html, css and core javascript.",
				"Connectlife":"This is a simple social network website designed with core php and of course with the aid of the html, css and core javascript.",
				"ConnectLife":"This is a simple social network website designed with core php and of course with the aid of the html, css and core javascript.",
				"ConnectLife?":"This is a simple social network website designed with core php and of course with the aid of the html, css and core javascript.",
				"Connectlife?":"This is a simple social network website designed with core php and of course with the aid of the html, css and core javascript.",
				"connectLife":"This is a simple social network website designed with core php and of course with the aid of the html, css and core javascript.",
				"connectLife?":"This is a simple social network website designed with core php and of course with the aid of the html, css and core javascript.",
				"admin":"abhishek",
				"Admin":"abhishek",
				"ADMIN":"abhishek",
				"HI":"Hi, welcome to chatbot",
				"HELLO":"Hi, welcome to chatbot",
				"HEY":"Hi, welcome to chatbot",
				"Admin?":"abhishek",
				"admin?":"abhishek",
				"ADMIN":"abhishek",
				"great":"thanks",
				"wow":"thanks",
                		"how are you?":"good",
                		"ok":":)"
            };
            function talk()
            {
                var user=document.getElementById("userbox").value;
                document.getElementById("userbox").value="";      /*  if u dnt write this line then the
                                                                box wont get empty after a key is pressed */
                document.getElementById("chatlog").innerHTML +=user+"<br>";
                if(user in know){
                    document.getElementById("chatlog").innerHTML +=know[user]+"<br>";
                }else{
                    document.getElementById("chatlog").innerHTML +="I dont understand...<br>";

                }
            }    
        </script>
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
  <li><a class="active" href="chatbot.php">Chatbot</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li class="right"><a href="about.php">About</a></li>
</ul>-->
<center><div id="capstone-effect"><b><em><h1 style=" color:black; font-weight: 700; font-size: 220%;">Capstone Project of 16BCE0366</h1><b><em></div></center>
    <h1 style="font-weight: 900;"><u><em>Welcome to ConnectLife's Chatbot</em></u></h1>
	<hr class="horz"><div id="transition"><img class="vitlogo" src="images/vitlogo.png"  height="150" width="400"></img></div>

<br>
<hr class="horz">
<br><hr class="chat">
<div class="chatinput1" >
<h2 style=text-align:30% width=100%><font style="font-family:Comic Sans MS;color:red;">==================================================================================;</font></h2>
<h1 style=text-align:30% width=1400px><font style="font-size:350%; font-family:Comic Sans MS;color:red;"><center><u>C </font><font style="font-size:350%; font-family:Comic Sans;color:yellow;">H A </font><font style="font-size:350%; font-family:Comic Sans MS;color:red;">T</u></font></center></h1>
<h2 style=text-align:30% width=100%><font style="font-family:Comic Sans MS;color:red;">==================================================================================;</font></h2>
</div>
<br>
<h1>Enter the text in the input box</h1>
<div class="chatinput"><br><br>
        <input style="width:100%;"id="userbox" type="text" placeholder="   Enter the queries to talk to our ChatBot" onkeydown="if(event.keyCode==13) {talk()}" ><br><br>
        </div>              <br><br>                                         <!--13 is key code of enter -->
<p id="chatlog"><h1 style="color:black; font-weight: 900;">
             </p>
    <script src="resources/js/main.js"></script>
<hr class="chat">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 

</body>
</html>

