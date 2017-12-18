<!doctype html>
<html>
  <head>
	<title>PHP Game</title>
	<meta charset="utf-8" />
	<link href="css/bohater.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
  </head>
  <body>

	<?php
	$item[0][1] ="img/armor.png";
	$item[0][2] ="img/armor2.png";
$item[0][3] ="img/bron1.jpg";
$item[0][4] ="img/boots.png";
$item[0][5] ="img/gloves.png";
$item[0][6] ="img/helmet.png";
$item[0][7] ="img/pants.png";
$item[0][8] ="img/pants2.png";
$item[1][1] = 500;
$item[1][2] = 400;
$item[1][3] = 300;
$item[1][4] = 1800;
$item[1][5] = 598;
$item[1][6] = 485;
$item[1][7] = 150;
$item[1][8] = 299;

?>
	
	<div id="main"> 
<img src="img/Garosh.png"  id="icon"/>
		Name : Garrosh Piekłorycz
	
	<p>Class:Orc
	<p>Level:85
	<p>Str:120
	<p>Int:10
	<p>Vit:90
	<p>Dex:40
	<p>Gold:2000
	
	
<br style="clear:both;"/>

	<?php
	    for ($i=0; $i<4; $i++) {
			$nr=rand(1,8);
			$nazwa = $item[0][$nr];
			echo "<img class=\"bron\" src=\"$nazwa\" title=\"Przedmiot wart ".$item[1][$nr]." orenów\" />";
		}
	?>
<br style="clear:both;"/>
</div>
	
	
  
  </body>
</html>


