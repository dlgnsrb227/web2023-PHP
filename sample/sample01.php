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
            <table border="1">
            <?php
                include "../connect/connect.php";

                $sql = "SELECT * FROM members";
                $result = $connect -> query($sql);

                if($result){
                    $count = $result -> num_rows;

                    for($i=1; $i<=$count; $i++){
                        $info = $result -> fetch_array(MYSQLI_ASSOC);

                        // var_dump($info);
                        echo "<tr>";
                        echo "<td>".$info['memberID']."</td>";
                        echo "<td>".$info['youEmail']."</td>";
                        echo "<td>".$info['youName']."</td>";
                        echo "<td>".$info['youPass']."</td>";
                        echo "<td>".$info['youBirth']."</td>";
                        echo "<td>".$info['youAge']."</td>";
                        echo "<td>".$info['regTime']."</td>";
                        echo "</tr>";
                    }
                }

                // echo "<pre>";
                // var_dump($result);
                // echo "</pre>";
            ?>
            </table>
        </section>
    </main>
</body>
</html>