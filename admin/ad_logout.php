<?php
session_start();

unset($_SESSION['loggedinc']);
unset($_SESSION['loggedin']);

header("location:index.php");
?>