<!-- Page header & nav -->
    <?php include "includes/init.php" ?>
    <?php include "includes/header.php" ?>
    <?php include "includes/navigation.php" ?>
    <!-- Hero section -->
    <section class="hero-section">
      <img src="images/backgroundBlank.svg" alt="" />
    </section>
    <!-- Page Content -->
    <!-- ------------ -->
    <!-- Latest News -->
    <section class="latest-news">
      <div class="container">
        <h1 class="news-title">Najnovije vesti</h1>
        <div class="boxes">
          <?php
            $query = "SELECT * 
            FROM news 
            where newsApproved = 'dozvoljena'
            ORDER by newsId DESC 
            limit 3";
            $showNewsQuery = mysqli_query($connection, $query);

            while($row = mysqli_fetch_assoc($showNewsQuery)){
              $newsId = $row['newsId'];
              $newsTitle = $row['newsTitle'];
              $newsContent = $row['newsContent'];
              $newsDate = $row['newsDate'];
              $newsImage = $row['newsImage'];
              $newDate = date("d-m-Y", strtotime($newsDate));
              $newsContentEntry = $row['newsContentEntry'];
          ?>
            <div class="box">
              <a href="news-open.php?id=<?php echo $newsId ?>">
                <img src="images/<?php echo $newsImage ?>" alt="Naslovna fotografija" />
                <div class="boxContent">
                  <h2><?php echo $newsTitle ?></h2>
                    <p>
                      <?php echo $newsContentEntry?>
                    </p>
                  <span><?php echo $newDate ?></span>
                </div> 
              </a>
            </div>
          <?php  } ?>
        </div>
        <div class="findMore">
          <a href="news.php"><button class="allNews">
              <svg
                class="allNewsIcon"
                width="50"
                height="50"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path d="M7 7H9V9H7V7Z" fill="currentColor" />
                <path d="M11 7H13V9H11V7Z" fill="currentColor" />
                <path d="M17 7H15V9H17V7Z" fill="currentColor" />
                <path d="M7 11H9V13H7V11Z" fill="currentColor" />
                <path d="M13 11H11V13H13V11Z" fill="currentColor" />
                <path d="M15 11H17V13H15V11Z" fill="currentColor" />
                <path d="M9 15H7V17H9V15Z" fill="currentColor" />
                <path d="M11 15H13V17H11V15Z" fill="currentColor" />
                <path d="M17 15H15V17H17V15Z" fill="currentColor" />
              </svg>
            </button></a>
        </div>
      </div>
    </section>
    <!-- Cards -->
    <!-- ---------- -->
    <div class="cards-wrapper">
      <!-- First card-->
      <section class="cards">
        <div class="container">
          <div class="card">
            <img src="images/kutakzaosmake.png" alt="Kutak za osmake" class="kutak">
            <img src="images/kutakzaosmakevertikalni.png" alt="Kutak za osmake" class="kutak-vertical">
            <a href="#" class="moreBtn kutakBtn">Saznaj više</a>
          </div>
        </div>
      </section>
      <!-- Second card -->
      <section class="cards">
        <div class="container">
          <div class="card">
            <img src="images/borinidanikarticagotova.jpg" alt="Borini dani" class="kutak" />
            <img src="images/borinidanivertikalna.jpg" alt="Borini dani" class="kutak-vertical" />
            <a href="borini-dani.php" class="moreBtn bdBtn">Saznaj više</a>
          </div>
        </div>
      </section>
    </div>
    <!-- Footer -->
    <?php include "includes/footer.php";?>