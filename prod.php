<?php
  session_start();
  $session_username = $_SESSION[ 'username' ];
  if ( is_null( $session_username ) ) {
    header( 'Location: login.php' );
  }
?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product</title>

    <!-- CSS -->
    <link rel="stylesheet" href="styles/header&footer.css" />
    <link rel="stylesheet" href="styles/prod.css" />
    <!-- CSS -->
    <link rel="stylesheet" href="http://cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
    <link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <!-- 파비콘 -->
    <link rel="shortcut icon" href="./icon/favicon-152.png" />
    <link rel="apple-touch-icon-precomposed" href="./icon/favicon-152.png" />
    <link rel="icon" href="./icon/favicon.ico" />
    <link rel="icon" href="./icon/favicon-16.png" sizes="16x16" />
    <link rel="icon" href="./icon/favicon-32.png" sizes="32x32" />
    <link rel="icon" href="./icon/favicon-48.png" sizes="48x48" />
    <link rel="icon" href="./icon/favicon-64.png" sizes="64x64" />
    <link rel="icon" href="./icon/favicon-128.png" sizes="128x128" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/3858548541.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</head>

<body>

    <!-- header -->
    <div class="container">
        <header>
            <!-- 헤더 왼쪽영역 -->
            <div class="logoImg">
                <a href="main-login-ok.php"><i class="fab fa-foursquare"></i>reedom BIKE</a>
                <!-- <a href="./main.html">
                  <img src="./images/Logo.png" alt="logo"> -->
                </a>
            </div>
            <!-- 헤더 중간영역 -->
            <div class="menu">
                <ul class="menuList">
                    <!-- <li><span>전체메뉴</span></li> -->
                    <li><a href="prod.php">매물</a></li>
                    <!-- <li>게시판</li> -->
                    <a href="map.php"><li>영업지점</li></a>
                </ul>
            </div>
            <!-- 헤더 오른쪽영역 -->
            <div>
                <ul class="rightMenu">
                    <li class="username"><a href="change-password.php"><?php echo $session_username; ?>&nbsp;<span>회원</span></a></li>
                    <li><a href="logout.php">로그아웃</a></li>
                </ul>
            </div>
        </header>
        <div class="toggleBtn"><i class="fas fa-bars"></i></div>

        <!-- contents -->
        <div id="contents-wrap">

            <!-- menu contents -->
            <div id="menu-con">
                <ul class="filter-menu">
                    <li data-target="all"><img src="images/icon/favicon-128.png"> All</li>
                    <li data-target="kawasaki"><img src="images/logos/kawasaki.png"> KAWASAKI</li>
                    <li data-target="ducati"><img src="images/logos/ducati.png"> DUCATI</li>
                    <li data-target="bmw"><img src="images/logos/bmw.jpg" style="background-color: white;"> BMW</li>
                    <li data-target="honda"><img src="images/logos/honda.png"> HONDA</li>
                    <li data-target="yamaha"><img src="images/logos/yamaha.png"> YAMAHA</li>
                </ul>
            </div>

            <!-- item contents -->
            <div id="item-con">
                <ul class="filter-item">
                    <li data-item="kawasaki"><a href="z1000.php"><img src="images/Gawasaki/Gawasaki1.jpg"></a></li>
                    <li data-item="kawasaki"><a href="z400.php"><img src="images/Gawasaki/Gawasaki2.jpg"></a></li>
                    <li data-item="ducati"><a href="mon696.php"><img src="images/Ducati/Ducati1.jpg"></a></li>
                    <li data-item="ducati"><a href="1198.php"><img src='images/Ducati/Ducati2.jpg'></a></li>
                    <li data-item="bmw"><a href="f900.php"><img src="images/BMW/bmw1.jpg"></a></li>
                    <li data-item="bmw"><a href="c650.php"><img src="images/BMW/bmw2.jpg"></a></li>
                    <li data-item="honda"><a href="125r.php"><img src="images/Honda/Honda1.jpg"></a></li>
                    <li data-item="honda"><a href="125t.php"><img src="images/Honda/Honda2.jpg"></a></li>
                    <li data-item="yamaha"><a href="yzf.php"><img src="images/Yamaha/Yamaha1.jpg"></a></li>
                    <li data-item="yamaha"><a href="mtn.php"><img src="images/Yamaha/Yamaha2.jpg"></a></li>
                </ul>
            </div>
        </div>
        <div class="footer">Copyright &copy; FREEDOMBIKE</div>
        <!-- //푸터 -->
        <script src="scripts/prod.js"></script>
</body>

</html>