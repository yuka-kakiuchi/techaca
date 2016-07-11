<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>掲示板</title>
</head>
<body>
　<h1>掲示板</h1>



{*ログイン状態確認*}
{if isset($session_name)}
    {*ログイン時のみ、投稿フォームを表示*}
     本文<br>
     <form method="POST" action="form.php">
     <textarea name="contents"></textarea><br>
     </form>
{*ログインしていない場合*}
{else}
    {*ログイン・登録画面へ移動*}
    <form action="login.php">
    <input type="submit" value="ログイン・登録ページ"><br>
    </form>
{/if}



{*ログイン時のみ掲示板の内容を表示*}
{if isset($session_id)}
     {*DBに記載されたデータを表示*}
    {foreach $post_data as $post_datas}
        名前：{$post_datas.name}
        本文：{$post_datas. contents}
        <form action=edit.php method="GET">
          <input type=hidden name=id value=$id>
          <input type=submit value=編集>
        </form>
        <form action=sakujo.php method="get">
          <input type=hidden name=id value=$>
          <input type=submit value=投稿削除>
        </form>

    {/foreach}

    <a href="logout.php"  name="logout">ログアウトする</a><br>
{/if}
</body>
</html>


