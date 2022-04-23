<?php include "../includes/init.php" ?>
<?php include "../includes/connection.php" ?>
<?php include "includes/header.php" ?>
<?php include "includes/navigation.php" ?>
<?php include "includes/checkAdmin.php" ?>
<section class="table-news">
    <div class="container">
        <h1>Pregled svih vesti</h1>
        <table class="all-news">
            <thead>
                    <th>Id vesti</th>
                    <th>Naslov vesti</th>
                    <th>Sadrzaj vesti</th>
                    <th>Slika vesti</th>
                    <th>Autor vesti</th>
                    <th>Datum objavljivanja</th>
                    <th>Tagovi</th>
                    <th>Status vesti</th>
                    <th>Dozvoli vesti</th>
                    <th>Zabrani vesti</th>
                    <th>Ažuriraj vest</th>
                    <th>Obriši vest</th>
            </thead>
            <tbody>
            <?php 
                    $query = "select * from news order by newsId desc";
                    $result = mysqli_query($connection, $query);

                    while($row = mysqli_fetch_assoc($result)){
                        $newsId = $row['newsId'];
                        $newsTitle = $row['newsTitle'];
                        $newsContent = $row['newsContent'];
                        $newsImage = $row['newsImage'];
                        $newsAuthor = $row['newsAuthor'];
                        $newsDate = $row['newsDate'];
                        $newsTags = $row['newsTags'];
                        $newsApproved = $row['newsApproved'];
                        $newsContentEntry = $row['newsContentEntry'];
                        echo "
                        <tr>
                        <td>$newsId</td>
                        <td><a href='../news-open.php?id=$newsId' class='toNews'>$newsTitle</a></td>";
                        echo "<td>"; echo $newsContentEntry; echo "</td>";
                        echo "<td><img width='150px' src='../images/$newsImage' alt='Naslovna fotografija' </td>
                        <td>$newsAuthor</td>
                        <td>$newsDate</td>
                        <td>$newsTags</td>
                        <td>$newsApproved</td>
                        <td><a href='?approveId=$newsId' class='btn-edit'>Dozvoli</a></td>
                        <td><a href='?disapproveId=$newsId' class='btn-delete' style='background-color: #D97A5C'>Zabrani</a></td>
                        <td><a href='edit-news.php?editId=$newsId' class='btn-edit'>Ažuriraj</a></td>
                        <td><a href='?deleteId=$newsId' class='btn-delete'>Obriši</a></td>
                        </tr>";
                    }
                    if(isset($_GET['approveId'])){
                        $approveId = $_GET['approveId'];

                        $query = "update news set newsApproved = 'dozvoljena' where newsId = {$approveId}";
                        $result = mysqli_query($connection, $query);
                        header("Location: news.php");
                    }
                    if(isset($_GET['disapproveId'])){
                        $disapproveId = $_GET['disapproveId'];

                        $query = "update news set newsApproved = 'zabranjena' where newsId = {$disapproveId}";
                        $result = mysqli_query($connection, $query);
                        header("Location: news.php");
                    }
                    if(isset($_GET['deleteId'])){
                        $deleteId = $_GET['deleteId'];

                        $query = "delete from news where newsId = {$deleteId}";
                        $result = mysqli_query($connection, $query);
                        header("Location: news.php");
                    }
                ?>
                
            </tbody>
        </table>
    </div>
</section>
<?php include "includes/footer.php" ?>
