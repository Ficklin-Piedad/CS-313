<?php

require("password.php"); 
session_start();
unset($_SESSION['username']);

header("Location: signIn.php");
die(); 