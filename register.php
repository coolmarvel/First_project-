<?php
  $username = $_POST[ 'username' ];
  $password = $_POST[ 'password' ];
  $password_confirm = $_POST[ 'password_confirm' ];
  if ( !is_null( $username ) ) {
    $jb_conn = mysqli_connect( '127.0.0.1:3307', 'root', '123456', 'user' );
    $jb_sql = "SELECT username FROM member WHERE username = '$username';";
    $jb_result = mysqli_query( $jb_conn, $jb_sql );
    while ( $jb_row = mysqli_fetch_array( $jb_result ) ) {
      $username_e = $jb_row[ 'username' ];
    }
    if ( $username == $username_e ) {
      $wu = 1;
    } elseif ( $password != $password_confirm ) {
      $wp = 1;
    } else {
      $encrypted_password = password_hash( $password, PASSWORD_DEFAULT);
      $jb_sql_add_user = "INSERT INTO member ( username, password ) VALUES ( '$username', '$encrypted_password' );";
      mysqli_query( $jb_conn, $jb_sql_add_user );
      header( 'Location: main.php' );
    }
  }
?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>회원가입</title>

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
                        <img src="images/logo2.png" alt="이미지" />
                    </div>
                    <div class="card fat">
                        <div class="card-body">
                            <h4 class="card-title">회원가입</h4>
                            <form action="register.php" method="POST" class="my-login-validation" novalidate="">
                                <div class="form-group">

                                    <div class="form-group">
                                        <label for="id">ID</label>
                                        <input id="ID" type="text" class="form-control" name="username" required />
                                        <div class="invalid-feedback">ID를 입력해주세요.</div>
                                        <?php
                                        if ( $wu == 1 ) {
                                         echo "<p>중복된 아이디입니다.</p>";
                                        }
                                         ?>
                                        </div>

                                    <div class="form-group">
                                        <label for="password">비밀번호</label>
                                        <input id="password1" type="password" class="form-control" name="password"
                                            required data-eye />
                                        <div class="invalid-feedback">비밀번호를 입력해주세요.</div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password">비밀번호 확인</label>
                                        <input id="password2" type="password" class="form-control"
                                            name="password_confirm" required data-eye />
                                        <div class="invalid-feedback">비밀번호를 입력해주세요.</div>
                                    </div>
                                    <div class="alert alert-success" id="alert-success">
                                        비밀번호가 일치합니다.
                                    </div>
                                    <div class="alert alert-danger" id="alert-danger">
                                        비밀번호가 일치하지 않습니다.
                                    </div>
                                    <?php
                                    if ( $wp == 1 ) {
                                        echo "<p>비밀번호가 일치하지 않습니다.</p>";
                                      }
                                    ?>

                                    <div class="form-group">
                                        <label for="LC">운전면허증</label>

                                        <input type="file" id="LC" />
                                    </div>

                                    <div class="form-group">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" name="agree" id="agree" class="custom-control-input"
                                                required="" />
                                            <label for="agree" class="custom-control-label"><a href="#">약관 </a>에 동의합니다.
                                            </label>
                                            <div class="invalid-feedback">
                                                약관에 동의하셔야 합니다.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group m-0">
                                        <button type="submit" class="btn btn-primary btn-block">
                                            회원가입
                                        </button>
                                    </div>
                                    <div class="mt-4 text-center">
                                        이미 회원이신가요?
                                        <a href="login.php">&nbsp;&nbsp;&nbsp;로그인</a>
                                    </div>

                            </form>
                        </div>
                    </div>
                    <!-- footer -->
                    <div class="footer">Copyright &copy; FREEDOMBIKE</div>
                    <!-- //footer -->
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="scripts/login.js"></script>
</body>

</html>