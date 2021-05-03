<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>失敗道場入会画面</title>
</head>

<body>
  <form action="dojo_c_register_act.php" method="POST">
    <fieldset>
      <legend>挑戦者登録画面</legend>
      <div>
        挑戦者: <input type="text" name="ch_usn">
      </div>
      <div>
        鍵: <input type="text" name="password">
      </div>
        <button>入会</button>
      </div>
      <a href="dojo_login.php">or 入場</a>
    </fieldset>
  </form>
  <form action="dojo_s_register_act.php" method="POST">
    <fieldset>
      <legend>提供者登録画面</legend>
      <div>
        提供者: <input type="text" name="su_usn">
      </div>
      <div>
        鍵: <input type="text" name="password">
      </div>
      </div>
        <button>入会</button>
      </div>
      <a href="dojo_login.php">or 入場</a>
    </fieldset>
  </form>
</body>

</html>