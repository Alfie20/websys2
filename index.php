<html>
	<head>
		<title>Hello World</title>
		<style>
			body
			{
				background: black;
			}
			.box
			{
				margin-top: 100px;
				width: 300px;
				height: 300px;
				background: white;
				
				border-radius: 10px;
				box-shadow: 10px 10px 19px lime;
				font-family: sans-serif;

			}
		.pindot
		{
			border-radius: 10px;
		}
		.pindot:hover
		{
			background: green;
			color: white;
		}
		</style>
	</head>
	<body>
	<center>
		<div class="box">
			<h1 style="margin-top: 60px;">
			<?php echo 
			// your content that appear in your browser
			"Hello, World!";?>

			<?php //  this is a comment ?>

			</h1>
				<a style="position:absolute;text-decoration: none; color: black;margin-top: 60px;margin-left: -45px;" href="welcome.php">
				<button class="pindot">click here</button></a>
	
		</div>
	</center>
	</body>
</html>