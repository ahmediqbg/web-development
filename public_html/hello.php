<!DOCTYPE html>
<html>
  <title> PHP Demp </title>
  <body>
	<h1> PHP Demo </h1>
	
	<?php
	//PHP code
print_r($_GET);

	$name = $_GET["name"];
	$howMany = $_GET["howMany"];

	//TODO: Did user check bold textbox?

	for ($c = 0; $c <$howMany; $c++)
	{
		if(isset($_GET["bold"] == "yes") && $_GET["bold" == "yes" )
		{
			echo "<b> Hello, $name!</b><br>";
		}

		else {
				echo "Hello, $name!<br>";
				 }
	}
	?>




  </body>
</html>