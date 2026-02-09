<?php 
setcookie("user_name", "", time() - 3600,"/");
header("Location: cookie_test.php");

exit();
?>