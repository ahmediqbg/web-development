<!DOCTYPE HTML>
<html>
<head><title>Survey</title></head>
<body>
<h2>Thank You</h2>
<p>We appreciate you taking our survey.</p>
<?php
if(isset($_POST['gender']))
    $gender = $_POST['gender'];
else
    $gender = '?';    

$gender = isset($_POST['gender']) ? $_POST['gender'] : '?';
$courses = [
	"course-web" => "Web Development",
	"course-net" => "Networking",
	"course-gui" => "GUI",
	"course-oop" => "OOP"];
	
if (!isset($_POST['courses'])) 
	echo "<p>You did not select any favorite courses.</p>";
else 
{
	// Append to results.txt
	$results = fopen("results.txt", "a") or
		die("Can't open results.txt for appending");

	echo "<p>Favorite courses:<br><ol>";
	foreach ($_POST['courses'] as $course)
	{
		echo "<li>$courses[$course]</li>";
		fwrite($results, "$course $gender\n");
	}
	
	echo "</ol>";
	fclose($results);
}

?>
See the <a href="results.php">survey results</a>.
</body>
</html>