<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판</title>

    <?php include "../include/head.php" ?>
</head>
<body class="gray">
    <?php include "../include/skip.php" ?>
    <!-- skip -->

    <?php include "../include/header.php" ?>
    <!-- include -->

    <main id="main" class="container">
        <div class="intro__inner center bmStyle">
            <picture class="board__images small">
                <source srcset="../assets/img/board01.jpg, ../assets/img/board01@2x.jpg 2x, ../assets/img/board01@3x.jpg 3x" />
                <img src="../assets/img/board01.jpg" alt="소개이미지">
            </picture>
            <h2>게시글 작성하기</h2>
            <p class="intro__text">
                웹디자이너, 웹퍼블리셔, 프론트엔드 개발자를 위한 게시판입니다.
                관련된 문의사항은 여기서 확인하세요.
            </p>
        </div>
        <!-- intro__inner -->

        <div class="board__inner">
            <div class="board__write">
                <form action="boardWriteSave.php" name="boardWriteSave.php" method="post">
                    <fieldset>
                        <legend class="blind">게시글 작성하기</legend>
                        <div>
                            <label for="boardTitle">제목</label>
                            <input type="text" id="boardTitle" name="boardTitle" class="inputStyle" required>
                        </div>
                        <div>
                            <label for="boardContents">내용</label>
                            <textarea name="boardContents" id="boardContents" rows="20" class="inputStyle" required></textarea>
                        </div>
                        <button type="submit" class="btnStyle3">저장하기</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </main>
    <!-- main -->

    <?php include "../include/footer.php" ?>
    <!-- footer -->

</body>
</html>