<?php
    include "../connect/connect.php";
    include "../connect/session.php";
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
            <picture class="board__images">
                <source srcset="../assets/img/board01.jpg, ../assets/img/board01@2x.jpg 2x, ../assets/img/board01@3x.jpg 3x" />
                <img src="../assets/img/board01.jpg" alt="소개이미지">
            </picture>
            <h2>게시판</h2>
            <p class="intro__text">
                웹디자이너, 웹퍼블리셔, 프론트엔드 개발자를 위한 게시판입니다.
                관련된 문의사항은 여기서 확인하세요.
            </p>
        </div>
        <!-- intro__inner -->

        <div class="board__inner">
            <div class="board__search">
                <div class="left">
                    *총 <em>1111</em> 건의 게시물이 등록되어 있습니다.
                </div>
                <div class="right">
                    <form action="#" name="#" method="post">
                        <fieldset>
                            <legend class="blind">게시판 검색 영역</legend>
                            <input type="search" placeholder="검색어를 입력하세요!">
                            <select name="#" id="#">
                                <option value="title">제목</option>
                                <option value="content">내용</option>
                                <option value="name">등록자</option>
                            </select>
                            <button type="submit" class="btnStyle3 white">검색</button>
                            <a href="boardWrite.php" class="btnStyle3">글쓰기</a>
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="board__table">
                <table>
                    <colgroup>
                        <col style="width: 5%;">
                        <col>
                        <col style="width: 10%;">
                        <col style="width: 15%;">
                        <col style="width: 7%;">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>번호</th>
                            <th>제목</th>
                            <th>등록자</th>
                            <th>등록일</th>
                            <th>조회수</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><a href="boardView.html">게시판 제목이 들어가는 부분입니다.</a></td>
                            <td>이훈규</td>
                            <td>23.02.02</td>
                            <td>227</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><a href="boardView.html">게시판 제목이 들어가는 부분입니다.</a></td>
                            <td>이훈규</td>
                            <td>23.02.02</td>
                            <td>123</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><a href="boardView.html">게시판 제목이 들어가는 부분입니다.</a></td>
                            <td>이훈규</td>
                            <td>23.02.02</td>
                            <td>345</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td><a href="boardView.html">게시판 제목이 들어가는 부분입니다.</a></td>
                            <td>이훈규</td>
                            <td>23.02.02</td>
                            <td>783</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td><a href="boardView.html">게시판 제목이 들어가는 부분입니다.</a></td>
                            <td>이훈규</td>
                            <td>23.02.02</td>
                            <td>453</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td><a href="boardView.html">게시판 제목이 들어가는 부분입니다.</a></td>
                            <td>이훈규</td>
                            <td>23.02.02</td>
                            <td>245</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td><a href="boardView.html">게시판 제목이 들어가는 부분입니다.</a></td>
                            <td>이훈규</td>
                            <td>23.02.02</td>
                            <td>765</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td><a href="boardView.html">게시판 제목이 들어가는 부분입니다.</a></td>
                            <td>이훈규</td>
                            <td>23.02.02</td>
                            <td>245</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td><a href="boardView.html">게시판 제목이 들어가는 부분입니다.</a></td>
                            <td>이훈규</td>
                            <td>23.02.02</td>
                            <td>352</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td><a href="boardView.html">게시판 제목이 들어가는 부분입니다.</a></td>
                            <td>이훈규</td>
                            <td>23.02.02</td>
                            <td>785</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="board__pages">
                <ul>
                    <li><a href="#">처음으로</a></li>
                    <li><a href="#">이전</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>
                    <li><a href="#">7</a></li>
                    <li><a href="#">다음</a></li>
                    <li><a href="#">마지막으로</a></li>
                </ul>
            </div>
        </div>
    </main>
    <!-- main -->

    <?php include "../include/footer.php" ?>
    <!-- footer -->

</body>
</html>