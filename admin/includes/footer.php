<?php 
    if($_SESSION['user_admin'] != 1){
        header("Location: ../index.php");
    }
?>
        <!-- SUMMERNOTE INIT FILE -->
        <script src="./js/init.js"></script>
    </body>
</html>