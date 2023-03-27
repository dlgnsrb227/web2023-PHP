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
            <form action="sample03-save.php" name="same" method="post">
                <fieldset>
                    <input type="text" name="memberID" placeholder="변경할 ID">
                    <input type="email" name="youEmail" placeholder="변경할 이메일">
                    <input type="text" name="youName" placeholder="변경할 이름">
                    <input type="password" name="youPass" placeholder="변경할 비밀번호">
                    <input type="text" name="youBirth" placeholder="변경할 생일">
                    <input type="text" name="youAge" placeholder="변경할 나이">
                    <button type="submit">회원 추가하기</button>
                </fieldset>
            </form>
        </section>
    </main>
</body>
</html>