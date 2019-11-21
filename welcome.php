<html>
	<head>
		<title>Hello World</title>
		<style type="text/css">
		body{
			font-family: sans-serif;
			margin: 0;
			padding: 0;
					}
		button:hover {
			background-color: green;
			transition: 0.5s;
			cursor: pointer;
			box-shadow: 1px 1px 10px black;
			border-radius: 5px;
			border: none;

		}
		.sidenav {
			height: 100%;
			width: 0;
			position: absolute;
			z-index: 1;
			top:0;
			left: 0;
			background-color: green;
			transition: 0.5s;
			padding-top:60px;
		}
		.sidenav a{
			padding: 8px 8px 8px 32px;
			text-decoration: none;
			font-size: 25px;
			color: white;
			display: block;
			transition: 0.5px;
		}
		.sidenav a:hover .offcanvas a:focus{
			color:green;
		}
		.closebtn{
			position: absolute;
			top:0;
			right: 25px;
			font-size: 36px !important;
			margin-left: 50px;
			color: green;
		}
		@media screen and (max-height: 450px;)
		{
			.sidenav {padding-top: 15px;}
			.sidenav a{font-size: 18px;}
		}
		</style>


	</head>
<body >

<center>
<header style="color: white; background-color: black;">
<h1>
	<?php echo "My name is Alfie Villarin";?>
</h1>
</header>
	<a style="text-decoration: none; color: black;" href="index.php"> <button>home</button></a>





<div id="mySidenav" class="sidenav">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">X</a>
	<a href="condition.php">Condition</a></br>
	<a href="loop.php">Loop</a></br>
	<a href="post.php">Post</a></br>
	<a href="string.php">String</a></br>
	<a href="wspace.php">Wspace</a></br>
	<a href="getmethod.php">Getmethod</a></br>
	<a href="string.php">String</a></br>
	<a href="get.php">Get</a>

</div>
<div>
<span style="font-size: 30px; cursor: pointer; margin-top: 300px;position: absolute;margin-left: -150px;" onclick="openNav()">open here for my works</span>
</div>
<script>
function openNav(){
	document.getElementById("mySidenav").style.width="250px";
}	
function closeNav(){
	document.getElementById("mySidenav").style.width="0";
}
</script>
</center>
	</body>
</html>
