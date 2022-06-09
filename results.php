<?php

include_once("./connect.php");
		//fetching data in descending order (lastest entry first)
		$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC"); // using mysqli_query instead

        while($res = mysqli_fetch_array($result))
{
    if($res['id']>=9){

    
echo "<br>";    
echo "<tr>";
echo "<td>".$res['id']."</td>";
echo "<td>".$res['username']."</td>";
echo "<td>".$res['password']."</td>";
echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
}
}

?>