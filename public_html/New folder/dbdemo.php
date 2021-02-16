<?php

//Request Method?
if ($_SERVER["REQUEST_METHOD"]== "GET"){
	//display the form
?>
<form method = "POST" action= "dbdemo.php">
GPA? <input type = "text" name="gpa" >
<br><input type ="submit" value="submit">
</from>

<?php 
}


 else {
	 //request method is POST
	 $gpa=$_POST["gpa"];
	 echo "GPA is $gpa";
	 
	 // Select students with given GPA
	 
 }
?>
$mysql = new mysqli("localhost", "aabdulamir", "H#", "aabdulamir");

$sql = "select * from students";

$results = $mysqli -> query($sql) or 
									die ("Error executing query: ($mysqli_>errno) $mysqli->error <br>SQL = $sql")


									
while (4row = $results -> fetch_row())
{
	// $row[0] = stuid
	// $row[1] = name
	// $row[2] = gpa
	
	echo "<p> $row[0] $row[1] $row[2] </p>";
}	
	
?>