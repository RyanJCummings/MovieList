<?php
require_once 'header.php';

echo <<<_MOVIES
<!DOCTYPE html>
<html>
<head>

<link rel="preconnect" href="https://fonts.gstatic.com">

<link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">

<style>

 body  {
  background-color: black;
  background-image: url("curtain02.jpg");
}

#content {
  background-color: #4E1003;
  height: 100%;
  background-position: center;
  background-size: 100%;
  width: 100%;       
  background-image: url("curtain02.jpg");
}
table {
  margin-top: 75px;
  width:35%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  border-radius: 2px;
  font-family: 'Yanone Kaffeesatz', sans-serif;
}
th, td {
  padding: 15px;
  text-align: left;
}
#t01 tr:nth-child(even) {
  background-color: #eee;
}
#t01 tr:nth-child(odd) {
 background-color: #fff;
}
#t02 tr:nth-child(even) {
  background-color: #eee;
}
#t02 tr:nth-child(odd) {
 background-color: #fff;
}
th {
  background-color: darkgray;
  color: white;
}
.tabletop {
  background-color: black;
  text-align: center;
  font-size: larger;
}
#t01 {
  margin-left: 4%;
  display: inline-table;
}
#t02 {
  margin-left: 1%;
  display: inline-table;
}
h3 {
  font-family: 'Yanone Kaffeesatz', sans-serif;
  color: white;
}

#signup{
  padding: 15px;
  padding-top: 15px;
  padding-right: 15px;
  padding-bottom: 15px;
  padding-left: 15px;
  box-shadow: 0 1px 1px 0 rgba(30,11,39,.07), 0 2px 4px 0 rgba(27,9,36,.11);
}
form{
  display: block;

}

* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}
/* Slideshow container */
.slideshow-container {
  max-width: 800px;
  position: relative;
  margin: auto;
  top: 75px;
}
/*change background color*/
#content{
    background-color: gray;
 }
/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}
/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}
/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}
/* Caption text */
.text1 {
  color: white;
  font-size: 20px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}
/* Caption text */
.text {
  color: black;
  font-size: 20px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}
/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}
/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
.active, .dot:hover {
  background-color: #717171;
}
/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}
@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}


#omdb {
    vertical-align: top;
    margin-top:75px;
    margin-left: 1%;
    display:inline-block;
    border-width: 1px;
    border-color: black;
    background: rgba(0, 0, 0, 0.5);
    width: 300px;
    height: 675px;
}

#answer {
    font-family: 'Yanone Kaffeesatz', sans-serif;
    text-align: center;
    font-weight: bold;
    font-size: 16px;
    color: white;
    text-shadow: 5px 5px black;
}

#qurybox {
    margin-left: 20%;
    margin-bottom: 5px;
    margin-top: 5px; 
}

#titlequery {
   font-family: 'Yanone Kaffeesatz', sans-serif;
   text-align: center;
   font-weight: bold;
   font-size: 20px;
   color: white;
   text-shadow: 5px 5px black;
}


.button {

  width: 100%;
  height: 100%
  border: none;
  background-color: gray;
  cursor: pointer;
  text-align: center;
  border-radius: 4px;
  box-shadow: 0 9px #999;
  font-size: 1.5em;
  color: white;
  font-family: 'Yanone Kaffeesatz', sans-serif;

}

.button:active {
 background-color: black;
 box-shadow: 0 5px #666;
 transform: translateY(4px);
}


.button:hover:hover {
  background-color: black;
  color: white;
}



</style>
</head>
<body>

