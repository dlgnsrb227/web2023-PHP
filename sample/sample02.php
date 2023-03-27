<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://webfontworld.github.io/PyeongChang/PyeongChang.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet"
</head>
<body>
    <main>
        <aside>
            <?php
                include "aside.php";
            ?>
        </aside>
        <section>
            <form action="sample02-save.php" name="same" method="post">
                <fieldset>
                    <input type="email" name="youEmail" placeholder="이메일">
                    <input type="text" name="youName" placeholder="이름">
                    <input type="password" name="youPass" placeholder="비밀번호">
                    <input type="text" name="youBirth" placeholder="생일">
                    <input type="text" name="youAge" placeholder="나이">
                    <button type="submit">회원 추가하기</button>
                </fieldset>
            </form>
        </section>
    </main>
</body>
</html>