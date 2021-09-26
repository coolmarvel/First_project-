<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FreedomBIKE</title>

    <link rel="stylesheet" href="http://cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
    <link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="./styles/header&footer.css">
    <link rel="stylesheet" href="./styles/main.css">

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
    <!-- 팝업창 -->
    <div class="notice"><img src="./images/poster.jpg" alt="">
        <button class="closeW" type="button">일주일간 띄우지 않기</button>
        <button class="close" type="button">닫기</button>
    </div>
    <div class="container">
        <header>
            <!-- 헤더 왼쪽영역 -->
            <div class="logoImg">
                <a href="main.php"><i class="fab fa-foursquare"></i>reedom BIKE</a>
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
                    <li><a href="login.php">log in</a></li>
                    <li><a href="register.php">join us</a></li>
                    <li><i class="fab fa-facebook-f"></i></li>
                    <li></i><i class="fab fa-twitter"></i></li>
                </ul>
            </div>
        </header>
        <div class="toggleBtn"><i class="fas fa-bars"></i></div>





        <main>
            <!-- 메인 상단영역 -->
            <div class="mainTop">
                <!-- 왼쪽 슬라이드 이미지 -->
                <div class="item leftImg">
                    <div><img src="./images/slide1.jpg" alt=""></div>
                    <div><img src="./images/slide2.jpg" alt=""></div>
                    <div><img src="./images/slide3.jpg" alt=""></div>
                    <div><img src="./images/slide4.jpg" alt=""></div>
                </div>
                <!-- 오른쪽 상단 이미지 -->
                <div class="item rightTop">
                    <iframe src="https://www.youtube.com/embed/7wHEMIEkWvM" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <!-- 오른쪽 하단 이미지 -->
                <div class="item rightBottom">
                    <a href="https://www.motorcycleracer.com/">
                        <img id="sideImg" src="./images/Motorcycle.jpg">
                        <div class="coverTitle">MAGAZINE</div>
                    </a>

                </div>
            </div>



            <!-- 메인 나머지 영역 -->
            <div class="mainMid">
                <!-- 제목 -->
                <div class="title">BRAND</div>
                <!-- 브랜드로고 -->
                <div class="brand">
                    <div id="bl1" class="brandLogo">
                        <button type="button"><img id="kawasaki" src="./images/kawasaki.png"></button>
                    </div>
                    <div id="bl2" class="brandLogo">
                        <button type="button"><img id="ducati" src="./images/ducati.png"></button>
                    </div>
                    <div id="bl3" class="brandLogo">
                        <button type="button"><img id="bmw" src="./images/bmw.png"></button>
                    </div>
                    <div id="bl4" class="brandLogo">
                        <button type="button"><img id="honda" src="./images/honda.png"></button>
                    </div>
                    <div id="bl5" class="brandLogo">
                        <button type="button"><img id="yamaha" src="./images/yamaha.png"></button>
                    </div>
                </div>
                <!-- 브랜드 로고 클릭시 나타나는 영역 -->
                <div class="brandContents">
                    <div id="bi1" class="brandIntro">
                        <img src="./images/kawasaki_bg.jpg" alt="">
                        <div class="cover"></div>
                        <div class="brandContent">
                            <h1>KAWASAKI HEAVY INDUSTRIES,</h1>
                            <p>Kawasaki Aircraft는 처음에 Meguro 라는 이름으로 오토바이를 제조했으며, 파트너십을 맺고 있던 병든 오토바이 제조업체인 Meguro
                                Manufacturing을 인수했습니다. 이것은 결국 Kawasaki Motor Sales가 되었습니다. 일부 초기 오토바이는 연료 탱크에
                                "Kawasaki Aircraft"라는 엠블럼을 표시합니다.</p>
                        </div>
                    </div>
                    <div id="bi2" class="brandIntro">
                        <img src="./images/ducati_bg.jpg" alt="">
                        <div class="cover"></div>
                        <div class="brandContent">
                            <h1>Ducati Motor Holding S.p.A.</h1>
                            <p>두카티는 이탈리아의 볼로냐 (Bologna)에 본사를 두고 있는 이탈리아의 대표적인 고성능 모터사이클
                                (혹은 스포츠 바이크) 제조업체입니다. 경주용과 상업용 모터사이클 모두를 제작하며 2012년 4월 폭스바겐 그룹의 자회사 아우디에 의해 합병되었습니다.</p>
                        </div>
                    </div>
                    <div id="bi3" class="brandIntro">
                        <img src="./images/bmw_bg.webp" alt="">
                        <div class="brandContent">
                            <h1>BMW Motorrad,</h1>
                            <p>BMW Motorrad 는 기업 및 브랜드 개발 부서의 일부인 BMW 의 오토바이 브랜드입니다. 이 회사는 20세기 초와 제1차 세계 대전을 통해 항공기 엔진
                                제조업체 로 시작했습니다 . BMW는 1923년 에 플랫 트윈 박서 엔진이 장착된 최초의 오토바이인 R32를 제조했습니다 . BMW Motorrad는 여전히
                                플랫 트윈 박서 구성을 사용하지만 이제는 다양한 엔진 구성으로 오토바이를 제조합니다. </p>
                        </div>
                    </div>
                    <div id="bi4" class="brandIntro">
                        <img src="./images/honda_bg.jpg" alt="">
                        <div class="brandContent">
                            <h1>HONDA MOTOR,</h1>
                            <p>혼다 기연공업 주식회사는 일본 굴지의 자동차와 모터사이클
                                제작 회사입니다. 일본 엔지니어인 혼다 소이치로 회장이 1948년에 시즈오카현 하마마쓰시에서 창립했습니다.</p>
                        </div>
                    </div>
                    <div id="bi5" class="brandIntro">
                        <img src="./images/yamaha_bg.jpg" alt="">
                        <div class="brandContent">
                            <h1>YAMAHA MOTOR,</h1>
                            <p>야마하 모터 주식회사는 일본의 모터사이클 및 모터보트 엔진 등의 수송용 기기를 제조하는 회사입니다. 제2차 세계 대전 이후 일본 악기 제조 주식회사(현 야마하)
                                내에 기계 사업부가 설치되어 1954년 모터사이클 첫 제품인 125cc YA-1을 내놓았고, 이듬해인 1955년 7월 1일 자회사인 야마하 발동기로
                                분사하였습니다.</p>
                        </div>
                    </div>
                </div>

                <div id="banner">
                    <광고배너 (양식만)>
                        <br>광고 수익의 일부는 성현이한테 갔으면 좋겠어요.
                        <!-- <div class="banner square clearfix">
                            <a href="./images/light1_s.jpg"><img src="./images/light01.jpg" alt="이미지" /><em>광고1</em></a>
                            <a href="images/light02_s.jpg"><img src="images/light02.jpg" alt="이미지" /><em>광고2</em></a>
                            <a href="images/light03_s.jpg"><img src="images/light03.jpg" alt="이미지" /><em>광고3</em></a>
                            <a href="images/light04_s.jpg"><img src="images/light04.jpg" alt="이미지" /><em>광고4</em< /a>
                                    <a href="images/light05_s.jpg"><img src="images/light05.jpg"
                                            alt="이미지" /><em>광고5</em></a>
                                    <a href="images/light06_s.jpg"><img src="images/light06.jpg"
                                            alt="이미지" /><em>광고6</em></a>
                                    <a href="images/light07_s.jpg"><img src="images/light07.jpg"
                                            alt="이미지" /><em>광고7</em></a>
                                    <a href="images/light08_s.jpg"><img src="images/light08.jpg"
                                            alt="이미지" /><em>광고8</em></a>
                                    <a href="images/light09_s.jpg"><img src="images/light09.jpg"
                                            alt="이미지" /><em>광고9</em></a>
                                    <a href="images/light10_s.jpg"><img src="images/light10.jpg"
                                            alt="이미지" /><em>광고10</em></a>
                        </div> -->
                        <div class=" banner clearfix">
                            <a href="./ban/1.gif"><img src="./ban/1.gif" alt=""></a>
                            <a href="./ban/2.gif"><img src="./ban/2.gif" alt=""></a>
                            <a href="./ban/3.gif"><img src="./ban/3.gif" alt=""></a>
                            <a href="./ban/4.gif"><img src="./ban/4.gif" alt=""></a>
                            <a href="./ban/5.gif"><img src="./ban/5.gif" alt=""></a>
                            <a href="./ban/6.gif"><img src="./ban/6.gif" alt=""></a>
                            <a href="./ban/7.gif"><img src="./ban/7.gif" alt=""></a>
                            <!-- <a href="./ban/8.gif"><img src="./ban/8.gif" alt=""></a> -->
                            <a href="./ban/9.gif"><img src="./ban/9.gif" alt=""></a>
                            <a href="./ban/10.gif"><img src="./ban/10.gif" alt=""></a>
                            <!-- <a href="./ban/111.gif"><img src="./ban11.gif" alt=""></a> -->
                            <a href="./ban/12.gif"><img src="./ban/12.gif" alt=""></a>
                        </div>
                </div>
                <!-- //광고 -->
            </div>
        </main>
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="footer">
                        <ul>
                            <li><a href="#">사이트 도움말</a></li>
                            <li><a href="#">사이트 이용약관</a></li>
                            <li><a href="#">사이트 운영원칙</a></li>
                            <li>
                                <a href="#"><strong>개인정보취급방침</strong></a>
                            </li>
                            <li><a href="#">책임의 한계와 법적고지</a></li>
                            <li><a href="#">게시중단요청서비스</a></li>
                            <li><a href="#">고객센터</a></li>
                        </ul>
                        <ul>
                            <li><a herf="#">주소 :경일게임아카데미</a></li>
                        </ul>
                        <ul class="footer-font-color">
                            Copyright ©
                            <a href="#"><strong>Freedom Bike</strong></a>
                            All Rights Reserved.
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- //푸터 -->
    </div>
    <script src="./scripts/main.js"></script>
</body>

</html>