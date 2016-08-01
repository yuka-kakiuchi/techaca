<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>掲示板</title>
</head>
<body>
　<h1>掲示板</h1>


  <form  method="POST">
    本文<br>
    <textarea name="contents"></textarea><br>
    <input type="submit" action="form.php" value="投稿">
  </form>

  <HR>
　<from>
   {foreach $data as $d}
       <br>ユーザー：{$d.user_id}
       <br>コメント：{$d.contents}<br><br>
   {/foreach}
  </from>


  <form method="POST">
      <a href = "edit.php" method="get" name="edit">投稿編集画面へ</a>
      <a href="logout.php"  name="logout">ログアウトする</a><br>
  </form>
</body>
</html>