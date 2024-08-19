<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        //PHP関数 sort_2wayを使って、if文で昇順と降順の表示分ける
        // 昇順・降順を選択して配列をソートする関数
        function sort_2way($array, $order) {
            // TRUEなら昇順、TRUEでなければ降順にソート
            if ($order) {
                echo '昇順にソートします。<br>';
                sort($array);
            } else {
                echo '降順にソートします。<br>';
                rsort($array);
            }

            // ソートされた配列を1行ずつ表示します。(変数名は$elementでなくても良いです)
            foreach ($array as $element) {
                echo $element . '<br>';
            }
        }

        //これ以下配列の宣言と関数の呼び出し

        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10 ];
        
        // 昇順にソート
        sort_2way($nums, TRUE);
        // 降順にソート
        sort_2way($nums, FALSE);
        ?>
    </p>
</body>

</html>