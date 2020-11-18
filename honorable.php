<?php
require_once 'header.php';

echo <<<_HONORABLE
<style>
  h1 {
	text-align: center;
	margin-top: 50px;
	padding-top: 150 px;
	
}
#content{
	background-color: grey;
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
	<li>Kill Bill</li>
	<li>Ace Ventura</la>
	<li>Mega Minds</li>
	<li>Princess Bride</li>
	<li>Space Balls</li>
	<li>The Matrix</li>
	<li>Dude Where's My Car</li>
</ul>
</div>
</body>
_HONORABLE;

require_once 'footer.php';
?>
