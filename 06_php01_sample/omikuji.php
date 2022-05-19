<?php

$random_number= rand(1,5);

if($random_number===1){
  $result='大吉';
}if($random_number===2){
  $result='中吉';
}if($random_number===3){
  $result='小吉';
}if($random_number===4){
  $result='凶';
}if($random_number===5){
  $result='大凶';
}

// 画面にデータを表示する
echo $result;

$array=['大吉','中吉','小吉','凶','大凶'];

// 検証するときはvar_dump();exit();
// var_dump($array);
// exit();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>おみくじ</title>
  <style>
    p{
      color: blue;
    }
  </style>
</head>
<body>
<p>今日の運勢は<?=$result?>です</p>  
</body>
</html>