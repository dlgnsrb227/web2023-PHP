<?php
    include "../connect/connect.php";

    $youEmail = $_POST['youEmail'];
    $youName = $_POST['youName'];
    $youPass = $_POST['youPass'];
    $youPassC = $_POST['youPassC'];
    $youPhone = $_POST['youPhone'];
    $regTime = time();

    // echo $youEmail,$youName,$youPass,$youPhone;

    // $sql = "INSERT INTO members(youEmail, youName, youPass, youPhone, regTime) VALUES('$youEmail', '$youName', '$youPass', '$youPhone', '$regTime')";
    // $connect -> query($sql);

    // 사용자가 데이터 입력 -> 유효성 검사 -> 통과 -> 회원가입(쿼리문전송)
    // 사용자가 데이터 입력 -> 유효성 검사 -> 통과(이메일주소/핸드폰)(O) -> 회원가입(쿼리문전송)
    // 사용자가 데이터 입력 -> 유효성 검사 -> 통과(X) -> 회원가입(쿼리문전송)
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입 완료페이지</title>

    <?php include "../include/head.php" ?>
</head>
<body class="gray">

    <?php include "../include/skip.php" ?>
    <!-- skip -->

    <?php include "../include/header.php" ?>
    <!-- header -->

    <main id="main" class="container">
        <div class="intro__inner center bmStyle">
            <picture class="intro__images">
                <source srcset="../assets/img/joinend01.png, ../assets/img/joinend01@2x.png 2x, ../assets/img/joinend01@3x.png 3x" />
                <img src="../assets/img/joinend01.png" alt="회원가입 이미지">
            </picture>
            <p class="intro__text">
                회원가입을 축하드립니다. 환영합니다.<br>
                로그인을 해주세요 !
            </p>
            <div class="intro__btn">
                <a href="#">메인으로</a>
                <a href="#">로그인</a>
            </div>
        </div>
        <!-- intro__inner -->

    </main>
    <!-- main -->
</body>
</html>