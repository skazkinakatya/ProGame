<?php
setcookie ("user", "", time() - 60*60*24*14);
session_destroy();
header("Location: /autorize.php");
die();
?>