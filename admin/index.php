<?php include "../includes/init.php" ?>
<?php include "../includes/connection.php" ?>
<?php include "includes/header.php" ?>
<?php include "includes/navigation.php" ?>
<?php include "includes/checkAdmin.php" ?>
        <div class="page">
            <div class="container">
                <h1>Dobro došao/la, <span><?php echo $_SESSION['user_uid']; ?></span></h1>
                <span class="login-btn"><a href="../logout.php">Odjava</a></span>
            </div>
        </div>
<?php include "includes/footer.php" ?>
