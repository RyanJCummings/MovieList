<?php
require_once 'header.php';

echo <<<_MOVIES
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.gstatic.com">

<link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">

<style>

 body  {
  background-color: black;
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
    font-family: 'Yanone Kaffeesatz', sans-serif;
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

</body>
</html> 
_MOVIES;

require_once 'footer.php';
?>
