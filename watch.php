<?php
require_once 'header.php';

echo <<<_HONORABLE
<style>
  h1 {
	text-align: center;
	margin-top: 50px;
	padding-top: 150 px;
	color: white;
	
}
#content{
	background-color: #4E1003;
}
body {
	background-color: black;
}
ul{
padding:150px;
text-align:left;
list-style-position: inside;
}
</style>
<h1>Honorable mentions</h1>
<body>
<div id=jg>
<ul>
	<li>Wild Hogs</li>
	<li>The Boys</la>
	<li>Easy Rider</li>
	<li>Hot Rod</li>
	<li>Cool Runnings</li>
	<li>Avengers: Infinity Wars</li>
	<li>Fight Club</li>
</ul>
</div>
</body>
_HONORABLE;

require_once 'footer.php';
?>
