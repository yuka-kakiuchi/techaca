<html>
 <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>掲示板</title>
 </head>

 <body>
    <h1>掲示板</h1>

    <form  method="POST" action="form.php" >
    本文<br>
       <textarea name = "contents" cols = "30" rows = "4"></textarea><br>
       <input type = "submit" value = "投稿"><br>
    </form>

  <HR>

　
      {if isset($user_id)}
         {foreach $data as $datas}
            <br>ユーザー：{$datas.name}
            <br>コメント：{$datas.contents|escape}
            <br>


             {*ログイン者の投稿のみ出現させる*}
             {if $datas.user_id == $user_id}
                 <form method = "POST" action= "delete.php" >
                     <input type = "hidden" name = "user_id" value = {$datas.user_id}>
                     <input type = "hidden" name = "id" value = {$datas.id}>
                     <input type = "submit" value = "削除">
                 </form>
                 <form method = "POST" action = "edit.php" >
                     <input type = "hidden" name = "user_id" value = {$datas.user_id}>
                     <input type = "hidden" name = "id" value = {$datas.id}>
                     <input type = "submit" value = "編集">
                 </form>
             {/if}

         {/foreach}

      {/if}
        <a href="logout.php"  name="logout">ログアウトする</a><br>

 </body>
</html>