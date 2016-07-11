<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <title>新規会員登録</title>
</head>
<body>
 <div align="center">
  <p>新規会員登録</p>
   <form action="newmem.php" method="post" >
    <dl>
        <dt>ユーザーID　(*半角英数字)</dt>
            <dd>
            <input type="text" name="id" size="35" maxlength="20">
            </dd>
        <dt>ユーザー名</dt>
            <dd>
            <input type="text" name="name" size="35" maxlength="20">
            </dd>
        <dt>パスワード　(*6文字以上)</dt>
            <dd>
            <input type="password" name="password" size="10" maxlength="20">
            </dd>
    </dl>
    <input type="submit" value="登録"><br>
   </form>
   <form action="login.php">
       <input type="submit" value="戻る">
   </form>
 </div>
</form>
</body>
</html>