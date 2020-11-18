<?php
require_once 'header.php';

echo <<<_Home

<head>
<title>Cine-Files</title>
<link href='https://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet'>
<style>
  #content {
	background-color: gray;
	background-image: url("angels.jpg");
  	background-color: #cccccc;
  	height: 100%;
  	background-position: center;
  	background-repeat: no-repeat;
  	background-size: 100%;
  	position: relative;	
		
 }
	

  h1 {
	text-align: center;
	margin-top: 35px;
	padding-top: 150 px;
	
}
  h2 {
	text-align: center;
	font-size: 1.5em;
	font-family: 'Audiowide', sans-serif;
}

  #song1 {
  	 margin: auto;
	 margin-top: 20px;
         border-radius: 10px;
         border: 5px;
	 border-style:ridge;
	 box-shadow: 3px 5px black;
         width:fit-content;
         background-image: url("https://onbeing.org/wp-content/uploads/2019/01/1260x690_KillBill2_V2_FINAL-768x421.png");

	}

  #welcome {
	box-shadow: 3px 5px black;
	width: fit-content;
	margin: auto;
	padding-top: 20px;
}
</style>
</head>


<body>
<h1></h1>

<div id="welcome" style="display:block; text-align: center">
   <video title="Welcome to Cine-Files!" controls  class='video-container' width="500" height="280" style="display:block; text-align: center" >
    <source src="WelcomeToCineFiles.mp4" type="video/mp4">
   </video>
</div>

<div id="song1" style="display:block; text-align: center">
<h2>"Battle Without Honor Or Humanity"</h2>
   <audio title="Battle Without Honor Or Humanity" controls  class='audio-container' style="display:block;margin:auto; text-align: center" >
    <source src="Battle Without Honor Or Humanity.mp3" type="audio/mpeg">
   </audio>
</div>
</body>



_Home;

require_once 'footer.php';
?>
