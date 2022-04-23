<?php include "../includes/init.php" ?>
<?php include "../includes/connection.php" ?>
<?php include "includes/header.php" ?>
<?php include "includes/navigation.php" ?>
<?php include "includes/checkAdmin.php" ?>
<section class="table-news">
    <div class="container">
        <h1>Pregled svih korisnika</h1>
        <table class="all-news">
            <thead>
                    <th>Id Korisnika</th>
                    <th>Profilna slika</th>
                    <th>Korisnik</th>
                    <th>Email</th>
                    <th>Admin</th>
                    <th>Izmeni</th>
                    <th>Obrisi</th>
            </thead>
            <tbody>
            <?php 
                    $query = "select * from users order by user_id asc";
                    $result = mysqli_query($connection, $query);

                    while($row = mysqli_fetch_assoc($result)){
                        $user_id = $row['user_id'];
                        $user_uid = $row['user_uid'];
                        $user_email = $row['user_email'];
                        $user_admin = $row['user_admin'];
                        $user_image = $row['user_image'];
                        echo "
                        <tr>
                            <td> $user_id</td>
                            <td> <img src='../images/$user_image' width='100px' alt='Profilna slika'> </td>
                            <td> $user_uid</td>
                            <td> $user_email</td>
                            <td> $user_admin</td>
                            <td><a href='edit-user.php?editId=$user_id' class='btn-edit'>Ažuriraj</a></td>
                            <td><a href='?deleteId=$user_id' class='btn-delete'>Obriši</a></td>
                        </tr>";
                    }
                    if(isset($_GET['deleteId'])){
                        $deleteId = $_GET['deleteId'];

                        $query = "delete from users where user_id = {$deleteId}";
                        $result = mysqli_query($connection, $query);
                        header("Location: users.php");
                    }
                ?>
                
            </tbody>
        </table>
    </div>
</section>
<?php include "includes/footer.php" ?>
