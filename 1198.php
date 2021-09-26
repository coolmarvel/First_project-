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
    <title>1198</title>
    <!-- CSS -->
    <link rel="stylesheet" href="styles/header&footer.css" />
    <link rel="stylesheet" href="styles/prod-desc.css" />
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
    <!-- 아임포트 결제 cdn 추가 -->
    <script type="text/javascript" src="https://cdn.iamport.kr/js/iamport.payment-1.1.5.js"></script>
    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js" ></script>
</head>

<body>
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
                    <li class="username"><a href=change-password.php"><?php echo $session_username; ?>&nbsp;<span>회원</span></a></li>
                    <li><a href="logout.php">로그아웃</a></li>
                </ul>
            </div>
        </header>
        <div class="toggleBtn"><i class="fas fa-bars"></i></div>

        <!--제품이미지-->
        <div id="contents-wrap">
            <div id="prod-desc-container">
                <div class="prod-container">
                    <div class="prod-img-box">
                        <div class="slides fade">
                            <img src="images/Ducati/Ducati2.jpg" style="width: 100%" />
                        </div>
                        <div class="slides fade">
                            <img src="images/Ducati/Ducati2-front.jpg" style="width: 100%" />
                        </div>
                        <div class="slides fade">
                            <img src="images/Ducati/Ducati2-left.jpg" style="width: 100%" />
                        </div>
                        <div class="slides fade">
                            <img src="images/Ducati/Ducati2-right.jpg" style="width: 100%" />
                        </div>
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                    <div class="prod-desc-box">

                        <!--제품정보-->
                        <h2 style="text-align: center; color: red">DUCATI 1196s</h2>
                        <div class="prod-desc-box-conts">
                            <dl>
                                <div class="dl-box">
                                    <p>
                                        <dt>등록일 :</dt>
                                        <dd>2021년 08월 30일</dd>
                                    </p>
                                </div>
                                <div class="dl-box">
                                    <p>
                                        <dt>제조사 :</dt>
                                        <dd>DUCATI</dd>
                                    </p>
                                </div>
                                <div class="dl-box">
                                    <p>
                                        <dt>모델명 :</dt>
                                        <dd>1198 S</dd>
                                    </p>
                                </div>
                                <div class="dl-box">
                                    <p>
                                        <dt>년식 / 등록년식 :</dt>
                                        <dd>2015년식 / 2015년식</dd>
                                    </p>
                                </div>
                                <div class="dl-box">
                                    <p>
                                        <dt>주행거리 :</dt>
                                        <dd>28,000km</dd>
                                    </p>
                                </div>
                                <div class="dl-box">
                                    <p>
                                        <dt>판매지역 :</dt>
                                        <dd>서울 올림픽로</dd>
                                    </p>
                                </div>
                                <div class="dl-box">
                                    <p>
                                        <dt>매물가 :</dt>
                                        <dd>1,680만원<sub style="color: lightgray">(할부가능)</sub></dd>
                                    </p>
                                </div>
                            </dl>
                        </div>
                    </div>
                    <div class="prod-seller-box">

                        <!--판매자정보 및 가격 구매버튼-->
                        <div class="prod-seller-conts">
                            --판매자정보--
                            <table>
                                <tbody>
                                    <tr>
                                        <th>아이디</th>
                                        <td>kyungil123</td>
                                    </tr>
                                    <tr>
                                        <th>이름</th>
                                        <td>김경일</td>
                                    </tr>
                                    <tr>
                                        <th>전화번호</th>
                                        <td>010-0000-0000</td>
                                    </tr>
                                    <tr>
                                        <th>이메일</th>
                                        <td>kyungil@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <th>판매지역</th>
                                        <td>서울 올림픽로</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <button style="background-color: rgb(181, 253, 229)" onclick="pay()">구매</button>&nbsp;
                        <!-- <button style="background-color: white">장바구니</button> -->
                    </div>
                </div>
            </div>

            <!-- 이미지 확대샷 -->
            <div id="prod-images-container">
                <div class="strong-box">
                    <strong>확대이미지</strong><br>
                    <div style="font-size: 13px; color: lightgray;">(확대하려면 마우스를 올려놓으세요)</div>
                </div>
                <div class="prod-images-container-box">
                    <div><a href="images/Ducati/Ducati2.jpg"><img src="images/Ducati/Ducati2.jpg" /></a></div>
                    <div><a href="images/Ducati/Ducati2-front.jpg"><img src="images/Ducati/Ducati2-front.jpg" /></a>
                    </div>
                    <div><a href="images/Ducati/Ducati2-left.jpg"><img src="images/Ducati/Ducati2-left.jpg" /></a></div>
                    <div><a href="images/Ducati/Ducati2-right.jpg"><img src="images/Ducati/Ducati2-right.jpg" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">Copyright &copy; FREEDOMBIKE</div>
        <!-- //푸터 -->
        <script src="scripts/prod-desc.js"></script>
        <script>
            function pay() {
  IMP.init('imp19308827');
IMP.request_pay({
  pg : 'html5_inicis',
  pay_method : 'card',
  merchant_uid : 'merchant_' + new Date().getTime(),
  name : '주문명:결제테스트',
  amount : 16800000,
  buyer_email : 'iamport@siot.do',
  buyer_name : '구매자이름',
  buyer_tel : '010-1234-5678',
  buyer_addr : '서울특별시 강남구 삼성동',
  buyer_postcode : '123-456'
}, function(rsp) {
  if ( rsp.success ) {
      var msg = '결제가 완료되었습니다.';
      msg += '고유ID : ' + rsp.imp_uid;
      msg += '상점 거래ID : ' + rsp.merchant_uid;
      msg += '결제 금액 : ' + rsp.paid_amount;
      msg += '카드 승인번호 : ' + rsp.apply_num;
  } else {
      var msg = '결제에 실패하였습니다.';
      msg += '에러내용 : ' + rsp.error_msg;
  }

  alert(msg);
});
}
        </script>
</body>

</html>