<table id="t01">
  <tr><th colspan="2" class="tabletop">Top Ten Favorite Movies</th></tr>
  <tr>
    <th>Movie Name</th>
    <th>Remove</th> 
  </tr>
  <tr>
    <td>Princess Bride</td>
    <td><button>Remove</button></td>
  </tr>
  <tr>
    <td>John Wick</td>
    <td><button>Remove</button></td>
  </tr>
  <tr>
    <td>Monty Python and the Holy Grail</td>
    <td><button>Remove</button></td>
  </tr>
  <tr>
    <td>Shrek</td>
    <td><button>Remove</button></td>
  </tr>
  <tr>
    <td>The Big Lebowski</td>
    <td><button>Remove</button></td>
  </tr>
  <tr>
    <td>Spaceballs</td>
    <td><button>Remove</button></td>
  </tr>
  <tr>
    <td>Megamind</td>
    <td><button>Remove</button></td>
  </tr>
  <tr>
    <td>Ace Ventura when Nature Calls</td>
    <td><button>Remove</button></td>
  </tr>
  <tr>
    <td>Army of Darkness</td>
    <td><button>Remove</button></td>
  </tr>
  <tr>
    <td>Lord of the Rings Fellowship of the ring</td>
    <td><button>Remove</button></td>
  </tr>
    <tr>
        <td colspan="2"><button class="button">Add a Cinematic to the list here!</button></td>
    </tr>

</table>


<div id="omdb">

<h1 id="titlequery">Please Enter the Title of your movie for Details</h1>
<input onkeyup="getanswer(document.getElementById('qurybox').value)" id="qurybox">
<div id="answer"></div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>
<script> var data;
function getanswer(q){
$.get("https://www.omdbapi.com/?s="+q+"&apikey=ba1f4581", function(rawdata){
var rawstring =JSON.stringify(rawdata);
data =JSON.parse(rawstring);
var year = data.Search[0].Year;
var imdburl="https://www.imdb.com/title/"+data.Search[0].imdbID+"/";

var posterurl =data.Search[0].Poster;
document.getElementById('answer').innerHTML= "<img src= '"+posterurl+"'><h2>Year Released:"+year+"</h2><h3> IMDB page: <a href='"+imdburl+"'target='_blank'>"+imdburl+"</a></h3>"; }); }</script>
</div>


<table id="t02">
    <tr><th colspan="2" class="tabletop">Top Ten Least Favorite Movies</th></tr>
    <tr>
      <th>Movie Name</th>
      <th>Remove</th> 
    </tr>
    <tr>
      <td>The Room</td>
      <td><button>Remove</button></td>
    </tr>
    <tr>
      <td>Bowling for Columbine</td>
      <td><button>Remove</button></td>
    </tr>
    <tr>
      <td>Cats</td>
      <td><button>Remove</button></td>
    </tr>
    <tr>
      <td>Frozen 2</td>
      <td><button>Remove</button></td>
    </tr>
    <tr>
      <td>Star wars Revenge of the Sith</td>
      <td><button>Remove</button></td>
    </tr>
    <tr>
      <td>Eragon</td>
      <td><button>Remove</button></td>
    </tr>
    <tr>
      <td>Star Whores</td>
      <td><button>Remove</button></td>
    </tr>
    <tr>
      <td>Star Whores</td>
      <td><button>Remove</button></td>
    </tr>
    <tr>
      <td>Mac and Me</td>
      <td><button>Remove</button></td>
    </tr>
    <tr>
      <td>Soul Plane</td>
      <td><button>Remove</button></td>
    </tr>

    <tr>
        <td colspan="2"><button class="button">Add a Cinematic to the list here!</button></td>
    </tr>

  </table>

<div class="slideshow-container">
<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="photosMovie/godfather.jpg" style="width:100%">
  <div class="text1">The Godfather</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="photosMovie/lebowski.jpg" style="width:100%">
  <div class="text1">The Big Lebowski</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="photosMovie/fearandloathing.jpg" style="width:100%">
  <div class="text">Fear and Loathing in Las Vegas</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="photosMovie/starwars.jpg" style="width:100%">
  <div class="text1">Star Wars</div>
</div>
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>   
</div>


<script>
var slideIndex = 1;
showSlides(slideIndex);
function plusSlides(n) {
  showSlides(slideIndex += n);
}
function currentSlide(n) {
  showSlides(slideIndex = n);
}
function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
<h3 style="text-align: center;"> Hail to the King Baby </h3>

</body>
</html> 
_MOVIES;

require_once 'footer.php';
?>
