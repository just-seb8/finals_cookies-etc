<?php
session_start();
session_unset();
session_destroy();
setcookie("user", "", time() - 3600, "/"); // Delete cookie
header("Location: index.php");
exit();
?>
