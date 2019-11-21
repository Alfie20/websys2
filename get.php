<?php 
	if(isset($_GET["lastname"]) && isset($_GET["age"]) &&  isset($_GET["pass"])){
		echo "Welcome".$_GET['lastname']."<br/>";
		echo "You are".$_GET['age']."years old";
		echo "Your pass".$_GET['pass']."not secure";

}
?>

<html>
<head>
	<title>get post method</title>
</head>
<body">
<header style="background-color: black;">
	<h1></h1>
</header>
	<center>
	<div >
	 <form action = "<?php $_PHP_SELF ?>" method = "GET">
         Name: <input type = "text" name = "lastname" />
         Age: <input type = "text" name = "age" />
        Password<input type = "text" name = "pass" />
         <input type = "submit" value="submit"/>
      </form>
      <div>
      <a href="welcome.php"><button>back</button></a>
</center>
</body>
</html>