<!DOCTYPE html>
<html>
  <title> PHP Demp </title>
  <body>
	<h1> PHP Demo </h1>
	
	<?php
	//PHP code
	
	$name = "PHP";
	
	sayHello($name);
	sayHello("Dr.Mclarty", 5);

	function sayHello ($name, $numTimes=10) 
	{
		for ($c = 0; $c <10; $c++)
		{
		echo "<b>Hello, $name!</b><br>";
		}	
	}
	
$nums[]= [6,7,5,4];
	echo "sum is " .findSum($nums);
	
	int $total =0;
	function findSum($nums)
	{
		for (int n = 0; n <4; n++)
		{
			total = total + $nums[i];
		}
	}

?>



  </body>
</html>