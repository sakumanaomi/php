<?php
// var_dump($_POST);
// exit();

// データの受け取り
$name= $_POST["name"];
$name2= $_POST["name2"];
$email= $_POST["email"];
// $china= $_POST["china"];
// $hongkong= $_POST["hongkong"];
// $thai= $_POST["thai"];
// $hawaii= $_POST["hawaii"];
echo'<div>行きたい旅行先（複数回答可）：';
foreach( $_POST[country] as $value ){
    echo "{$value}, ";
}
echo '</p>';

// データ1件を1行にまとめる（最後に改行を入れる）
$write_data="{$name} {$name2} {$email} \n {$country} \n";

// ファイルを開く．引数が`a`である部分に注目！
$file= fopen('data/q.csv','a');
// ファイルをロックする
flock($file,LOCK_EX);

// 指定したファイルに指定したデータを書き込む
fwrite($file,$write_data);
// ファイルのロックを解除する
flock($file,LOCK_UN);
// ファイルを閉じる
fclose($file);
// データ入力画面に移動する
// header("Location:question_index.php");
