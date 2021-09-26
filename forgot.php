<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>비밀번호 찾기</title>

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
                            <h4 class="card-title">비밀번호 찾기</h4>
                            <form method="POST" class="my-login-validation" novalidate="">
                                <div class="form-group">
                                    <label for="email">E-Mail 주소</label>
                                    <input id="email" type="email" class="form-control" name="email" value="" required
                                        autofocus>
                                    <div class="invalid-feedback">
                                        E-mail 을 입력해주세요.
                                    </div>
                                    <div class="form-text text-muted">
                                        "비밀번호 재설정"을 클릭하면 E-mail로 <p> 비밀번호 재설정 링크가 전송됩니다.</p>
                                    </div>
                                </div>

                                <div class="form-group m-0">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        비밀번호 재설정
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="footer">
                        FreedomBIKE
                    </div>
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