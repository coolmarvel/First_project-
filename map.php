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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FreedomBIKE</title>

    <link rel="stylesheet" href="http://cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
    <link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="./styles/header&footer.css">
    <link rel="stylesheet" href="./styles/map.css">
    <link rel="stylesheet" href="jquery.js">

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
        <main>
          <div class="storeLoca">
           <h1><center>영업지점</center> </h1>
        
           
            <table class="mapSeoul">
              <tr>
                 <th>상호</th>
                 <th>전화번호</th>
                 <th>주소</th>
                 <th>링크</th>
              </tr>
              <tr>
                <td>서울 지점</td>
                <td>(02)716-9978</td>
                <td>서울 용산구 한강대로 357-2</td>
                <td><button onclick="mapdd2()" class="btn">상세지도</button></td>
              </tr>
              <tr>
                <td>부산 지점</td>
                <td>010-2716-9978</td>
                <td>부산 부산진구 가야대로673번길</td>
                <td><button onclick="mapdd()" class="btn">상세지도</button></td>
              </tr>
            
            </table> 
                 <h2>상세지도</h2>
                 <style>
                   h2{text-align: center;
                  }
                 </style>
          </a>          
          <div id="collapse1" class="collapse in mapH">				
           
          </div>
          </div>
          <div id="collapse6" class="map1">	
            
            <div style="display: none;" id="mapddid2">
              <p alighn='middle'><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d790.7995302668417!2d126.97207394726748!3d37.55039576635421!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca26620718a15%3A0x3de020a7b23dcd43!2z7ISc7Jq47Yq567OE7IucIOyaqeyCsOq1rCDrj5nsnpDrj5kg7ZWc6rCV64yA66GcIDM1Ny0y!5e0!3m2!1sko!2skr!4v1588039295398!5m2!1sko!2skr"  width="100%" height="500px" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
                
            </div>
          </div>
        </div>
              <script>
                function mapdd2(){
                  let click = document.getElementById("mapddid2");
             
                  if(click.style.display === "none"){
                    click.style.display = "block";
                  }else{
                    click.style.display = "none";
                  }
                }
              </script> 
          
          <div id="collapse6" class="map1">	
            
            <div style="display: none;" id="mapddid">
              <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3262.0012824934506!2d129.04308591554084!3d35.156588766172206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3568eb0c1ebdc34d%3A0x97b4aa4ce9f646bc!2z67aA7IKw6rSR7Jet7IucIOu2gOyCsOynhOq1rCDqsIDslbwx64-ZIOqwgOyVvOuMgOuhnCA2NzM!5e0!3m2!1sko!2skr!4v1626423212898!5m2!1sko!2skr" width="100%" height="500px" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>		
                
            </div>
          </div>
        </div>
              <script>
                function mapdd(){
               
                  let click = document.getElementById("mapddid");
                
                  if(click.style.display === "none"){              
                    click.style.display = "block";
                  }else{
                    click.style.display = "none";
                  }
                }
              </script> 
    </main>
    <div class="footer">Copyright &copy; FREEDOMBIKE</div>
        <!-- //푸터 -->
</body>
</html>