<!DOCTYPE html>

<html lang="en">

    <title>Survey</title>


    <body>

        <h1>Thank You!</h1>

        <?php
            $source = $_POST["input-source"];
            if ($source != "Secret Survey")
                echo "<strong>Invalid survey source!</strong><br>";
            else{};

            $name = $_POST["name"];
            if ($name === "")
                $name = "Not specified";
            echo "Name: <strong>$name</strong><br>";

            $class = $_POST["class"];
            echo "Classification: <strong>$class</strong><br>";


            $gender = $_POST["gender"];
            if($gender == "M")
                echo "Gender: <strong>Male</strong><br>";
            if($gender == "F")
                echo "Gender: <strong>Female</strong><br>";


            $email = $_POST["email"];
            if ($email !== "") {
                echo "Email: <strong><a href = 'mailto:$email'>$email</a></strong><br>";
            }
            else
                echo "Email: <br>";


            $showPword = $_POST["pword"];
            if ($showPword !== "") {
                echo "Password: <strong>$showPword</strong><br>";
            }
            else
                echo "Password: <br>";


            echo "Favorite Classes: ";
            if (isset($_POST["courses"])) {
                // Extract array of checked courses
                $courses = $_POST["courses"];
                echo "<ul>";
                foreach ($courses as $course) {
                    if ($course === "course-web")
                        $course = "Web Development";
                    if ($course === "course-net")
                        $course = "Networking";
                    if ($course === "course-gui")
                        $course = "GUI";
                    if ($course === "course-oop")
                        $course = "OOP";
                    echo "<li><strong>$course</strong></li>";
                }
                echo "</ul>";
            }
            else
                echo "<strong>None selected<br></strong>";


            $graduation = $_POST["grad"];
            if($graduation=="Yes")
                echo "Spring Graduation: <strong>Yes</strong><br>";
            else if($graduation == "No")
                echo "Spring Graduation: <strong>No</strong><br>";


            $showComm = $_POST["comments"];
            if ($showComm === "") {
                echo "Comments: ";
            }
            else
                echo "Comments: <strong>$showComm</strong>";

            ?>

    </body>

</html>
