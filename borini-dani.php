<?php include "includes/init.php" ?>
<?php include "includes/header.php" ?>
<?php include "includes/navigation.php" ?>
<div class="boriniDani">
    <div class="container">
        <ul class="boriniDaniMenu" id="menu">
            <li id="video" class="menu-item ">video</li>
            <li id="activities" class="menu-item">aktivnosti</li>
            <li id="news" class="menu-item">novosti</li>
        </ul>
        <div class="boriniDaniContent">
            <div class="iframe-container" id="video-container">
                <div class="video-content">
                    <div class="video-titles">
                        <h2 class="videoTitle">Borini dani</h2>
                        <h3>Gimnazija ,,Bora Stanković" Niš</h3>
                    </div>    
                    <iframe class="video" width="560" height="315" src="https://www.youtube.com/embed/MlnlSaPvn44" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="activities" id="activities-container">
                <h1 class="activities-title">
                    Raspored aktivnosti
                </h1>
                <div class="days">
                    <div class="oneDay">
                        <h2 class="daily-title">Ponedeljak</h2>
                        <ul class="daily-act">
                            <h4 class="date">11.4.</h4>
                            <li class="non-display">Turnir u fudbalu</li>
                            <li class="non-display">Dan IT</li>
                            <li class="non-display">Glasanje za profesora godine</li>
                            <li class="non-display">Svečana akademija</li>
                        </ul>
                    </div>
                    <div class="oneDay">
                        <h2 class="daily-title">Utorak</h2>
                        <ul class="daily-act">
                            <h4 class="date">12.4.</h4>
                            <li class="non-display">Dan nauke</li>
                            <li class="non-display">Otvorena vrata</li>
                            <li class="non-display">Dan jezika, kulture</li>
                            <li class="non-display">Dan književnosti</li>
                        </ul>
                    </div>
                    <div class="oneDay">
                        <h2 class="daily-title">Sreda</h2>
                        <ul class="daily-act">
                            <h4 class="date">13.4.</h4>
                            <li class="non-display">Igre bez granica</li>
                            <li class="non-display">Maskenbal</li>
                            <li class="non-display">Turnir u odbojci</li>
                        </ul>
                    </div>
                    <div class="oneDay">
                        <h2 class="daily-title">Četvrtak</h2>
                        <ul class="daily-act">
                            <h4 class="date">14.4.</h4>
                            <li class="non-display">Turnir u basketu</li>
                            <li class="non-display">Borovizija</li>
                            <li class="non-display">Žurka</li>
                        </ul>
                    </div>
                    <div class="oneDay">
                        <h2 class="daily-title">Petak</h2>
                        <ul class="daily-act">
                            <h4 class="date">15.4.</h4>
                            <li class="non-display">Boranijada</li>
                            <li class="non-display">Borino pero</li>
                            <li class="non-display">Izbor najboljeg profesora</li>
                            <li class="non-display">Zatvaranje</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="news" id="news-container">
                <h1 class="news-title">Novosti</h1>
                <div class="boxes">
                <?php
                    $query = "SELECT * 
                    FROM news 
                    where newsApproved = 'dozvoljena' and newsTags LIKE ('%borini dani%')
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
                            <?php echo $newsContentEntry ?>
                            </p>
                        <span><?php echo $newDate ?></span>
                        </div> 
                    </a>
                    </div>
                <?php  } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "includes/footer.php";?>
<script src="scripts/borini-dani.js"></script>
