<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    $boardID = $_POST['boardID'];
    $boardTitle = $_POST['boardTitle'];
    $boardContents = $_POST['boardContents'];

    $boardTitle = $connect -> real_escape_string($boardTitle);
    $boardContents = $connect -> real_escape_string($boardContents);
    $memberID = $_SESSION['memberID'];

    $aaa = "SELECT memberID FROM board WHERE boardID = '${boardID}'";
    $result = $connect -> query($aaa);
    $bbb = $result -> fetch_assoc();

    if($bbb['memberID'] == $memberID){
        $sql = "UPDATE board SET boardTitle = '{$boardTitle}', boardContents = '{$boardContents}' WHERE boardID = '{$boardID}'";
        $connect -> query($sql);
        echo "<script>location.href = 'board.php';</script>";
    } else {
        echo "글의 작성자만 수정 가능합니다.";
    }

?>