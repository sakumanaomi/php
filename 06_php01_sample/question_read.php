<?php
// データまとめ用の空文字変数
$str = '';
// ファイルを開く（読み取り専用）
$file=fopen('data/q.csv','r');
// ファイルをロック
flock($file,LOCK_EX);
// fgets()で1行ずつ取得→$lineに格納
if($file){
  while($line=fgets($file)){
    $str .="<tr><td>{$line}</td></tr>";
  }
}
// ロックを解除する
flock($file,LOCK_UN);
// ファイルを閉じる
fclose($file);
// `$str`に全てのデータ（タグに入った状態）がまとまるので，HTML内の任意の場所に表示する
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>アンケート結果</title>
</head>
<body>
    <fieldset>
    <legend>申込内容</legend>
    <a href="question_index.php">入力画面</a>
    <table>
      <thead>
        <tr>
          <th>アンケート結果</th>
        </tr>
      </thead>
      <tbody>
      <?=$str ?>
      </tbody>
    </table>
  </fieldset>

</body>
</html>