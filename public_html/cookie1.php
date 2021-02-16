<?php

//save a cookie called name with value frank mccown
setcookie("name", "Frank McCown");

//cookie that expires 15 seconds after it elapsed
setcookie("age", 25, time() + 15);

echo "Cookies saved";

?>