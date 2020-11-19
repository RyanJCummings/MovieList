<?php
require_once 'header.php';

echo <<<_HONORABLE


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">
	
<style>

#content{
	background-color: #4E1003;
        height: 100%;
        background-position: center;
        /*background-repeat: no-repeat;*/
        background-size: 100%;
        width: 100%;

  background-image: url("curtain02.jpg");

}
body {
	background-color: black;
}
table {
  margin-top: 75px;
  display: inline-table;
  width:70%;
  margin-left: 15%;
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
#t03 tr:nth-child(even) {
  background-color: #eee;
}
#t03 tr:nth-child(odd) {
 background-color: #fff;
}
th {
  background-color: darkgray;
  color: white;
}
.tabletop {
    background-color: black;
    text-align: center;
    font-size:larger;
    font-stretch:wider;
}
tr {
    font-size: larger;
}



</style>

<body>

  <table id="t03">
    <tr><th colspan="2" class="tabletop">Honorable Mentions</th></tr>
    <tr>
      <th>Movie Name</th>
      <th>Edit</th> 
    </tr>
    <tr>
      <td>Princess Bride</td>
      <td><button>Edit</button></td>
    </tr>
    <tr>
      <td>John Wick</td>
      <td><button>Edit</button></td>
    </tr>
    <tr>
      <td>Monty Python and the Holy Grail</td>
      <td><button>Edit</button></td>
    </tr>
    <tr>
      <td>Shrek</td>
      <td><button>Edit</button></td>
    </tr>
    <tr>
      <td>The Big Lebowski</td>
      <td><button>Edit</button></td>
    </tr>
    <tr>
      <td>Spaceballs</td>
      <td><button>Edit</button></td>
    </tr>
    <tr>
      <td>Megamind</td>
      <td><button>Edit</button></td>
    </tr>
    <tr>
      <td>Ace Ventura when Nature Calls</td>
      <td><button>Edit</button></td>
    </tr>
    <tr>
      <td>Army of Darkness</td>
      <td><button>Edit</button></td>
    </tr>
    <tr>
      <td>Lord of the Rings Fellowship of the ring</td>
      <td><button>Edit</button></td>
    </tr>
  </table>




</body>
_HONORABLE;

require_once 'footer.php';
?>
