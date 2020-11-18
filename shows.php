<?php
require_once 'header.php';

echo <<<_SHOWS
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">


<style>
body{
	background-color: black;
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
.text {
  color: #f2f2f2;
  font-size: 15px;
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

 #content {
	background-color: #4E1003;

 }
table {
  margin-top: 75px;
  width:45%;
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
    margin-left: 40px;
    display: inline-table;

}
#t02 {
    margin-left: 40px;
    display: inline-table;
}
h3 {
    font-family: 'Special Elite', cursive;
    color: white;
}


</style>
</head>
<body>


<table id="t01">
  <tr><th colspan="3" class="tabletop">Top Ten Favorite Movies</th></tr>
  <tr>
    <th>Movie Rank</th>
    <th>Movie Name</th>
    <th>Edit</th> 
  </tr>
  <tr>
    <td>1.</td>
    <td>Princess Bride</td>
    <td><button>Edit</button></td>
  </tr>
  <tr>
    <td>2.</td>
    <td>John Wick</td>
    <td><button>Edit</button></td>
  </tr>
  <tr>
    <td>3.</td>
    <td>Monty Python and the Holy Grail</td>
    <td><button>Edit</button></td>
  </tr>
  <tr>
    <td>4.</td>
    <td>Shrek</td>
    <td><button>Edit</button></td>
  </tr>
  <tr>
    <td>5.</td>
    <td>The Big Lebowski</td>
    <td><button>Edit</button></td>
  </tr>
  <tr>
    <td>6.</td>
    <td>Spaceballs</td>
    <td><button>Edit</button></td>
  </tr>
  <tr>
    <td>7.</td>
    <td>Megamind</td>
    <td><button>Edit</button></td>
  </tr>
  <tr>
    <td>8.</td>
    <td>Ace Ventura when Nature Calls</td>
    <td><button>Edit</button></td>
  </tr>
  <tr>
    <td>9.</td>
    <td>Army of Darkness</td>
    <td><button>Edit</button></td>
  </tr>
  <tr>
    <td>10.</td>
    <td>Lord of the Rings Fellowship of the ring</td>
    <td><button>Edit</button></td>
  </tr>
</table>

<table id="t02">
    <tr><th colspan="3" class="tabletop">Top Ten Least Favorite Movies</th></tr>
    <tr>
      <th>Movie Rank</th>
      <th>Movie Name</th>
      <th>Edit</th> 
    </tr>
    <tr>
      <td>1.</td>
      <td>Princess Bride</td>
      <td><button>Edit</button></td>
    </tr>
    <tr>
      <td>2.</td>
      <td>John Wick</td>
      <td><button>Edit</button></td>
    </tr>
    <tr>
      <td>3.</td>
      <td>Monty Python and the Holy Grail</td>
      <td><button>Edit</button></td>
    </tr>
    <tr>
      <td>4.</td>
      <td>Shrek</td>
      <td><button>Edit</button></td>
    </tr>
    <tr>
      <td>5.</td>
      <td>The Big Lebowski</td>
      <td><button>Edit</button></td>
    </tr>
    <tr>
      <td>6.</td>
      <td>Spaceballs</td>
      <td><button>Edit</button></td>
    </tr>
    <tr>
      <td>7.</td>
      <td>Megamind</td>
      <td><button>Edit</button></td>
    </tr>
    <tr>
      <td>8.</td>
      <td>Ace Ventura when Nature Calls</td>
      <td><button>Edit</button></td>
    </tr>
    <tr>
      <td>9.</td>
      <td>Army of Darkness</td>
      <td><button>Edit</button></td>
    </tr>
    <tr>
      <td>10.</td>
      <td>Lord of the Rings Fellowship of the ring</td>
      <td><button>Edit</button></td>
    </tr>
  </table>

  <h3 style="text-align: center;"> Hail to the King Baby </h3>

<div class="slideshow-container">
<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="photosTV/grandtour.jpg" style="width:100%">
  <div class="text">The Grand Tour</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="photosTV/hillhouse.jpg" style="width:100%">
  <div class="text">The Haunting of Hill House</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="photosTV/theoffice.JPG" style="width:100%">
  <div class="text">(Obviously) The Office</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="photosTV/alwayssunny.jpg" style="width:100%">
  <div class="text">Always Sunny In Philadelphia</div>
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
</body>
</html> 
_SHOWS;

require_once 'footer.php';
?>
