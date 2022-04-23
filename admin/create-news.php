<?php include "../includes/init.php" ?>
<?php include "../includes/connection.php" ?>
<?php include "includes/header.php" ?>
<?php include "includes/navigation.php" ?>
<?php include "includes/checkAdmin.php" ?>
<section class="create-news">
    <div class="container">
        <div class="title"><h1>Dodaj novu vest</h1></div>
        <?php
            if(isset($_POST['publish-btn'])){
                $postTitle = $_POST['title'];
                $postContent = $_POST['content'];
                $postAuthor = $_POST['author'];
                $postTags = $_POST['tags'];
                $postContentEntry = $_POST['content-entry'];

                // $postContentToOutput = nl2br(htmlentities($postContent, ENT_QUOTES, 'UTF-8'));
                $postContentEntryToOutput = nl2br(htmlentities($postContentEntry, ENT_QUOTES, 'UTF-8'));

                $postImage = $_FILES['image']['name'];
                $postImageTmp = $_FILES['image']['tmp_name'];

                move_uploaded_file($postImageTmp, "../images/$postImage");

                $query = "INSERT INTO `news`(`newsTitle`, `newsContent`, `newsImage`, `newsAuthor`, `newsDate`, `newsTags`, `newsContentEntry`) VALUES ('{$postTitle}','{$postContent}','{$postImage}','{$postAuthor}',now(),'{$postTags}','{$postContentEntryToOutput}')";

                $result = mysqli_query($connection, $query);
                header("Location: news.php");
            }
        ?>
        <form action="create-news.php" method="post" class="add-form" enctype="multipart/form-data">
            <label for="title" >Naslov vesti</label>
            <input type="text" name="title" required>

            <label for="content" >Uvodni pasus</label>
            <textarea name="content-entry" id="" cols="30" rows="5" required></textarea>
            
            <label for="image">Post Image</label>
            <input type="file" name="image" required>

            <label for="content" >Sadrzaj vesti</label>
            <textarea name="content" id="summernote" cols="30" rows="10" required></textarea>

            <label for="author">Autor vesti</label>
            <input type="text" name="author" required>

            <label for="tags">Tagovi</label>
            <input type="text" name="tags" required>

            <input type="submit" value="Objavi vest" name="publish-btn">
        </form>
    </div>
</section>
<?php include "includes/footer.php" ?>
