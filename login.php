<?php
  $username = $_POST[ 'username' ];
  $password = $_POST[ 'password' ];
  if ( !is_null( $username ) ) {
    $jb_conn = mysqli_connect( '127.0.0.1:3307', 'root', '123456', 'user' );
    $jb_sql = "SELECT password FROM member WHERE username = '" . $username . "';";
    $jb_result = mysqli_query( $jb_conn, $jb_sql );
    while ( $jb_row = mysqli_fetch_array( $jb_result ) ) {
      $encrypted_password = $jb_row[ 'password' ];
    }
    if ( is_null( $encrypted_password ) ) {
      $wu = 1;
    } else {
      if ( password_verify( $password, $encrypted_password ) ) {
        session_start();
        $_SESSION[ 'username' ] = $username;
        header( 'Location: main-login-ok.php' );
      } else {
        $wp = 1;
      }
    }
  }
?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>프리덤바이크 로그인</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="styles/reset.css" />
    <link rel="stylesheet" type="text/css" href="styles/login.css" />

    <!-- favicon -->
    <link rel="shortcut icon" href="./icon/favicon-152.png" />
    <link rel="apple-touch-icon-precomposed" href="./icon/favicon-152.png" />
    <link rel="icon" href="path/to/favicon.png" />
    <link rel="icon" href="./icon/favicon-16.png" sizes="16x16" />
    <link rel="icon" href="./icon/favicon-32.png" sizes="32x32" />
    <link rel="icon" href="./icon/favicon-48.png" sizes="48x48" />
    <link rel="icon" href="./icon/favicon-64.png" sizes="64x64" />
    <link rel="icon" href="./icon/favicon-128.png" sizes="128x128" />
</head>

<body class="my-login-page">
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-md-center h-100">
                <div class="card-wrapper">
                    <div class="brand">
                        <img src="images/logo2.png" alt="프리덤" />
                    </div>
                    <div class="card fat">
                        <div class="card-body">
                            <h4 class="card-title">로그인</h4>
                            <!-- login form -->
                            <form action="login.php" method="POST" class="my-login-validation" novalidate="">
                                <div class="form-group">
                                    <label for="id">아이디</label>
                                    <input id="id" type="text" class="form-control" name="username" value="" required
                                        autofocus />
                                    <div class="invalid-feedback">아이디를 입력하세요.</div>
                                </div>
                                <?php
        if ( $wu == 1 ) {
          echo "<p>사용자이름이 존재하지 않습니다.</p>";
        }
        ?>

                                <div class="form-group">
                                    <label for="password">비밀번호

                                    </label>
                                    <input id="password" type="password" class="form-control" name="password" required
                                        data-eye />
                                    <div class="invalid-feedback">비밀번호를 입력하세요.</div>
                                    <?php
                                    if ( $wp == 1 ) {
          echo "<p>비밀번호가 틀렸습니다.</p>";
        }
      ?>
                                    <a href="change-password.php" class="float-right">
                                        비밀번호 까먹었니?
                                    </a>
                                </div>

                                <div class="form-group">
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" name="remember" id="remember"
                                            class="custom-control-input" />
                                        <label for="remember" class="custom-control-label">로그인 상태 유지</label>
                                    </div>
                                </div>

                                <div class="form-group m-0">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        로그인
                                    </button>
                                </div>
                                <div class="mt-4 text-center">
                                    회원이 아니신가요?&nbsp;&nbsp;&nbsp;
                                    <a href="register.php">회원가입</a>
                                </div>
                                
       
                            </form>
                            <!-- //login form -->
                        </div>
                    </div>
                    <!-- footer -->
                    <div class="footer">Copyright &copy; FREEDOMBIKE</div>
                    <!-- //footer -->
                </div>
            </div>
        </div>
    </section>

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="scripts/login.js"></script>
</body>

</html>