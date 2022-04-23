<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'sajtparlament';

    $connection = mysqli_connect($host, $user, $password, $db);

    if(!$connection){
        die("Database connection has failed");
    }
?>