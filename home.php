<?php
require_once 'header.php';

echo <<<_Home
<title>Cine-Files</title>
<head>

<link href='https://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">
<style>
  #content {
	background-color: #4E1003;
  	height: 100%;
	/*background-position: center;*/
  	background-size: 100%;
	/*position: relative;*/	
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

.container{
    display:inline-block;
    width: 50rem;
    box-shadow: 0 0 1rem 0 rbga(0,0,0,.2);
    position: relative;
    box-shadow: inset 0 0 2000px rgba(255,255,255,.5);
    filter:blur(0px);
}
    #test{
        font-weight: bold;
        font-size: xx-large;

}



</style>
</head>


<body>
<h1>Toto, I've a feeling we're not in Kansas anymore <h1>

<iframe  width="956" height="538" src="https://www.youtube.com/embed/4HvE_bz9imA" frameborder="0" allow="accelerometer; autoplay=1; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


    <div class="container" style="position: relative">
        <div id="test">
            <h3 style="color:white; text-shadow: 10px 10px black;">What, Why, and How</h3>
            <p style="color:white; text-shadow: 7px 7px black;"> Our initial and main goal was to establish a place where movie and show lovers can catalog and curate lists of their favorite cinematic adventures. Within each
            page on the Cine-Files you will find your personalized list that curate to your movie and show viewing taste! With the ability to add a show or a movie to your list
            you can select to watch now or save it for later! We have also integrated a wonderful search feature that allows each user to look up their favorite shows and movies
            with ease!</p>
        </div>
    
    </div>

</body>



_Home;

require_once 'footer.php';
?>
