<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP KADAI_005</title>
</head>

<body>
    <?php
        //変数に値を代入する
        $score1 = 80;
        $score2 = 60;
        $score3 = 55;
        $score4 = 40;
        $score5 = 100;
        $score6 = 25;
        $score7 = 80;
        $score8 = 95;
        $score9 = 30;
        $score10 = 60;
        
        // 合計点を計算して変数に代入する
        $total = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;

        // 平均点を計算して変数に代入する
        $average = $total / 10;

        // 平均点を出力する
        echo '平均点 : ' . $average;
    ?>
</body>
</html>