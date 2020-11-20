
<?php
session_start();
require_once 'header.php';




echo <<<_END


<title>Cine-Files</title>
<head>
<link href='https://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }
        html {
            width: 100%;
            height: 100%;
        }
        .wrapper2 {
            height: 100vh;
            width: 150vh;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }
        .backdrop {
            position: absolute;
            z-index: 1;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }
        .stage_highlight {
            position: absolute;
            z-index: 1;
            top: 0;
            left: 25vh;
            width: 100vh;
            height: 100%;
            overflow: hidden;
            background-image: radial-gradient(ellipse closest-side at 50% 82%, rgb(245,246,247), rgba(84,120,173,0) 100%);
            animation: move_highlight 5s linear infinite;
        }
        .spotlight_swivel {
            animation: rotate_spotlight 5s linear infinite;
        }
        .lamp {
            position: absolute;
            z-index: 1;
            width: 40vh;
            height: 400vh;
            background-image: radial-gradient(ellipse, rgba(82,116,168,0.5), rgba(82,116,168,0.2) 25%, rgba(82,116,168,0) 50%);
            top:-220vh;
            left:55vh;
            transform: perspective(23vh) rotateX(30deg);
        }
        .spotlight {
            opacity: 0.5;
            transform: scale(1.5,3);
            position: absolute;
            z-index: 1;
            top: -20vh;
            left: calc(50% - 75vh);
        }
        .spotlight::after {
            content: '';
            position: absolute;
            z-index: 1;
            top: -50vh;
            background-image: radial-gradient(ellipse closest-corner at 75% 75%, rgba(55,89,138,0.2), rgba(55,89,138,0));
            border-radius: 100%;
            width: 100vh;
            height: 100vh;
            clip: rect(50vh, 100vh, 100vh, 50vh);
            transform: rotate(45deg);
        }
        @keyframes rotate_spotlight {
            0% {
                transform: rotate(0deg) scaleY(1) translateY(0);
            }
            25% {
                transform: rotate(-15deg) scaleY(1.1) translateY(-3vh);
            }
            50% {
                transform: rotate(0deg) scaleY(1) translateY(0);
            }
            75% {
                transform: rotate(15deg) scaleY(1.1) translateY(-3vh);
            }
        }
        @keyframes move_highlight {
            0% {
                transform: translateX(0);
            }
            25% {
                transform: translateX(25vh);
            }
            50% {
                transform: translateX(0);
            }
            75% {
                transform: translateX(-25vh);
            }
        }
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
    <div class="wrapper2">
        <div class="backdrop"></div>
        <div class="stage_floor"></div>
        <div class="stage_highlight"></div>
        <div class="spotlight_swivel">
            <div class="lamp"></div>
            <div class="spotlight"></div>
        </div>
<iframe style="position:relative; z-index:1000;" width="956" height="538" src="https://www.youtube.com/embed/4HvE_bz9imA" frameborder="0" allow="accelerometer; autoplay=1; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
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

_END;

require_once 'footer.php';
?>

