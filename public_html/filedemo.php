<?php

//write some strings to a text file
$outFile = fopen("someText.txt", "a") or die ("cant write");

fwrite($outFile, "This is a test.\n");

fclose($outFile);

echo "Just wrote to sometext.txt";

//read all strings from text file
$inFile = fopen("someText.txt","r") or die ("cant read");


//read lines until gittin eof

while (!feof($inFile)) 
{
	$line = fgets($inFile);
	echo "$line<br>";
}

fclose($inFile);

?>