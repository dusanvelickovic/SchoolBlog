<?php 
    if($_SESSION['user_admin'] != 1){
        header("Location: ../index.php");
    }
?>