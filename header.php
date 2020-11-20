<?php

if(!isset($_SESSION)) 
{ 
session_start(); 
}


$clubstr = "";
$userstr = '';

echo <<<_INIT
<!DOCTYPE html> 
<html>
<title>Cine-Files</title>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'> 
        <script src='javascript.js'></script>
        <link href="https://fonts.googleapis.com/css?family=Arsenal|Lora|Muli|Source+Sans+Pro|Playfair+Display&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel='stylesheet' href='css/styles.css'>
	<link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">
	<title>$clubstr: $userstr</title>
	<style>
		body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #0A0A0A;
  margin-top: 170px;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-family: 'Yanone Kaffeesatz', sans-serif;  

}

.navbar a:hover, .dropdown:hover .dropbtn {

  color: black;
  background-color: darkred;
  box-shadow: 0px 0px 2px 2px black inset;
}


.about {
	background-color: darkgray;
	float: right;
	
}
	</style>
	</head>


_INIT;



require_once 'functions.php';
if (isset($_SESSION['user'])) {
    $user     = $_SESSION['user'];
    $loggedin = TRUE;
    $userstr  = "Logged in as: $user";
}
else $loggedin = FALSE;



echo <<<_HEADER_OPEN
    
    <body>
        <div id="wrapper">
        <header>
            <div id='logo'>$clubstr</div>
_HEADER_OPEN;


if($loggedin){


echo <<<_LOGGEDIN


<div class="navbar">
    <a href="home.php">Home</a>
    <a href='movies.php'>Top Movies</a>
    <a href='shows.php'>Top Shows</a>
    <a href='watch.php'>Watch List</a>
    <a href='honorable.php'>Honorable Mentions</a>
    <a href='logout.php'>Logout</a>  


  <div style="float:right">
    <a class="about" href='about.php'style="box-shadow:1px 1px 1px 1px black inset">About</a> 
  </div>
</div>


_LOGGEDIN;


}
else{
echo <<<_GUEST
            <div class="navbar">
                <a href='index.php'>Home</a>
                <a href='signup.php'>Sign Up</a>
                <a href='login.php'>Log In</a>


  <div style="float:right">
    <a class="about" href='about.php'style="box-shadow:1px 1px 1px 1px black inset">About</a>
  </div>
</div>

_GUEST;
 }



echo <<<_HEADER_CLOSE

        </header>
        <div class='username'>$userstr</div>
        <div id="content">
_HEADER_CLOSE;
