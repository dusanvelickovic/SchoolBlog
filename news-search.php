<?php include "includes/init.php";?>
<?php include "includes/header.php";?>
<?php include "includes/navigation.php";?>
<div class="container">    
    <form action="news-search.php" method="GET">
        <div class="news-search">
        <input type="text" name="search" class="search-bar" placeholder="Pretraži novosti">
        <button type="submit" class="search-btn" name="submit-search">
        <svg
        width="24"
        height="24"
        viewBox="0 0 24 24"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
        >
        <path
        fill-rule="evenodd"
        clip-rule="evenodd"
        d="M18.319 14.4326C20.7628 11.2941 20.542 6.75347 17.6569 3.86829C14.5327 0.744098 9.46734 0.744098 6.34315 3.86829C3.21895 6.99249 3.21895 12.0578 6.34315 15.182C9.22833 18.0672 13.769 18.2879 16.9075 15.8442C16.921 15.8595 16.9351 15.8745 16.9497 15.8891L21.1924 20.1317C21.5829 20.5223 22.2161 20.5223 22.6066 20.1317C22.9971 19.7412 22.9971 19.1081 22.6066 18.7175L18.364 14.4749C18.3493 14.4603 18.3343 14.4462 18.319 14.4326ZM16.2426 5.28251C18.5858 7.62565 18.5858 11.4246 16.2426 13.7678C13.8995 16.1109 10.1005 16.1109 7.75736 13.7678C5.41421 11.4246 5.41421 7.62565 7.75736 5.28251C10.1005 2.93936 13.8995 2.93936 16.2426 5.28251Z"
        fill="currentColor"
            />
        </svg></button>
        </div>
    </form>
    <hr>
    <div class="search-results">
    <?php
        if(isset($_GET['submit-search'])){
            $tag = $_GET['search'];
            $tag = mysqli_real_escape_string($connection, $tag);
            if(!$tag){
                echo "<h1>Nema rezultata.</h1>";
            } else {
            $query = "select * from news where newsTags LIKE '%$tag%' order by newsId desc";
            $searchQuery = mysqli_query($connection, $query);

            $count = mysqli_num_rows($searchQuery);
            if($count == 0){
                echo "<h1>Nema rezultata.</h1>";
            } else{

            while($row = mysqli_fetch_assoc($searchQuery)){
                $newsId = $row['newsId'];
                $newsImage = $row['newsImage'];
                $newsTitle = $row['newsTitle'];
                $newsContent = $row['newsContent'];
                $newsDate = $row['newsDate'];
                $newsContentEntry = $row['newsContentEntry'];
                $newDate = date("d-m-Y", strtotime($newsDate));
        ?>
        <div class="result-box">
            <a  href="news-open.php?id=<?php echo $newsId ?>" class="img-link">
                <img src="images/<?php echo $newsImage ?>" alt="Naslovna fotografija">
            </a>
            <div class="result-content">
                <a href="news-open.php?id=<?php echo $newsId ?>">
                    <h2><?php echo $newsTitle ?></h2>
                </a>
                <a href="news-open.php?id=<?php echo $newsId ?>">
                    <p><?php echo substr($newsContentEntry,0,350) . "..." ?></p>
                </a>
                <a href="news-open.php?id=<?php echo $newsId ?>">
                    <span><?php echo $newDate ?></span>
                </a>
            </div>
        </div>
        <?php } } } }?>      
    </div>
</div>
<?php include "includes/footer.php";?>