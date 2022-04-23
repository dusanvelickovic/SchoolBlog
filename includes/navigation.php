<header>
    <div class="container">
        <div class="header_content">
            <span class="navbar_menu">
                <a href="#" class="navbar_a"> <i class="gg-menu-left-alt"></i></a>
            </span>

            <ul class="navbar">

                <li class="navbar_li">
                    <a href="index.php" class="navbar_a">Početna</a>
                </li>
                <li class="navbar_li">
                    <a href="news.php" class="navbar_a">Novosti</a>
                </li>
                <li class="navbar_li">
                    <a href="#" class="navbar_a">Upis</a>
                    <!-- DROPDOWN -->
                    <!-- <ul class="dropdown">
                        <li class="dropdown_li">
                            <a href="#" class="dropdown_a">Upis</a>
                        </li>
                        <li class="dropdown_li">
                            <a href="#" class="dropdown_a">Pripremna<br />nastava</a>
                        </li>
                        <li class="dropdown_li">
                            <a href="#" class="dropdown_a">Poeni</a>
                        </li>
                        <li class="dropdown_li">
                            <a href="#" class="dropdown_a">Smerovi</a>
                        </li>
                    </ul> -->
                    <!-- KRAJ DROPDOWN-A -->
                </li>
                <li class="navbar_li">
                    <a href="borini-dani.php" class="navbar_a">Borini dani</a>
                </li>
                <li class="navbar_li">
                    <a href="#" class="navbar_a">O Nama</a>
                    <!-- DROPDOWN -->
                    <ul class="dropdown">
                        <li class="dropdown_li">
                            <a href="#" class="dropdown_a">Istorijat</a>
                        </li>
                        <li class="dropdown_li">
                            <a href="#" class="dropdown_a">Predstavnici parlamenta</a>
                        </li>
                        <li class="dropdown_li">
                            <a href="#" class="dropdown_a">Radna tela</a>
                        </li>
                    </ul>
                    <!-- KRAJ DROPDOWN-A -->
                </li>
                <li class="navbar_li">
                    <a href="#" class="navbar_a">Informacije</a>
                    <ul class="dropdown">
                        <li class="dropdown_li">
                            <a href="info.php" class="dropdown_a">Školski kalendar</a>
                        </li>
                        <li class="dropdown_li">
                            <a href="info.php" class="dropdown_a">Raspored zvonjenja</a>
                        </li>
                    </ul>
                </li>
                <li class="navbar_li">
                    <a href="contact.php" class="navbar_a">Kontakt</a>
                </li>
        </div>

        <!-- ADMIN -->
        <?php
    if (isset($_SESSION['user_uid']) && $_SESSION['user_admin'] == 1) {
      echo "<span class='login-btn admin'><a href='admin/index.php'>
              <svg
                  width='30'
                  height='30'
                  viewBox='0 0 24 24'
                  fill='none'
                  xmlns='http://www.w3.org/2000/svg'
                >
                  <path
                    fill-rule='evenodd'
                    clip-rule='evenodd'
                    d='M17 5.5H20C21.1046 5.5 22 6.39543 22 7.5V19.5C22 20.6046 21.1046 21.5 20 21.5H4C2.89543 21.5 2 20.6046 2 19.5V7.5C2 6.39543 2.89543 5.5 4 5.5H7C7 3.84315 8.34315 2.5 10 2.5H14C15.6569 2.5 17 3.84315 17 5.5ZM14 4.5H10C9.44772 4.5 9 4.94772 9 5.5H15C15 4.94772 14.5523 4.5 14 4.5ZM20 7.5H4V9.5H20V7.5ZM4 19.5V11.5H7V13.5H11V11.5H13V13.5H17V11.5H20V19.5H4Z'
                    fill='currentColor'
                  />
                </svg>
              </a></span>";
    ?>
        <!-- ODJAVA -->
        <span class="login-btn">
            <a href="logout.php">
                <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13 4.00894C13.0002 3.45665 12.5527 3.00876 12.0004 3.00854C11.4481 3.00833 11.0002 3.45587 11 4.00815L10.9968 12.0116C10.9966 12.5639 11.4442 13.0118 11.9965 13.012C12.5487 13.0122 12.9966 12.5647 12.9968 12.0124L13 4.00894Z"
                        fill="currentColor" />
                    <path
                        d="M4 12.9917C4 10.7826 4.89541 8.7826 6.34308 7.33488L7.7573 8.7491C6.67155 9.83488 6 11.3349 6 12.9917C6 16.3054 8.68629 18.9917 12 18.9917C15.3137 18.9917 18 16.3054 18 12.9917C18 11.3348 17.3284 9.83482 16.2426 8.74903L17.6568 7.33481C19.1046 8.78253 20 10.7825 20 12.9917C20 17.41 16.4183 20.9917 12 20.9917C7.58172 20.9917 4 17.41 4 12.9917Z"
                        fill="currentColor" />
                </svg>
            </a>
        </span>
        <?php
    } else if (isset($_SESSION['user_uid'])) {
    ?>
        <span class="login-btn">
            <a href="logout.php">
                <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13 4.00894C13.0002 3.45665 12.5527 3.00876 12.0004 3.00854C11.4481 3.00833 11.0002 3.45587 11 4.00815L10.9968 12.0116C10.9966 12.5639 11.4442 13.0118 11.9965 13.012C12.5487 13.0122 12.9966 12.5647 12.9968 12.0124L13 4.00894Z"
                        fill="currentColor" />
                    <path
                        d="M4 12.9917C4 10.7826 4.89541 8.7826 6.34308 7.33488L7.7573 8.7491C6.67155 9.83488 6 11.3349 6 12.9917C6 16.3054 8.68629 18.9917 12 18.9917C15.3137 18.9917 18 16.3054 18 12.9917C18 11.3348 17.3284 9.83482 16.2426 8.74903L17.6568 7.33481C19.1046 8.78253 20 10.7825 20 12.9917C20 17.41 16.4183 20.9917 12 20.9917C7.58172 20.9917 4 17.41 4 12.9917Z"
                        fill="currentColor" />
                </svg>
            </a>
        </span>
        <?php
    } else {
    ?>
        <!-- PRIJAVA -->
        <span class="login-btn">
            <a href="login.php">
                <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7ZM14 7C14 8.10457 13.1046 9 12 9C10.8954 9 10 8.10457 10 7C10 5.89543 10.8954 5 12 5C13.1046 5 14 5.89543 14 7Z"
                        fill="currentColor" />
                    <path
                        d="M16 15C16 14.4477 15.5523 14 15 14H9C8.44772 14 8 14.4477 8 15V21H6V15C6 13.3431 7.34315 12 9 12H15C16.6569 12 18 13.3431 18 15V21H16V15Z"
                        fill="currentColor" />
                </svg>
            </a>
        </span>
        <?php } ?>
        </ul>
    </div>
</header>