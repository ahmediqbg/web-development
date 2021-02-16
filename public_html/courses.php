<?php

if($_SERVER["REQUEST_METHOD"] == "GET")
{
?>
<form method="post" action="courses.php">
<h1>New Course</h1>
<h2>Enter a new course</h2>
<div id="input">
<table>
    <tr>
        <td>ID:</td>
        <td><input type="text" name="id" id="id"></td>
    </tr>
    <tr>
        <td>Dept:</td>
        <td><input type="text" name="dept" id="dept"></td>
    </tr>
    <tr>
        <td>Num:</td>
        <td><input type="text" name="num" id="num"></td>
    </tr>
    <tr>
        <td>Title:</td>
        <td><input type="text" name="title" id="title"></td>
    </tr>
    <tr>
        <td>Instructor</td>
        <td><input type="text" name="instructor" id="instructor"></td>
    </tr>
</table>
<input type="submit" value="save" id="save">
</div>
</form>
<?php
}

else
{
    $mysqli = new mysqli("localhost", "aabdulamir", "H01622902", "aabdulamir");

    $id = $_POST['id'];
    $dept = $_POST['dept'];
    $num = $_POST['num'];
    $title = $_POST['title'];
    $instructor = $_POST['instructor'];


    if($id === "" ||  ctype_digit($id) == FALSE){
        echo "<p>id should not be left blank and it should be number</p>";
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
    $sql = "INSERT INTO courses VALUES ($id, '$dept', $num, '$title', '$instructor')";
    


    if($mysqli->query($sql)){
        echo"<p>Inserted the new course.</p>";
    }elseif($mysqli->errno === 1062){
        echo"<p>sorry, but that course ID is already in use.</p>";
    }else{
        die("error:($mysqli->errno)");
    }


    
    $sql = "SELECT courseid, dept, num, title, instructor FROM courses ORDER BY dept, num";
    $result = $mysqli->query($sql) or die("error");

    echo"<div id='showResult' >
    <h1>All Courses</strong></h1><table border='1' ><tbody>
            <tr><th>Course ID</th><th>Dept</th><th>Number</th><th>Title</th><th>Instructor</th>";
            
    //loop through results to product the table
    while ($row = $result->fetch_row()){
        echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td>";
    }
    echo "</table></div>";
    echo "<a href='courses.php'>Inster new courses</a>";
    }
}
?>