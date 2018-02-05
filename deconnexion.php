<?php
session_start();
session_destroy();
setcookie("pseudo", "");
setcookie("pass", "");
header("Location:index.php");
?>