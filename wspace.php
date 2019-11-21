<!DOCTYPE html>
<html>
<head>
	<title>White Space</title>
</head>
<body>
 <?php 
  	echo "<h1><p>Simple Addition</p></h1>";
  ?>
 <?php 
$four = 2+2;//multiple lines
echo "<h1>2+2=$four</h1>";//single spaces
echo "</br><tab>2 + <tab>2 = <tab>$four";//spaces
  ?>
 <?php
$four = 2*2;//multiple lines
echo "<h1>2*2=$four</h1>";//single spaces
echo "</br><tab>2 * <tab>2 = <tab>$four";//spaces
  ?>
 <?php
$four = 2-2;//multiple lines
echo "<h1>2-2=$four</h1>";//single spaces
echo "</br><tab>2 - <tab>2 = <tab>$four";//spaces
  ?>
 <?php
$four = 2/2;//multiple lines
echo "<h1>2/2=$four</h1>";//single spaces
echo "</br><tab>2 / <tab>2 = <tab>$four";//spaces
  ?>

 
</body>
</html>