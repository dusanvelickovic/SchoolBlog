<?php include "../includes/init.php" ?>
<?php include "../includes/connection.php" ?>
<?php include "includes/header.php" ?>
<?php include "includes/navigation.php" ?>
<?php include "includes/checkAdmin.php" ?>
<section class="table-news table-likes">
    <div class="container">
        <h1>Pregled svih lajkova</h1>
        <table class="all-news">
            <thead>
                    <th>Broj lajkova</th>
                    <th>Naslov vesti</th>
                    <th>Id vesti</th>
            </thead>
            <tbody>
                <?php 
                    $query = "SELECT COUNT(userlikesnews.userLikesNewsId) as brojLajkova, news.newsTitle, newsId FROM userlikesnews INNER JOIN news USING (newsId) GROUP by newsId ORDER by brojLajkova DESC;";
                    $result = mysqli_query($connection, $query);

                    while($row = mysqli_fetch_assoc($result)){
                        $likes = $row['brojLajkova'];
                        $title = $row['newsTitle'];
                        $newsId = $row['newsId'];
                
                        echo "
                        <tr>
                            <td><a href='?likes=$newsId' class='toNews'>$likes</a></td>
                            <td><a href='?likes=$newsId' class='toNews'>$title</a></td>
                            <td><a href='../news-open.php?id=$newsId' class='toNews'>$newsId</a></td>
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
<section class="table-news table-likes">
    <div class="container">
        <?php
            if(isset($_GET['likes'])){
                echo "<h1>Lajkovi na postu</h1>";
            }
        ?>
        <table class="all-news">
            <?php
                if(isset($_GET['likes'])){
                    $id = $_GET['likes'];
                    echo "
                    <thead>
                        <th>Id korisnika</th>
                        <th>Ime korisnika</th>
                        <th>Id vesti</th>
                        <th>Naslov vesti</th>
                        <th>Vreme lajkovanja</th>
                        <th>Obrisi lajk</th>
                    </thead>
                    <tbody>";
                    $query = "SELECT users.user_id, users.user_uid, userlikesnews.newsId, news.newsTitle, userlikesnews.userLikesNewsId, userlikesnews.userLikesNewsTime
                    from userlikesnews INNER JOIN users 
                    on userlikesnews.userId = users.user_id INNER JOIN news on userlikesnews.newsId = news.newsId WHERE news.newsId = $id;";
                    $result = mysqli_query($connection, $query);

                    while($row = mysqli_fetch_assoc($result)){
                        $likeId = $row['userLikesNewsId'];
                        $userId = $row['user_id'];
                        $username = $row['user_uid'];
                        $newsId = $row['newsId'];
                        $title = $row['newsTitle'];
                        $time = $row['userLikesNewsTime'];
                    ?>
                        <tr>
                            <td><?php echo $userId ?></td>
                            <td><?php echo $username ?></td>
                            <td><?php echo $newsId ?></td>
                            <td><a class="toNews" href='<?php echo "../news-open.php?id=$newsId"?>'><?php echo $title ?></a></td>
                            <td><?php echo $time ?></td>
                            <td><a href="?delete=<?php echo $likeId ?>" class="btn-delete">Obrisi</a></td>
                        </tr>
                    <?php
                    }
                    echo "</tbody>";
                }
            ?>
            <?php 
                if(isset($_GET['delete'])){
                    $delete = $_GET['delete'];

                    $query = "delete from userlikesnews where userLikesNewsId = {$delete}";
                    $result = mysqli_query($connection, $query);
                    header("Location: likes.php");
                }
            ?>
        </table>
    </div>
</section>
<?php include "includes/footer.php" ?>
