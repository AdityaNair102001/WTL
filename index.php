<?php
//   <h2>Assignment 1</h2>
//   <form method="post" action="./index.php">
//      </label> <input type="text" name="name"/>

//   </form>


// $result = mysqli_query($mysqli, "SELECT * FROM users"); // using mysqli_query instead

// $name=$_POST["name"];
// echo "<h2>hello there ",$name,"</h2>";
echo "Hello from XAMPP";

// for($i=1;$i<=10;$i++){
// 	echo $name."x".$i."=".($name*$i)."<br/>";
// }
?>

<html>
	<form action="./formhandler.php" method="post">
	<input type="number" placeholder="id" name="id"/>
	<input type="text" placeholder="username" name="username"/>	
	<input type="password" placeholder="password" name="password"/>	
	<input type="submit" name="submit"></input>
    </form>
</html>
