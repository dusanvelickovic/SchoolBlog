<?php include "../includes/init.php" ?>
<?php include "../includes/connection.php" ?>
<?php include "includes/header.php" ?>
<?php include "includes/navigation.php" ?>
<?php include "includes/checkAdmin.php" ?>
<section class="create-news">
    <div class="container">
        <div class="title"><h1>Dodaj novog korisnika</h1></div>
        <?php
            if(isset($_POST['create-user'])){
                $user_uid = $_POST['user_uid'];
                $user_email = $_POST['user_email'];
                $user_admin = $_POST['user_admin'];

                $user_pwd = "BoraBora2022";
                $user_pwd = password_hash($user_pwd, PASSWORD_BCRYPT, array("cost" => 10));

                $defaultImage = "placeholderKorisnik.png";

                $userImage = $_FILES['image']['name'];
                $userImageTmp = $_FILES['image']['tmp_name'];

                move_uploaded_file($userImageTmp, "../images/$userImage");

                $image = (file_exists($userImage)) ? $userImage : $defaultImage;

                $query = "INSERT INTO `users`(`user_uid`, `user_email`, `user_pwd`, `user_admin`, `user_image`) VALUES ('$user_uid','$user_email','$user_pwd','$user_admin', '$image')";

                $result = mysqli_query($connection, $query);

                header("Location: users.php");
            }
        ?>
        <form action="create-user.php" method="post" class="add-form" enctype="multipart/form-data">
            <label for="title" >Ime i prezime korisnika</label>
            <input type="text" name="user_uid" required>

            <label for="content" >Email</label>
            <input type="email" name="user_email" required>

            <label for="author">Admin</label>
            <input type="number" name="user_admin" min="0" max="1" required>

            <label for="image">Profilna slika</label>
            <input type="file" name="image">

            <input type="submit" value="Kreiraj" name="create-user">
        </form>
    </div>
</section>
<?php include "includes/footer.php" ?>
