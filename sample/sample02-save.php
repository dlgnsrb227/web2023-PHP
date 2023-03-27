<?php
    include "../connect/connect.php";

    $youEmail = $_POST['youEmail'];
    $youName = $_POST['youName'];
    $youPass = $_POST['youPass'];
    $youBirth = $_POST['youBirth'];
    $youAge = $_POST['youAge'];
    $regTime = time();

    echo $youEmail, $youName, $youPass, $youBirth, $youAge, $regTime;

    $sql = "INSERT INTO members(youEmail, youName, youPass, youBirth, youAge, regTime) VALUES('$youEmail','$youName','$youPass','$youBirth','$youAge','$regTime')";
    $connect -> query($sql);

    Header("Location: sample01.php");
?>