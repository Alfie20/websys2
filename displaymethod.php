
<?php
	if(isset($_REQUEST["lastname"]) && isset($_REQUEST["age"]) &&  isset($_REQUEST["pass"])){
		if(preg_match("/[^A-Za-z'-]/", $_REQUEST['pass'])){
		echo "Welcome".$_REQUEST['lastname']."<br/>";
		echo "You are".$_REQUEST['age']."years old <br/>";
		echo "Your pass(".$_REQUEST['pass'].")";
		}
		else
		{
			die("password not meet.");
		}
}
 ?>