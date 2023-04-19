<header id="header">
    <div class="header__inner container">
        <div class="left">
            <a href="../index.html" class="star">
                <span class="blind">메인으로</span>
            </a>
        </div>
        <h1 class="logo"><a href="../main/main.php">Developer Blog</a></h1>
        <div class="right">
            <?php
                if(isset($_SESSION['memberID'])){   ?>
                    <ul>
                        <li><a href="../mypage/mypage.php"><?=$_SESSION['youName']?>님👍</a></li>
                        <li><a href="../login/logout.php">로그아웃</a></li>
                    </ul>
                <?php } else { ?>
                    <ul>
                        <li><a href="join.html">회원가입</a></li>
                    </ul>
                <?php } ?>
        </div>
    </div>
    <nav class="nav__inner">
        <ul>
            <li><a href="../join/join.php">회원가입</a></li>
            <li><a href="../login/login.php">로그인</a></li>
            <li><a href="#">게시판</a></li>
            <li><a href="#">블로그</a></li>
        </ul>
    </nav>
</header>
<!-- //header -->