<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        function sort_2way($array, $order) {
            //一連の処理
            if ($order) {
                //TRUEの処理
                echo'昇順にソートします。<br>';
                sort($array);
            }else {
                //FALSEの処理
                echo'降順にソートします。<br>';
                rsort($array);
            }
            foreach ($array as $element) {
            echo $element . '<br>';
            }
        }
        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10 ];
        //昇順にソート
        sort_2way($nums, TRUE);
        //降順にソート
        sort_2way($nums, FALSE);

        ?>
    </p>
</body>

</html>
