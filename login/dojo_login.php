
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>失敗道場ログイン画面</title>
</head>

<body>
  <h2>失敗道場〜失敗の数だけ人は成長する〜</h2>
  <h3>あなたが積み重ねた失敗の数があなたに勇気を与えてくれる。</h3>
  <h3>大きな夢に向かう一歩を「今」踏み出そう。</h3>
  <form action="dojo_login_act.php" method="post">
    <fieldset>
      <legend>失敗道場ログイン画面</legend>
      <div>
        名前: <input type="text" name="username">
      </div>
      <div>
        秘密の鍵: <input type="text" name="password">
      </div>
      <div>
        <button>入場</button>
      </div>
      <a href="dojo_register.php">入会はこちら</a>
    </fieldset>
  </form>

</body>

</html>
