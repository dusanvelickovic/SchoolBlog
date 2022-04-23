<?php include "includes/init.php"; ?>
<?php include "includes/header.php"; ?>
<?php include "includes/navigation.php"; ?>
<?php 
    header("Cache-Control: no cache");
// session_cache_limiter("private_no_expire");
?>
<section class="single-news">
    <div class="container">
        <?php
            if(isset($_GET['id'])){
                $newsId = $_GET['id'];

                if(isset($_SESSION['user_id'])){
                    $user = $_SESSION['user_id'];
                } 

                $query = "select * from news where newsId = {$newsId}";
                $result = mysqli_query($connection, $query);

                while($row = mysqli_fetch_assoc($result)){
                    $newsTitle = $row['newsTitle'];
                    $newsDate = $row['newsDate'];
                    $newDate = date("d-m-Y", strtotime($newsDate));
                    $newsImage = $row['newsImage'];
                    $newsContent = $row['newsContent'];
                    $newsContentEntry = $row['newsContentEntry'];
                }
            } else{
                die(mysqli_error($connection));
            }  
        ?>
        <div class="news-enter">
            <div class="news-content">
                <div class="enter-title"><?php echo $newsTitle; ?></div>
                <div class="subtitle">
                    <div class="date">
                        <svg
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                            >
                            <path
                                d="M15 17C16.1046 17 17 16.1046 17 15C17 13.8954 16.1046 13 15 13C13.8954 13 13 13.8954 13 15C13 16.1046 13.8954 17 15 17Z"
                                fill="currentColor"
                            />
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M6 3C4.34315 3 3 4.34315 3 6V18C3 19.6569 4.34315 21 6 21H18C19.6569 21 21 19.6569 21 18V6C21 4.34315 19.6569 3 18 3H6ZM5 18V7H19V18C19 18.5523 18.5523 19 18 19H6C5.44772 19 5 18.5523 5 18Z"
                                fill="currentColor"
                            />
                        </svg>
                        <div class="enter-date date-label"><?php echo $newDate; ?></div>
                    </div>
                    <div class="comms-label">
                        <svg
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                            >
                            <path d="M17 9H7V7H17V9Z" fill="currentColor" />
                            <path d="M7 13H17V11H7V13Z" fill="currentColor" />
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M2 18V2H22V18H16V22H14C11.7909 22 10 20.2091 10 18H2ZM12 16V18C12 19.1046 12.8954 20 14 20V16H20V4H4V16H12Z"
                                fill="currentColor"
                            />
                        </svg>
                        <div class="enter-date numOfComments">
                            <?php 
                                $query = "SELECT COUNT(commentId) AS numOfComments
                                FROM comments
                                where newsId = $newsId and commentApproved = 'dozvoljen'";

                                $result = mysqli_query($connection, $query);

                                while($row = mysqli_fetch_assoc($result)){
                                    $numOfComments = $row['numOfComments'];
                                }
                            echo "<a href=''>$numOfComments komentara</a>" 
                            ?> 
                        </div>
                    </div>
                    <div class="likes">
                        <p>Lajkuj vest:</p>
                        <?php
                            if(isset($_SESSION['user_id'])){
                                $userId = $_SESSION['user_id'];
                                $findRecord = "select * from userlikesnews where userId = $userId and newsId = $newsId";
                                $record = mysqli_query($connection, $findRecord);
                                if (mysqli_num_rows($record)===0) 
                                { 
                                    echo "<form action='' method='POST'>
                                    <button type='submit' class='like-link' name='like-btn' '>
                                    <svg
                                    width='24'
                                    height='24'
                                    color = '#023047'
                                    viewBox='0 0 24 24'
                                    fill='none'
                                    xmlns='http://www.w3.org/2000/svg'
                                    id='likesIconPath'
                                    class=''
                                    >
                                    <path
                                    fill-rule='evenodd'
                                    clip-rule='evenodd'
                                    d='M12.0122 5.57169L10.9252 4.48469C8.77734 2.33681 5.29493 2.33681 3.14705 4.48469C0.999162 6.63258 0.999162 10.115 3.14705 12.2629L11.9859 21.1017L11.9877 21.0999L12.014 21.1262L20.8528 12.2874C23.0007 10.1395 23.0007 6.65711 20.8528 4.50923C18.705 2.36134 15.2226 2.36134 13.0747 4.50923L12.0122 5.57169ZM11.9877 18.2715L16.9239 13.3352L18.3747 11.9342L18.3762 11.9356L19.4386 10.8732C20.8055 9.50635 20.8055 7.29028 19.4386 5.92344C18.0718 4.55661 15.8557 4.55661 14.4889 5.92344L12.0133 8.39904L12.006 8.3918L12.005 8.39287L9.51101 5.89891C8.14417 4.53207 5.92809 4.53207 4.56126 5.89891C3.19442 7.26574 3.19442 9.48182 4.56126 10.8487L7.10068 13.3881L7.10248 13.3863L11.9877 18.2715Z'
                                    fill='currentColor'
                                    />
                                    </svg>
                                    </button>
                                    </form>
                                    ";
                                } else{
                                    echo "<form action='news-open.php?id=$newsId' method='POST'>
                                    <button type='submit' class='like-link' name='remove-like-btn' '>
                                    <svg
                                    width='24'
                                    height='24'
                                    color = 'red'
                                    viewBox='0 0 24 24'
                                    fill='none'
                                    xmlns='http://www.w3.org/2000/svg'
                                    id='likesIconPath'
                                    class=''
                                    >
                                    <path
                                    fill-rule='evenodd'
                                    clip-rule='evenodd'
                                    d='M12.0122 5.57169L10.9252 4.48469C8.77734 2.33681 5.29493 2.33681 3.14705 4.48469C0.999162 6.63258 0.999162 10.115 3.14705 12.2629L11.9859 21.1017L11.9877 21.0999L12.014 21.1262L20.8528 12.2874C23.0007 10.1395 23.0007 6.65711 20.8528 4.50923C18.705 2.36134 15.2226 2.36134 13.0747 4.50923L12.0122 5.57169ZM11.9877 18.2715L16.9239 13.3352L18.3747 11.9342L18.3762 11.9356L19.4386 10.8732C20.8055 9.50635 20.8055 7.29028 19.4386 5.92344C18.0718 4.55661 15.8557 4.55661 14.4889 5.92344L12.0133 8.39904L12.006 8.3918L12.005 8.39287L9.51101 5.89891C8.14417 4.53207 5.92809 4.53207 4.56126 5.89891C3.19442 7.26574 3.19442 9.48182 4.56126 10.8487L7.10068 13.3881L7.10248 13.3863L11.9877 18.2715Z'
                                    fill='currentColor'
                                    />
                                    </svg>
                                    </button>
                                    </form>
                                    ";
                                }
                            } else {
                                    echo "
                                <a href='#' class='like-link' onclick='return cannotLike()'>
                                    <svg
                                        width='24'
                                        height='24'
                                        color = '#023047'
                                        viewBox='0 0 24 24'
                                        fill='none'
                                        xmlns='http://www.w3.org/2000/svg'
                                        id='likesIconPath'
                                        class=''
                                        >
                                        <path
                                            fill-rule='evenodd'
                                            clip-rule='evenodd'
                                            d='M12.0122 5.57169L10.9252 4.48469C8.77734 2.33681 5.29493 2.33681 3.14705 4.48469C0.999162 6.63258 0.999162 10.115 3.14705 12.2629L11.9859 21.1017L11.9877 21.0999L12.014 21.1262L20.8528 12.2874C23.0007 10.1395 23.0007 6.65711 20.8528 4.50923C18.705 2.36134 15.2226 2.36134 13.0747 4.50923L12.0122 5.57169ZM11.9877 18.2715L16.9239 13.3352L18.3747 11.9342L18.3762 11.9356L19.4386 10.8732C20.8055 9.50635 20.8055 7.29028 19.4386 5.92344C18.0718 4.55661 15.8557 4.55661 14.4889 5.92344L12.0133 8.39904L12.006 8.3918L12.005 8.39287L9.51101 5.89891C8.14417 4.53207 5.92809 4.53207 4.56126 5.89891C3.19442 7.26574 3.19442 9.48182 4.56126 10.8487L7.10068 13.3881L7.10248 13.3863L11.9877 18.2715Z'
                                            fill='currentColor'
                                        />
                                    </svg>
                                </a>";
                            }
                        ?>
                        <?php 
                            if(isset($_POST['like-btn'])){
                                $like = $_POST['like-btn'];

                                $query = "INSERT  userlikesnews (userId, newsId) 
                                SELECT  $userId, $newsId
                                WHERE   NOT EXISTS 
                                        (   SELECT  1
                                            FROM    userlikesnews 
                                            WHERE   userId = $userId 
                                            AND     newsId = $newsId
                                        );";
                                $result = mysqli_query($connection, $query);
                                header("Location: news-open.php?id=$newsId");
                            }
                            if(isset($_POST['remove-like-btn'])){
                                $removeLike = $_POST['remove-like-btn'];

                                $query = "delete from userlikesnews where newsId = $newsId and userId = $userId";
                                $result = mysqli_query($connection, $query);
                                header("Location: news-open.php?id=$newsId");
                            }
                        ?>
                        <span class="counter">
                            <?php
                                $query = "SELECT count(*) as counter
                                from userlikesnews
                                where newsId = $newsId";

                                $result = mysqli_query($connection, $query);

                                while($row = mysqli_fetch_assoc($result)){
                                    $counter = $row['counter'];
                                }

                                echo $counter;
                            ?>
                        </span>
                    </div>
                </div>
                <p class="enter-content"><?php  
                    echo $newsContentEntry;
                ?></p>
                <img src="images/<?php echo $newsImage; ?>" alt="Naslovna fotografija">
                <p class="enter-content"><?php  
                    echo $newsContent;
                ?></p>
            </div>
            <aside class="news-aside">
                <div class="nextPrev">
                    <div class="prev">
                        <?php 
                        $query = "select * from news where newsId = (select max(newsId) from news where newsId < $newsId)";
                        $result = mysqli_query($connection, $query);
                        while($row = mysqli_fetch_assoc($result)){
                            $id = $row['newsId'];
                        }
                        ?>
                        <a href="<?php echo "news-open.php?id=$id" ?>">
                            <svg
                            width="30"
                            height="30"
                            viewBox="0 0 24 24"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                            >
                            <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M8 8C8.55228 8 9 8.44772 9 9V15C9 15.5523 8.55228 16 8 16C7.44771 16 7 15.5523 7 15V9C7 8.44772 7.44771 8 8 8ZM16 15.4641L10 12L16 8.5359V15.4641Z"
                            fill="currentColor"
                            />
                            <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M19 3H5C3.89543 3 3 3.89543 3 5V19C3 20.1046 3.89543 21 5 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3ZM5 1C2.79086 1 1 2.79086 1 5V19C1 21.2091 2.79086 23 5 23H19C21.2091 23 23 21.2091 23 19V5C23 2.79086 21.2091 1 19 1H5Z"
                            fill="currentColor"
                            />
                            </svg>
                            <p>Prethodna vest</p>
                        </a>
                    </div>
                    <div class="next">
                        <?php
                            $query = "select * from news where newsId = (select min(newsId) from news where newsId > $newsId)";
                            $result = mysqli_query($connection, $query);
                            while($row = mysqli_fetch_assoc($result)){
                                $id = $row['newsId'];
                            }
                        ?>
                        <a href="<?php echo"news-open.php?id=$id" ?>">
                            <p>Sledeća vest</p>
                            <svg
                            width="30"
                            height="30"
                            viewBox="0 0 24 24"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                            >
                            <path
                            d="M15 9C15 8.44772 15.4477 8 16 8C16.5523 8 17 8.44772 17 9V15C17 15.5523 16.5523 16 16 16C15.4477 16 15 15.5523 15 15V9Z"
                            fill="currentColor"
                            />
                            <path d="M14 12L8 15.4641V8.5359L14 12Z" fill="currentColor" />
                            <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M1 5C1 2.79086 2.79086 1 5 1H19C21.2091 1 23 2.79086 23 5V19C23 21.2091 21.2091 23 19 23H5C2.79086 23 1 21.2091 1 19V5ZM5 3H19C20.1046 3 21 3.89543 21 5V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V5C3 3.89543 3.89543 3 5 3Z"
                            fill="currentColor"
                            />
                        </svg>
                    </a>
                    </div>
                </div>
                <div class="popularNews">
                    <h2 class="mostPop">Najpopularnije vesti</h2>
                    <?php
                        $query = "SELECT count(*) as counter, newsId, news.newsTitle, news.newsImage, news.newsApproved
                        FROM userlikesnews INNER JOIN news
                        USING (newsId)
                        WHERE newsApproved = 'dozvoljena'
                        GROUP by newsId
                        ORDER by counter DESC
                        LIMIT 3";

                        $result = mysqli_query($connection, $query);

                        while($row = mysqli_fetch_assoc($result)){
                            $idNews = $row['newsId'];
                            $title = $row['newsTitle'];
                            $image = $row['newsImage'];
                    ?>
                        <div class="newsBox">
                            <a href="news-open.php?id=<?php echo $idNews?>">
                                <img src="images/<?php echo $image?>" alt="Naslovna slika" class="newsBoxImg">
                            </a>
                            <a href="news-open.php?id=<?php echo $idNews ?>" class="newsBoxTitle">
                                <h3 class="title"><?php echo $title ?></h3>
                            </a>
                        </div>
                    <?php
                        }
                    ?>
                    
                </div>
            </aside>
        </div>
        <hr>
        <section class="comments" id="comments">
            <div class="enterComment">
                <h2>Komentari</h2>
                <form class="userData" action="news-open.php?id=<?php echo $newsId ?>" method="POST">
                    <img src="
                    <?php 
                        if(isset($_SESSION['user_image'])){
                            $image = $_SESSION['user_image'];
                            echo "images/$image";
                        } else{
                            echo "images/placeholderKorisnik.png";
                        }
                    ?>
                    " alt="Profilna slika" width="70px" height="70px">
                <textarea name="comment" id="" cols="10" rows="3" placeholder="Napišite komentar" required></textarea>
                    <input type="submit" value="Pošalji komentar" class="addComment" name="addComment">
                </form>
            </div>
            <hr>
            <div class="enterComment allComments">
                <?php
                    if(isset($_POST['addComment'])){
                        if(isset($_SESSION['user_uid']) && isset($_SESSION['user_image'])){
                            $comment = $_POST['comment'];
                            $comment = mysqli_real_escape_string($connection, $comment);
                            $image = $_SESSION['user_image'];
                            $user = $_SESSION['user_uid'];
    
                            $query = "INSERT INTO `comments`(`commentText`, `commentDateTime`, `commentAuthor`, `commentImage`, `newsId`) VALUES ('$comment',now(),'$user','$image','$newsId')";
    
                            $addComment = mysqli_query($connection, $query);


                            $referer = $_SERVER['HTTP_REFERER'];
                            header("Location: $referer");
                            exit;
                        } else{
                            echo "<script>alert('Morate biti ulogovani da biste komentarisali.');</script>";
                        }
                    }
                ?>
                <?php
                    $query = "select * from comments where newsId = $newsId and commentApproved = 'dozvoljen' ORDER by commentId DESC";
                    $allComments = mysqli_query($connection, $query);
                    
                    while($row = mysqli_fetch_assoc($allComments)){
                        $commentId = $row['commentId'];
                        $commentText = $row['commentText'];
                        $commentDateTime = $row['commentDateTime'];
                        $commentAuthor = $row['commentAuthor'];
                        $commentImage = $row['commentImage'];
                        $commentApproved = $row['commentApproved'];

                        $phpdate = strtotime( $commentDateTime );
                        $commentDateTime = date( 'd-m-Y', $phpdate );
                ?>
                    <div class="userData">
                        <img src="<?php echo "images/$commentImage" ?>" alt="" width="70px" height="70px">
                        <div class="commentData">
                            <div class="authorTime">
                                <h3 class="author"><?php echo $commentAuthor ?></h3>
                                <span class="time"><i><?php echo $commentDateTime ?></i></span>
                            </div>
                            <p class="comment"><?php echo $commentText ?></p>
                        </div>
                    </div>
                <?php  
                }
                ?>
            </div>
        </section>    
    </div>
</section>
<?php include "includes/footer.php"; ?>
<script src="scripts/news-open.js"></script>