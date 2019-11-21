<!DOCTYPE html>
<html>
<head>
	<title>Loop</title>
	<style>
		body
			{
				background-color: black;
			}
			.loop
			{
				width: 400px;
				height: 400px;
				background-color: white;
				border-radius: 10px;
			}
	</style>
</head>
	<body>
	<div class="loop">

		<?php
			$a = 0;
			$b = 0;

			for($i = 0; $i < 2; $i++)
			{
				$a += 10;
				$b += 5;

			}
			echo"At the end of the loop a=$a and b= $b";
		?>
		</br>
		<?php 
		 $i = 0;
		 $num = 50;
		 while($i < 2){
		 	$num--;
		 	$i++;
		 }
		 echo "Loop stopped at 1=$i and num = $num";
		?>
		<br/>
		<?php 
			$i = 0;
			$num = 0;
			do{
				$i++;

			}while($i<10);
			 echo"Loop stopped at i = $i";

		?>
		<?php 
			$fruits = array('guava','apple','mango','orange');

			foreach ($fruits as $fruit) {
				echo"List of fruits: $fruit</br>";
			}

		?>
		</div>
	</body>
</html>