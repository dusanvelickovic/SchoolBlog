<?php include "../includes/init.php"; ?>
<?php include "../includes/connection.php"; ?>
<?php include "includes/header.php"; ?>
<?php include "includes/navigation.php"; ?>
<?php include "includes/checkAdmin.php" ?>
<section class="create-news">
    <div class="container">
        <div class="title"><h1>Ažuriraj vest</h1></div>
        <?php
            if(isset($_GET['editId'])){
                $getPostId = $_GET['editId'];
            }
                $query = "select * from news where newsId = $getPostId";
                $result = mysqli_query($connection, $query);

                while($row = mysqli_fetch_assoc($result)){
                    $postTitle = $row['newsTitle'];
                    $postContent = $row['newsContent'];
                    // $postContentStrip = strip_tags($postContent, '<br />');
                    $postAuthor = $row['newsAuthor'];
                    $postTags = $row['newsTags'];
                    $postImage = $row['newsImage'];
                    $postContentEntry = $row['newsContentEntry'];
                    $postContentEntryStrip = strip_tags($postContentEntry, '<br />');
                }
            
        
            if(isset($_POST['update-btn'])){
                $title = $_POST['title'];
                $content = $_POST['content'];
                $author = $_POST['author'];
                $tags = $_POST['tags'];
                $contentEntry = $_POST['content-entry'];

                // $postContentOutput = nl2br(htmlentities($content, ENT_QUOTES, 'UTF-8'));
                $postContentEntryOutput = nl2br(htmlentities($contentEntry, ENT_QUOTES, 'UTF-8'));

                $image = $_FILES['image']['name'];
                $imageTmp = $_FILES['image']['tmp_name'];
                move_uploaded_file($imageTmp, "../images/$image");
 
                if(empty($image)){
                    $query = "select * from news where newsId = $getPostId";
                    $findImage = mysqli_query($connection, $query);

                    while($row = mysqli_fetch_assoc($findImage)){
                        $image = $row['newsImage'];
                    }
                }

                $updateQuery = "UPDATE news set 
                newsTitle = '$title',
                newsContent = '$content',
                newsImage = '$image',
                newsAuthor = '$author',
                newsTags = '$tags',
                newsContentEntry = '$postContentEntryOutput'
                WHERE newsId = '$getPostId'";

                $update = mysqli_query($connection, $updateQuery);
                if(!$update){
                    die("QUERY FAILED" . mysqli_error($connection));
                }
                header("Location: news.php");
            }
        ?>
        <form action="" method="post" class="add-form" enctype="multipart/form-data">
            <label for="title" >Naslov vesti</label>
            <input type="text" name="title" value="<?php
                echo $postTitle;
            ?>" required>
            <label for="content" >Uvodni pasus</label>
            <textarea name="content-entry" id="" required cols="30" rows="5" ><?php
                echo $postContentEntryStrip;
            ?></textarea>
            
            <label for="image">Slika vesti</label>
            <img src="../images/<?php echo $postImage?>" alt="">
            <input type="file" name="image" >

            <label for="content" >Sadrzaj vesti</label>
            <textarea name="content" id="summernote" required cols="30" rows="10" ><?php
                echo $postContent;
            ?></textarea>

            <label for="author">Autor vesti</label>
            <input type="text" name="author"  value="<?php
                echo $postAuthor;
            ?>">
            <label for="tags">Tagovi</label>
            <input type="text" name="tags" required value="<?php
                echo $postTags;
            ?>">
            <input type="submit" value="Ažuriraj vest" name="update-btn">
        </form>
    </div>
</section>
<?php include "includes/footer.php" ?>
