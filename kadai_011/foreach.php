<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset = "UTF-8">
</head>    
<body>
    <p>
        <?php
        //キーと値を持つ連想配列を作成し、変数に代入
        $merchandise_data = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];
        
        //keyとvalueを出力出力
        foreach ($merchandise_data as $key => $value){
        echo "{$key} : {$value} <br>";
        }
        ?>
    </p>    
</body>
</html>
