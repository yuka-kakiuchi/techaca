<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>ログイン</title>
</head>

<body>
<div align="center">
    <h1>ログイン</h1>
    <form action="login.php" method="post" >
        <dl>
            <dt>ユーザーID　(*半角英数字)</dt>
            <dd>
                <input type="text" name="login_id" size="35" maxlength="20">
            </dd>
            <dt>ユーザー名</dt>
            <dd>
                <input type="text" name="login_name" size="35" maxlength="20">
            </dd>
            <dt>パスワード　(*6文字以上)</dt>
            <dd>
                <input type="password" name="login_password" size="35" maxlength="20">
            </dd>
        </dl>
        <input type="submit" value="ログイン"><br>
    </form>
    </form>
    <a href="NewMem.php" name="NewMem">新規会員登録はこちらへ！</a><br>
  </div>
</body>
</html>
