<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";

    $boardID = $_POST['boardID'];
    $boardTitle = $_POST['boardTitle'];
    $boardContents = $_POST['boardContents'];
    $boardPass = $_POST['boardPass'];

    // echo $boardID, $boardTitle, $boardContents, $boardPass;

    $boardTitle = $connect -> real_escape_string($boardTitle);
    $boardContents = $connect -> real_escape_string($boardContents);
    $boardPass = $connect -> real_escape_string($boardPass);
    $memberID = $_SESSION['memberID'];

    $sql = "SELECT * FROM members WHERE memberID = {$memberID}";
    $result = $connect -> query($sql);

    if($result){
        $info = $result -> fetch_array(MYSQLI_ASSOC);

        if($info['memberID'] == $memberID && $info['youPass'] == $boardPass){
            $sql = "UPDATE board SET boardTitle = '{$boardTitle}', boardContents = '{$boardContents}' WHERE boardID = '{$boardID}'";
            $connect -> query($sql);
            echo "<script>location.href = 'board.php';</script>";
        } else {
            echo "<script>alert('비밀번호가 일치하지 않습니다.')</script>";
            echo "<script>location.href = 'board.php';</script>";
        }
    } else {
        echo "<script>alert('페이지 오류. 관리자에게 문의하세요.')</script>";
    }

    $aaa = "SELECT memberID FROM board WHERE boardID = '${boardID}'";
    $result = $connect -> query($aaa);
    $bbb = $result -> fetch_assoc();

    // if($bbb['memberID'] == $memberID){
    //     $sql = "UPDATE board SET boardTitle = '{$boardTitle}', boardContents = '{$boardContents}' WHERE boardID = '{$boardID}'";
    //     $connect -> query($sql);
    //     echo "<script>location.href = 'board.php';</script>";
    // } else {
    //     echo "글의 작성자만 수정 가능합니다.";
    // }

?>