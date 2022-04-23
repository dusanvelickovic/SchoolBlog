<?php
 
include "includes/init.php";

// $_SESSION['user_uid'] = null;
session_destroy();
header("Location: index.php");