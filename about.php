<?php
require_once 'header.php';

echo <<<_ABOUT
<style>
  h1 {
	text-align: center;
	color: white;
	margin-top: 50px;	
}


 body {
	text-align: center;
	background-color: black;
}

 #content {
 	background-color: #4E1003;
        height: 100%;
        background-position: center;
        /*background-repeat: no-repeat;*/
        background-size: 100%;
        width: 100%;

  background-image: url("curtain02.jpg");

}
.vid {
	margin-top: 75px;
	display: block;

}
.pic {
	display: inline-block;
}
h2 {
	color: white;
	font-style: italic;
}

</style>
<body>
<h1><h1>

<iframe width="956" height="538" id="vid" src="https://www.youtube.com/embed/yTurrvfAKck" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>



<h2>The Crew</h2>
<img id="pic" src="PXL_20201015_225034326.jpg" alt="Group Photo" width="460" height="345">

	
</body>

_ABOUT;

require_once 'footer.php';
?>
