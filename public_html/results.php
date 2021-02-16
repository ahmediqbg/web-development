<!DOCTYPE HTML>
<html>
    <head>
        <title>result</title>    
    </head>
<body>

    <?php
        $maleVotes = ["course-web" => 0, "course-net" => 0, "course-gui" => 0, "course-oop" => 0];
        $femaleVotes = ["course-web" => 0, "course-net" => 0, "course-gui" => 0, "course-oop" => 0];

        $reslut = fopen("results.txt", "r") or
        die("Can't open results.txt for appending");
        
        while(!feof($reslut))
        {
            $line = fgets($reslut);
            $course = substr($line, 0, 10);
            $gender = substr($line, 11, 1);
            if($gender == "M")
            {
                $maleVotes[$course]++;
            }
            else if($gender == "F")
            {
                $femaleVotes[$course]++;
            }
        }
        echo "<table border>";
        echo "<tr><th>Class</th><th>Males</th><th>Females</th><th>Total</th></tr>";
        //webdev
        echo "<tr>";
        echo "<td>Web Development</td>";
        echo "<td>";
        echo $maleVotes["course-web"];
        echo "</td><td>";
        echo $femaleVotes["course-web"];
        echo "</td><td>";
        echo $maleVotes["course-web"] + $femaleVotes["course-web"];
        echo "</td></tr>";

        //networking
        echo "<tr>";
        echo "<td>Networking</td>";
        echo "<td>";
        echo $maleVotes["course-net"];
        echo "</td><td>";
        echo $femaleVotes["course-net"];
        echo "</td><td>";
        echo $maleVotes["course-net"] + $femaleVotes["course-net"];
        echo "</td></tr>";

        //GUI
        echo "<tr>";
        echo "<td>GUI</td>";
        echo "<td>";
        echo $maleVotes["course-gui"];
        echo "</td><td>";
        echo $femaleVotes["course-gui"];
        echo "</td><td>";
        echo $maleVotes["course-gui"] + $femaleVotes["course-gui"];
        echo "</td></tr>";

        //oop
        echo "<tr>";
        echo "<td>OOP</td>";
        echo "<td>";
        echo $maleVotes["course-oop"];
        echo "</td><td>";
        echo $femaleVotes["course-oop"];
        echo "</td><td>";
        echo $maleVotes["course-oop"] + $femaleVotes["course-oop"];
        echo "</td></tr>";
        

        echo "</table>";
    ?>
</body> 
</html>
