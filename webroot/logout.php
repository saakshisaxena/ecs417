<?php

session_start(); // to be able to access the session
session_unset();
session_destroy();

header("Location:index.php");
?>
