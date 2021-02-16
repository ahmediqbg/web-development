<!DOCTYPE html>

<html>
<head><title></title></head>
<body>
    <?php
        session_start();
        
        if(isset($_SESSION["num"]))
        {
            $_SESSION["num"]++;
        }
        else
        {
            $_SESSION["num"] = 1;
        }

        $count = $_SESSION["num"];
        echo "<p>Page Views: $count</p>";

    ?>


</body>

</html>