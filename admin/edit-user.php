<?php include "../includes/init.php" ?>
<?php include "../includes/connection.php" ?>
<?php include "includes/header.php" ?>
<?php include "includes/navigation.php" ?>
<?php include "includes/checkAdmin.php" ?>
<section class="create-news">
    <div class="container">
        <div class="title"><h1>Dodaj novog korisnika</h1></div>
        <?php
            if(isset($_GET['editId'])){
                $editId = $_GET['editId'];

                $query = "select * from users where user_id = $editId";
                $result = mysqli_query($connection, $query);

                while($row = mysqli_fetch_assoc($result)){
                    $username = $row['user_uid'];
                    $email = $row['user_email'];
                    $admin = $row['user_admin'];
                    $image = $row['user_image'];
                }
            }
        ?>
        <form action="" method="post" class="add-form" enctype="multipart/form-data">
            <label for="title" >Ime i prezime korisnika</label>
            <input type="text" name="user_uid" value="<?php echo $username ?>" required>

            <label for="content" >Email</label>
            <input type="email" name="user_email" required value="<?php echo $email ?>">

            <label for="author">Admin</label>
            <input type="number" name="user_admin" min="0" max="1" required value="<?php echo $admin ?>">
            
            <label for="author">Lozinka</label>
            <input type="password" name="user_password" required value="">
            
            <label for="image">Profilna slika</label>
            <img src="../images/<?php echo $image ?>" alt="">
            <input type="file" name="user_image" id="">

            <input type="submit" value="Ažuriraj" name="update-user">
        </form>
        <?php
            if(isset($_POST['update-user'])){
                $user_uid = $_POST['user_uid'];
                $user_email = $_POST['user_email'];
                $user_pwd = "BoraBora2022";
                $user_admin = $_POST['user_admin'];
                $user_password = $_POST['user_password'];
                $user_password = password_hash($user_password, PASSWORD_BCRYPT, array("cost" => 10));
                
                $user_image = $_FILES['user_image']['name'];
                $user_image_tmp = $_FILES['user_image']['tmp_name'];
                move_uploaded_file($user_image_tmp, "../images/$user_image");

                if(empty($user_image)){
                    $query = "select * from users where user_id = $editId";
                    $findImage = mysqli_query($connection, $query);

                    while($row = mysqli_fetch_assoc($findImage)){
                        $user_image = $row['user_image'];
                    }
                }

                $query = "update users set
                user_uid = '$user_uid',
                user_email = '$user_email',
                user_admin = '$user_admin',
                user_image = '$user_image',
                user_pwd = '$user_password'
                where user_id = '$editId'";

                $_SESSION['user_image'] = $user_image;

                $result = mysqli_query($connection, $query);
                header("Location: users.php");
            }
        ?>
    </div>
</section>
<?php include "includes/footer.php" ?>
