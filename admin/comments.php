<?php include "../includes/init.php" ?>
<?php include "../includes/connection.php" ?>
<?php include "includes/header.php" ?>
<?php include "includes/navigation.php" ?>
<?php include "includes/checkAdmin.php" ?>
<section class="table-news">
    <div class="container">
        <h1>Pregled svih komentara</h1>
        <table class="all-news comments">
            <thead>
                    <th>Id komentara</th>
                    <th>Id vesti</th>
                    <th>Autor</th>
                    <th>Sadrzaj poruke</th>
                    <th>Datum slanja</th>
                    <th>Status komentara</th>
                    <th>Dozvoli komentar</th>
                    <th>Zabrani komentar</th>
                    <th>Obriši poruku</th>
            </thead>
            <tbody>
                <?php 
                    $query = "select * from comments order by commentId DESC";
                    $result = mysqli_query($connection, $query);

                    while($row = mysqli_fetch_assoc($result)){
                        $commentId = $row['commentId'];
                        $newsId = $row['newsId'];
                        $commentText = $row['commentText'];
                        $commentDateTime = $row['commentDateTime'];
                        $commentAuthor = $row['commentAuthor'];
                        $commentApproved = $row['commentApproved'];
                
                        echo "
                        <tr>
                            <td> $commentId</td>
                            <td><a href='../news-open.php?id=$newsId' class='toNews'>$newsId</a></td>
                            <td> $commentAuthor</td>
                            <td> $commentText</td>
                            <td> $commentDateTime</td>
                            <td> $commentApproved</td>
                            <td><a href='?approveId=$commentId' class='btn-edit'>Dozvoli</a></td>
                            <td><a href='?disapproveId=$commentId' class='btn-delete' style='background-color: #D97A5C'>Zabrani</a></td>
                            <td><a href='?deleteId=$commentId' class='btn-delete'>Obriši</a></td>
                        </tr>";
                    }
		            if(isset($_GET['approveId'])){
                        $approveId = $_GET['approveId'];

                        $query = "update comments set commentApproved = 'dozvoljen' where commentId = {$approveId}";
                        $result = mysqli_query($connection, $query);
                        header("Location: comments.php");
                    }
		            if(isset($_GET['disapproveId'])){
                        $disapproveId = $_GET['disapproveId'];

                        $query = "update comments set commentApproved = 'zabranjen' where commentId = {$disapproveId}";
                        $result = mysqli_query($connection, $query);
                        header("Location: comments.php");
                    }
		            
		            if(isset($_GET['deleteId'])){
                        $deleteId = $_GET['deleteId'];

                        $query = "delete from comments where commentId = {$deleteId}";
                        $result = mysqli_query($connection, $query);
                        header("Location: comments.php");
                    }
                ?>
            </tbody>
        </table>
    </div>
</section>
<?php include "includes/footer.php" ?>
