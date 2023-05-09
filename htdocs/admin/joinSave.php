<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입 페이지</title>

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
                <source srcset="../assets/img/join01.png, ../assets/img/join01@2x.png 2x, assets/img/join01@3x.png 3x" />
                <img src="../assets/img/join01.png" alt="회원가입 이미지">
            </picture>
            <p class="intro__text">
                회원가입을 해주시면 다양한 정보를 자유롭게 볼 수 있습니다.
            </p>
        </div>
        <!-- intro__inner -->

        <div class="join__inner">
            <h2>회원가입</h2>
            <div class="index">
                <ul>
                    <li>1</li>
                    <li class="active">2</li>
                    <li>3</li>
                </ul>
            </div>
            <div class="join__form">
                <form action="joinResult.php" name="joinResult" method="post" onsubmit="return joinChecks()">
                    <fieldset>
                        <legend class="blind">회원가입 영역</legend>
                        <div>
                            <label for="youName" class="required">이름</label>
                            <input type="text" id="youName" name="youName" placeholder="이름을 입력해주세요." maxlength="5" class="inputStyle" required>
                            <p class="msg" id="youNameComment"><!--이름은 한글만 사용할 수 있습니다.--></p>
                        </div>
                        <div class="over">
                            <label for="youEmail" class="required">이메일</label>
                            <input type="email" id="youEmail" name="youEmail" placeholder="이메일을 입력해주세요." class="inputStyle">
                            <a href="#c" class="youCheck" onclick="emailChecking()">이메일 중복확인</a>
                            <p class="msg" id="youEmailComment"><!--이미 사용중인 이메일입니다.--></p>
                        </div>
                        <div class="over">
                            <label for="youNick" class="required">닉네임</label>
                            <input type="email" id="youNick" name="youNick" placeholder="사용하실 닉네임을 입력해주세요." class="inputStyle">
                            <a href="#c" class="youCheck">닉네임 중복확인</a>
                            <p class="msg" id="youNickComment"><!--이미 사용중인 닉네임입니다.--></p>
                        </div>
                        <div>
                            <label for="youPass" class="required">비밀번호</label>
                            <input type="password" id="youPass" name="youPass" placeholder="비밀번호를 입력해주세요." class="inputStyle">
                            <p class="msg" id="youPassComment"><!--비밀번호는 특수기호를 하나 이상 포함하여야 합니다.--></p>
                        </div>
                        <div>
                            <label for="youPassC" class="required">비밀번호 확인</label>
                            <input type="password" id="youPassC" name="youPassC" placeholder="비밀번호를 다시한번 입력해주세요." class="inputStyle">
                            <p class="msg" id="youPassCComment"><!--비밀번호가 일치하지 않습니다.--></p>
                        </div>
                        <div>
                            <label for="youBirth" class="">생년월일</label>
                            <input type="text" id="youBirth" name="youBirth" placeholder="YY-MM-DD" class="inputStyle" maxlength="8">
                            <p class="msg" id="youBirthComment"><!--형식을 다시 확인해주세요.--></p>
                        </div>
                        <div>
                            <label for="youPhone">연락처</label>
                            <input type="text" id="youPhone" name="youPhone" placeholder="연락받으실 번호를 입력해주세요." class="inputStyle">
                            <p class="msg" id="youPhoneComment"><!--휴대폰 번호를 다시 입력해주세요.--></p>
                        </div>
                        <button type="submit" class="btnStyle">회원가입 완료</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </main>
    <!-- //main -->

    <?php include "../include/footer.php" ?>
    <!-- footer -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        let isEmailCheck = false;

        function emailChecking(){
            let youEmail = $("#youEmail").val();

            if(youEmail == null || youEmail == ''){
                $("#youEmail").val().text("* 이메일을 입력해주세요.")
            } else {
                $.ajax({
                    type : "POST",
                    url : "joinCheck.php",
                    data : {"youEmail" : youEmail, "type" : isEmailCheck},
                    dataType : "json",

                    success : function(data){
                        if(data.result == "good"){
                            $("#youEmail").val().text("사용 가능한 이메일입니다.");
                            isEmailCheck = true;
                        } else {
                            $("#youEmail").val().text("이미 사용중인 이메일입니다.");
                            isEmailCheck = false;
                        }
                    }

                    error : function(request, status, error){
                        console.log("request" + request);
                        console.log("status" + status);
                        console.log("error" + error);
                    }
                })
            }
        };

        function joinChecks(){
            // 이름 유효성 검사
            if($("#youName").val() == ''){
                $("#youNameComment").text("* 이름을 입력해주세요.");
                return false;
            }
            let getYouName = RegExp(/^[가-힣]+$/);
            if(!getYouName.test($("#youName").val())){
                $("#youNameComment").text("* 이름은 한글만 사용할 수 있습니다.");
                $("#youName").val('');
                $("#youName").focus();
                return false;
            }

            // 이메일 유효성 검사
            if($("#youEmail").val() == ''){
                $("#youEmailComment").text("* 이메일을 입력해주세요.");
                $("#youEmail").focus();
                return false;
            }
            let getYouEmail = RegExp(/^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/i);
            if(!getYouEmail.test($("#youEmail").val())){
                $("#youEmailComment").text("* 이메일 형식에 맞게 작성해주세요.");
                $("#youEmail").val('');
                $("#youEmail").focus();
                return false;
            }
        }
    </script>
    
</body>
</html>