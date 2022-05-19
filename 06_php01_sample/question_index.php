<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>セミナー申込</title>
</head>

<body>
  <form action="question_create.php" method="POST">
    <fieldset>
      <legend> アンケート</legend>
      <div>名前：<input type="text" name="name"></div>
      <div>カナ：<input type="text" name="name2"></div>
      <div>メールアドレス：<input type="text" name="email"></div>
      <div>行きたい旅行先（複数回答可）：
        <input type="checkbox" name="country[]"  value="china">中国
        <input type="checkbox" name="country[]"  value="hongkong">香港
        <input type="checkbox" name="country[]" value ="thai">タイ
        <input type="checkbox" name="country[]" value ="hawaii">ハワイ
     </div>
      <div>
        <button>submit</button>
      </div>
    </fieldset>
  </form>
</body>
</html>