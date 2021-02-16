<h1>Login</h1>
<?php
//POST?
if($_SERVER['REQUEST_METHOD'] == 'POST') {

    //Get password hash from the database
    require("TwisterDb.php");
    $twisterDb = new TwisterDb();
    $user = $twisterDb->GetUserInfo($_POST['username']);

    $hash = $user['password'];

    $newHash= password_hash($_POST['password'], PASSWORD_BCRYPT);

    echo "<p> DB hash = $hash</p>";
    echo "<p> New hash = $newHash</p>";

    if(password_verify($_POST))

    if ($_POST['username'] == 'bsmith' &&
        $_POST['password'] == 'opensesame') {
            echo "WELCOME!"
        }
}



<div>
<form method = "POST" action="login.php"
Username: <input type="text" name="username">   
</div>
<div>
Password: <input type="password" name="password">
</div>
<input type="submit" value="Login">
</form>