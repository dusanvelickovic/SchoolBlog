<?php include "../includes/init.php" ?>
<?php include "../includes/connection.php" ?>
<?php include "includes/header.php" ?>
<?php include "includes/navigation.php" ?>
<?php include "includes/checkAdmin.php" ?>
<section class="table-news">
    <div class="container">
        <h1>Pregled svih poruka</h1>
        <table class="all-news">
            <thead>
                    <th>Id poruke</th>
                    <th>Ime i prezime</th>
                    <th>Mejl</th>
                    <th>Sadrzaj poruke</th>
                    <th>Datum slanja</th>
                    <th>Obriši poruku</th>
            </thead>
            <tbody>
                <?php 
                    $query = "select * from messages order by messagesId DESC";
                    $result = mysqli_query($connection, $query);

                    while($row = mysqli_fetch_assoc($result)){
                        $messageId = $row['messagesId'];
                        $messageUser = $row['messagesNameSurname'];
                        $messageEmail = $row['messagesEmail'];
                        $messageContent = $row['messagesContent'];
                        $messageTime = $row['messageTime'];
                
                        echo "
                        <tr>
                            <td> $messageId</td>
                            <td> $messageUser</td>
                            <td> $messageEmail</td>
                            <td> $messageContent</td>
                            <td> $messageTime</td>
                            <td><a href='?messageId=$messageId' class='btn-delete'>Obriši</a></td>
                        </tr>";
                    }
		            if(isset($_GET['messageId'])){
                        $deleteId = $_GET['messageId'];

                        $query = "delete from messages where messagesId = {$deleteId}";
                        $result = mysqli_query($connection, $query);
                        header("Location: messages.php");
                    }
                ?>
            </tbody>
        </table>
    </div>
</section>
<?php include "includes/footer.php" ?>
