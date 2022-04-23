<?php 
    if($_SESSION['user_admin'] != 1){
        header("Location: ../index.php");
    }
?>
<body>
    <nav>
        <div class="container">
            <a href="index.php">
                <h2>CMS Admin</h2>
            </a>
            <div class="nav-links">
                <a href="index.php">Admin panel</a>
                <a href="../index.php">Početna</a>
            </div>
        </div>
    </nav>
    <div class="content">
        <div class="menu">
            <ul>
                <a href="news.php">
                    <li>
                        <svg
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                            >
                            <path d="M7 18H17V16H7V18Z" fill="currentColor" />
                            <path d="M17 14H7V12H17V14Z" fill="currentColor" />
                            <path d="M7 10H11V8H7V10Z" fill="currentColor" />
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M6 2C4.34315 2 3 3.34315 3 5V19C3 20.6569 4.34315 22 6 22H18C19.6569 22 21 20.6569 21 19V9C21 5.13401 17.866 2 14 2H6ZM6 4H13V9H19V19C19 19.5523 18.5523 20 18 20H6C5.44772 20 5 19.5523 5 19V5C5 4.44772 5.44772 4 6 4ZM15 4.10002C16.6113 4.4271 17.9413 5.52906 18.584 7H15V4.10002Z"
                                fill="currentColor"
                            />
                        </svg>
                        <p>Pogledaj vesti</p>
                    </li>
                </a>
                <a href="create-news.php">
                    <li>
                        <svg
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                            >
                            <path d="M10 18V16H8V14H10V12H12V14H14V16H12V18H10Z" fill="currentColor" />
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M6 2C4.34315 2 3 3.34315 3 5V19C3 20.6569 4.34315 22 6 22H18C19.6569 22 21 20.6569 21 19V9C21 5.13401 17.866 2 14 2H6ZM6 4H13V9H19V19C19 19.5523 18.5523 20 18 20H6C5.44772 20 5 19.5523 5 19V5C5 4.44772 5.44772 4 6 4ZM15 4.10002C16.6113 4.4271 17.9413 5.52906 18.584 7H15V4.10002Z"
                                fill="currentColor"
                            />
                        </svg>
                        <p>Kreiraj vest</p>
                    </li>
                </a>
                <a href="users.php">
                    <li>
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
                            d="M8 11C10.2091 11 12 9.20914 12 7C12 4.79086 10.2091 3 8 3C5.79086 3 4 4.79086 4 7C4 9.20914 5.79086 11 8 11ZM8 9C9.10457 9 10 8.10457 10 7C10 5.89543 9.10457 5 8 5C6.89543 5 6 5.89543 6 7C6 8.10457 6.89543 9 8 9Z"
                                fill="currentColor"
                                />
                                <path
                                d="M11 14C11.5523 14 12 14.4477 12 15V21H14V15C14 13.3431 12.6569 12 11 12H5C3.34315 12 2 13.3431 2 15V21H4V15C4 14.4477 4.44772 14 5 14H11Z"
                                fill="currentColor"
                                />
                                <path d="M22 11H16V13H22V11Z" fill="currentColor" />
                                <path d="M16 15H22V17H16V15Z" fill="currentColor" />
                                <path d="M22 7H16V9H22V7Z" fill="currentColor" />
                            </svg>
                            <p>Pogledaj korisnike</p>
                        </li>
                    </a>
                    <a href="create-user.php">
                        <li>
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
                            d="M8 11C10.2091 11 12 9.20914 12 7C12 4.79086 10.2091 3 8 3C5.79086 3 4 4.79086 4 7C4 9.20914 5.79086 11 8 11ZM8 9C9.10457 9 10 8.10457 10 7C10 5.89543 9.10457 5 8 5C6.89543 5 6 5.89543 6 7C6 8.10457 6.89543 9 8 9Z"
                            fill="currentColor"
                            />
                            <path
                            d="M11 14C11.5523 14 12 14.4477 12 15V21H14V15C14 13.3431 12.6569 12 11 12H5C3.34315 12 2 13.3431 2 15V21H4V15C4 14.4477 4.44772 14 5 14H11Z"
                            fill="currentColor"
                            />
                            <path d="M18 7H20V9H22V11H20V13H18V11H16V9H18V7Z" fill="currentColor" />
                        </svg>
                        <p>Kreiraj korisnika</p>
                    </li>
                </a>
                <a href="messages.php">
                    <li>
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
                        <p>Pogledaj poruke</p>
                    </li>
                </a>
                <a href="comments.php">
                    <li>
                        <svg
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                            >
                            <path d="M13 7H7V5H13V7Z" fill="currentColor" />
                            <path d="M13 11H7V9H13V11Z" fill="currentColor" />
                            <path d="M7 15H13V13H7V15Z" fill="currentColor" />
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M3 19V1H17V5H21V23H7V19H3ZM15 17V3H5V17H15ZM17 7V19H9V21H19V7H17Z"
                                fill="currentColor"
                            />
                        </svg>
                        <p>Pogledaj komentare</p>
                    </li>
                </a>
                <a href="likes.php">
                    <li>
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
                                d="M12.0122 5.57169L10.9252 4.48469C8.77734 2.33681 5.29493 2.33681 3.14705 4.48469C0.999162 6.63258 0.999162 10.115 3.14705 12.2629L11.9859 21.1017L11.9877 21.0999L12.014 21.1262L20.8528 12.2874C23.0007 10.1395 23.0007 6.65711 20.8528 4.50923C18.705 2.36134 15.2226 2.36134 13.0747 4.50923L12.0122 5.57169ZM11.9877 18.2715L16.9239 13.3352L18.3747 11.9342L18.3762 11.9356L19.4386 10.8732C20.8055 9.50635 20.8055 7.29028 19.4386 5.92344C18.0718 4.55661 15.8557 4.55661 14.4889 5.92344L12.0133 8.39904L12.006 8.3918L12.005 8.39287L9.51101 5.89891C8.14417 4.53207 5.92809 4.53207 4.56126 5.89891C3.19442 7.26574 3.19442 9.48182 4.56126 10.8487L7.10068 13.3881L7.10248 13.3863L11.9877 18.2715Z"
                                fill="currentColor"
                            />
                        </svg>
                        <p>Pogledaj lajkove</p>
                    </li>
                </a>
            </ul>
        </div>