<?php 

// mysql -u username -p
// use username
$mysql= new mysqli("localhost", "aabdulamir", "H01622902");

if ($mysqli->query($sql)){
    echo "<p>Inserted $mysqli->affected_rows row.</p>";
}

elseif ($mysqli->errno === 1062) {
    echo "<p>Sorry, stuid 333 is already in use</p>";
}
else {
    echo "Errpr executing query: ($mysqli->errno)
    $mysqlii->error<br>SQL = $sql";
}


$sql = "select * from students order by name";

//excutes query and returns our slected rows
$result = $mysqli->query($sql) or die("ERROR!");

$row = $result->fetch_row();

//get all rows from select
while ($row = $result->fetch_row()){
echo "stuid = $row[0], name = $row[1], gpa = $row[2]<br>";
}

?>