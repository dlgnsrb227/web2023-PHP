<?php
    include "../connect/connect.php";

    $memberID = $_POST['memberID'];
    $youEmail = $_POST['youEmail'];
    $youName = $_POST['youName'];
    $youPass = $_POST['youPass'];
    $youBirth = $_POST['youBirth'];
    $youAge = $_POST['youAge'];

    echo $memberID, $youEmail, $youName, $youPass, $youBirth, $youAge;

    $sql = "UPDATE members SET youEmail = '$youEmail', youName = '$youName', youPass = '$youPass', youBirth = '$youBirth', youAge = '$youAge' WHERE memberID = '$memberID'";
    $connect -> query($sql);

    Header("Location: sample01.php");
?>