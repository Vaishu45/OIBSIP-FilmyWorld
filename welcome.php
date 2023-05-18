<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Boxicons  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
</head>

<body>
    <header>
        <a href="#" class="logo">
            <i class='bx bx-movie-play'></i><span>Filmy</span>World
        </a>
        <!-- <div class="bx bx-menu" id="menu-icon"></div> -->

        <!-- Menu  -->

        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="genre.html">Genre</a></li>
            <li><a href="about.html">About</a></li>
        </ul>
        <!-- <a href="login.php" class="btn">Log In</a> -->
        <a href="logout.php" class="btn"><?php echo "Welcome " . $_SESSION['username'] ?></a>
    </header>

    <!-- home  -->

    <section class="home swiper" id="home">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide container">
                    <img src="img/home1.jpg" alt="">
                    <!-- <div class="home-text">
                        <span>NetFlix</span>
                        <h1>The Haunting Of Hill House</h1>
                        <a href="https://www.youtube.com/watch?v=3eqxXqJDmcY" class="btn">Watch Trailer</a>
                        <a href="https://www.netflix.com/in/title/80189221?source=35" class="play">
                            <i class='bx bx-play-circle'></i>
                        </a>
                    </div> -->
                </div>
                <!-- Box 2  -->
                <div class="swiper-slide container">
                    <img src="img/home2.jpg" alt="">
                    <!-- <div class="home-text">
                        <span>NetFlix</span>
                        <h1>The Haunting of Bly Manor</h1>
                        <a href="https://www.youtube.com/watch?v=cxeiY2W03Mc" class="btn">Watch Trailer</a>
                        <a href="https://www.netflix.com/in/title/81237854?source=35" class="play">
                            <i class='bx bx-play-circle'></i>
                        </a>
                    </div> -->
                </div>
                <!-- Box 3 -->
                <div class="swiper-slide container">
                    <img src="img/home3.jpg" alt="">
                    <!-- <div class="home-text">
                        <span>Marvel Universe</span>
                        <h1>Spider-Man: <br> No Way Home</h1>
                        <a href="https://www.youtube.com/watch?v=JfVOs4VSpmA" class="btn">Watch Trailer</a>
                        <a href="https://www.zee5.com/movies/details/spider-man-no-way-home/0-0-1z5129922" class="play">
                            <i class='bx bx-play-circle'></i>
                        </a>
                    </div> -->
                </div>
            </div>

            <div class="swiper-pagination"></div>
        </div>

    </section>

    <!-- Movies  -->
    <section class="movies" id="movies">
        <h2 class="heading">All Genre</h2>
        <!-- Movies Container  -->
        <div class="movies-container">
            <!-- box 1  -->
            <div class="box">
                <div class="box-img">
                    <a href="action1.html"><img src="img/action1.jpg" alt=""></a>
                </div>
                <h3>Avengers: Infinity War</h3>
                <span>2h 29m | Action</span>
            </div>
            <!-- box 2  -->
            <div class="box">
                <div class="box-img">
                    <a href="action2.html"> <img src="img/action2.jpg" alt=""></a>
                </div>
                <h3>Avengers: Endgame</h3>
                <span>3h 2m | Action</span>
            </div>
            <!-- box 3  -->
            <div class="box">
                <div class="box-img">
                    <a href="horror5.html"><img src="img/horror5.jpg" alt=""></a>
                </div>
                <h3>The Nun</h3>
                <span>1h 36m | Horror</span>
            </div>
            <!-- box 4  -->
            <div class="box">
                <div class="box-img">
                    <a href="horror7.html"> <img src="img/horror7.jpg" alt=""></a>
                </div>
                <h3>The Cabin In The Woods</h3>
                <span>120 min | Horror</span>
            </div>
            <!-- box 5  -->
            <div class="box">
                <div class="box-img">
                    <a href="thriller2.html"><img src="img/thriller2.jpeg" alt=""></a>
                </div>
                <h3>The Call</h3>
                <span>1h 52m | Thriller</span>
            </div>
            <!-- box 6  -->
            <div class="box">
                <div class="box-img">
                    <a href="thriller6.html"><img src="img/thriller6.jpg" alt=""></a>
                </div>
                <h3>Malignant</h3>
                <span>1h 51m | Thriller</span>
            </div>
            <!-- box 7  -->
            <div class="box">
                <div class="box-img">
                    <a href="adventure6.html"><img src="img/adventure6.jpg" alt=""></a>
                </div>
                <h3>Godzilla vs. Kong</h3>
                <span>1h 53m | Adventure</span>
            </div>
            <!-- box 8  -->
            <div class="box">
                <div class="box-img">
                    <a href="adventure5.html"><img src="img/adventure5.jpeg" alt=""></a>
                </div>
                <h3>Godzilla</h3>
                <span>2h 3m | Adventure</span>
            </div>
            <!-- box 9  -->
            <div class="box">
                <div class="box-img">
                    <a href="romance4.html"> <img src="img/romance4.jpg" alt=""></a>
                </div>
                <h3>The Fault In Our Stars</h3>
                <span>2h 6m | Romance</span>
            </div>
            <!-- box 10  -->
            <div class="box">
                <div class="box-img">
                    <a href="romance8.html"><img src="img/romance8.jpg" alt=""></a>
                </div>
                <h3>Along For The Ride</h3>
                <span>1h 47m | Romance</span>
            </div>

        </div>
    </section>



    <!-- Footer  -->
    <section class="footer">
        <a href="#" class="logo">
            <i class='bx bx-movie-play'></i><span>FilmyWorld</span>
        </a>
        <div class="social">
            <a href=""><i class='bx bxl-facebook'></i></a>
            <a href=""><i class='bx bxl-twitter'></i></a>
            <a href=""><i class='bx bxl-instagram'></i></a>

        </div>
    </section>
    <!-- COPYRIGHT  -->
    <div class="copyright">
        <p>&#169; FilmyWorld All Rights Reserved</p>
    </div>







































    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>

</body>

</html>