<?php
require_once 'header.php';

echo <<<_Home

<head>
<title>Cine-Files</title>
<link href='https://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">
<style>
  #content {
	background-color: #4E1003;
  	height: 100%;
  	background-position: center;
  	background-repeat: no-repeat;
  	background-size: 100%;
  	position: relative;	
	background-image: url("curtain02.jpg");		
 }
	

  h1 {
	text-align: center;
	margin-top: 45px;
	color: white;
	font-family: 'Yanone Kaffeesatz', sans-serif;	
	
}
  h2 {
	text-align: center;
	font-size: 1.5em;
	font-family: 'Yanone Kaffeesatz', sans-serif;
}
body{
	background-color: black;
}

</style>
</head>


<body>
<h1>Toto, I've a feeling we're not in Kansas anymore <h1>

<iframe  width="956" height="538" src="https://www.youtube.com/embed/4HvE_bz9imA" frameborder="0" allow="accelerometer; autoplay=1; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


<div id="song1" style="display:block; text-align: center">

</body>



_Home;

require_once 'footer.php';
?>
