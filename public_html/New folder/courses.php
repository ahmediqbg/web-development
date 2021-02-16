

<?php
  if($_SERVER["REQUEST_METHOD"] == "GET")
{
?>


<form method="post" action="courses.php">

<h1>  New Course  </h1>
<p> Enter a new course: </p>
<div id="input">
<table width="80">
  <tr>
    <td>ID:</td>
    <td><input type="text" name="id" id="id"><br></td>
  </tr>
   <tr>
    <td>Dept:</td>
    <td><input type="text" name="dept" id="dept"><br></td>
  </tr>
    <tr>
    <td>Num:</td>
    <td><input type="text" name="num" id="num"><br></td>
  </tr>
    <tr>
    <td>Title:</td>
    <td><input type="text" name="title" id="title"><br></td>
  </tr>
   <tr>
    <td>Instructor:</td>
    <td><input type="text" name="instructor" id="instructor"><br></td>
  </tr>
</table>
<input type="submit" value="Save" id="Save">

</form>
<?php
}


else {

$mysqli = new mysqli("localhost", "aabdulamir", "H01622902", "aabdulamir");

$id= $_POST['id'];
$dept= $_POST['dept'];
$num= $_POST['num'];
$title= $_POST['title'];
$instructor= $_POST['instructor'];




  if($id === "" ||  ctype_digit($id) == FALSE){
              echo "<p>ID should not be left blank </p>";
              echo "<a href='courses.php'>Inster new courses</a>";
          }
          else if(strlen($dept) > 4 || $dept === ""){
              echo "<p>Dept should not be left blank or more than 4 characters</p>";
              echo "<a href='courses.php'>Inster new courses</a>";
          }
          else if($num === ""){
              echo "<p>num should not be left blank </p>";
              echo "<a href='courses.php'>Inster new courses</a>";
          }
          else if($title === ""){
              echo "<p>title should not be left blank </p>";
              echo "<a href='courses.php'>Inster new courses</a>";
          }
          else if($instructor === ""){
              echo "<p>instructor should not be left blank </p>";
              echo "<a href='courses.php'>Inster new courses</a>";
          }
          else{


$sql = "INSERT INTO courses VALUES ($id,$dept, $num, $title, $instructor)";



if ($mysqli ->query($sql)) {
    echo "<p>Inserted the new course.</p>";

}

elseif ($mysqli->errno == 1062){
    echo "<p> Sorry but that course ID is already in use. </p>";

}

else{
    die("error:($mysqli->errno)");
}

$sql = "SELECT courseid, debt, num, title, instructor FROM courses  ORDER BY dept, num ";

$results= $mysqli->query($sql) or die("error");

echo"<div id='showResult' >
    <h1>All Courses</strong></h1><table border='1' ><tbody>
            <tr><th>Course ID</th><th>Dept</th><th>Number</th><th>Title</th><th>Instructor</th>";

echo "<table border='1'><tbody>
	<tr><th> Course ID</th><th>Department</th><th>Number</th><th>Title</th><th>Instructor</th></tr>";
while($row = $results->fetch_row()){
    echo"<th>$id</th> <th>$dept</th> <th>$num</th> <th>$title</th> <th>$instructor</th>";
}
 echo "</table></div>";
 echo "<a href='courses.php'>Inster new courses</a>";

} // end else
?>
