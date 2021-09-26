<?php
  session_start();
  $session_username = $_SESSION[ 'username' ];
  if ( is_null( $session_username ) ) {
    header( 'Location: login.php' );
  }
  $current_password = $_POST[ 'current_password' ];
  $new_password = $_POST[ 'new_password' ];
  $new_password_confirm = $_POST[ 'new_password_confirm' ];
  if ( !is_null( $current_password ) ) {
    $jb_conn = mysqli_connect( '127.0.0.1:3307', 'root', '123456', 'user' );
    $jb_sql = "SELECT password FROM member WHERE username = '" . $session_username . "';";
    $jb_result = mysqli_query( $jb_conn, $jb_sql );
    while ( $jb_row = mysqli_fetch_array( $jb_result ) ) {
      $encrypted_password = $jb_row[ 'password' ];
    }
    if ( password_verify( $current_password, $encrypted_password ) ) {
      if ( $new_password == $new_password_confirm ) {
        $encrypted_new_password = password_hash( $new_password, PASSWORD_DEFAULT);
        $jb_sql_change_password = "UPDATE member SET password = '" . $encrypted_new_password . "' WHERE username = '" . $session_username . "';";
        mysqli_query( $jb_conn, $jb_sql_change_password );
        header( 'Location: main.php' );
      } else {
        $wp2 = 1;
      }
    } else {
      $wp1 = 1;
    }
  }
?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>비밀번호 변경</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="styles/login.css">

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
            <div class="row justify-content-md-center align-items-center h-100">
                <div class="card-wrapper">
                    <div class="brand">
                        <img src="images/logo2.png" alt="이미지">
                    </div>
                    <div class="card fat">
                        <div class="card-body">
                            <h4 class="card-title">비밀번호 변경</h4>
                            <form action="change-password.php" method="POST" class="my-login-validation" novalidate="">
                                <div class="form-group">
                                    <label for="current_password">현재 비밀번호</label>
                                    <input id="current_password" type="password" class="form-control" name="current_password" value="" required
                                        autofocus>
                                    <div class="invalid-feedback">
                                        비밀번호를 입력해주세요.
                                    </div>
                                </div>
                                <?php
        if ( $wp1 == 1 ) {
          echo "<p>현재 비밀번호가 틀렸습니다.</p>";
        }
        ?>
                                <div class="form-group">
                                    <label for="new_password">새 비밀번호</label>
                                    <input id="new_password" type="password" class="form-control" name="new_password" value="" required
                                        autofocus>
                                    <div class="invalid-feedback">
                                    비밀번호를 입력해주세요.
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="new_password_confirm">새 비밀번호 확인</label>
                                    <input id="new_password_confirm" type="password" class="form-control" name="new_password_confirm" value="" required
                                        autofocus>
                                    <div class="invalid-feedback">
                                    비밀번호를 입력해주세요.
                                    </div>
                                </div>

                               <?php
                                if ( $wp2 == 1 ) {
          echo "<p>새 비밀번호가 일치하지 않습니다.</p>";
        }
      ?>
                                <div class="form-group m-0">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        비밀번호 변경
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="footer">Copyright &copy; FREEDOMBIKE</div>
                </div>
            </div>
        </div>
    </section>

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="scripts/login.js"></script>
</body>

</html>