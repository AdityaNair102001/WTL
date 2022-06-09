<?php

include_once("./connect.php");

$username=$_POST["username"];
$password=$_POST["password"];
$id=$_POST['id'];

if(isset($_POST['submit'])){
    if(empty($username) || empty($password)) 
		{
			if(empty($username)) 
			{
				echo "<font color='red'>Username field is empty.</font><br/>";
			}
			if(empty($password)) 
			{
				echo "<font color='red'>Password field is empty.</font><br/>";
			}
			if(empty($id)){
				echo "<font color='red'>ID Field is empty.</font><br/>";
			}
			
					//link to the previous page
			echo "<br/><a href='javascript:self.history.back();'>Go Previous Page</a>";
		} 
else{
	echo "heloooo";
    $result = mysqli_query($mysqli, "INSERT INTO users(id,username,password) 
		VALUES('$id','$username','$password')");

	echo $result;

		//display success message
		echo "<font color='green'>Data added successfully in Table, Please Check";
		echo "<br/><a href='results.php'>View Result</a>";
}
}





?>
