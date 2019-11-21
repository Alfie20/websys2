<html>
	<head>
		<title>
			
		</title>
	</head>
		<body>
		<center>
			<?php
				$a =5;
				if($a < 10)
				{
					echo "$a is less than 10";
					}
					else if($a == 5){
							echo "they are equal";

					}	
					else {
						echo "10 is greater than $a";
					}			
			 ?>
			 <?php 
			 	echo"<p>";
			 	$letter ='z';
			 	switch ($letter) {
			 			case 'a':
			 			 echo"it is a";

			 			break;
			 			case 'b':
			 			echo"it is b";
			 			break;
			 		
			 		default:
			 			echo"it is not in the list";
			 			break;
			 	}
			 	echo "</p>";
			 ?>
			<a style="position:absolute;text-decoration: none; color: black;margin-top: 60px;margin-left: -45px;" href="welcome.php">
				<button class="pindot">back</button></a>
	</center>
		</body>
</html>