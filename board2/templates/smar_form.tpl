<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>掲示板</title>
</head>
<body>
　<h1>掲示板</h1>


  <form  method="POST">
    本文<br>
      <textarea name="contents" cols="30" rows="4"></textarea><br>
    <input type="submit" action="form.php" value="投稿">
  </form>

  <HR>
　<form>
    {foreach $data as $datas}
           <br>ユーザー：{$datas.name}
           <br>コメント：{$datas.contents}

           {*自分が投稿した内容のみ編集できる処理*}
            {if $datas.user_id = $session_id}
              　<br>
                <form method = "POST" action = "edit.php">
                <a href="edit.php"  name="edit">編集</a><br>
                <input type="hidden" name = "user_id" value = "{$datas.user_id}">
                <input type="hidden" name = "id" value = "{$datas.id}">
            {/if}

           <br><br>
    {/foreach}
  </form>
      <a href="edit.php"  name="edit">編集</a><br>
      <a href="logout.php"  name="logout">ログアウトする</a><br>
  </form>
</body>
</html>