<!DOCTYPE html>

<html>
<head><title>cookie count</title></head>
<body>
    <?php
    if(!isset($_COOKIE["num"]))
    {
        setcookie("num", 1);
        $count = 1;
    }
    else
    {
        $count = $_COOKIE["num"]+1;
        setcookie("num", $count);
    }
    

    echo "<p>Page Views: $count</p>";

    ?>
</body>
</html>