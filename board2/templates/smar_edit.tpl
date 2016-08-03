<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>投稿編集画面</title>
</head>
<body>
    {*ユーザーの投稿を一覧表示する作業*}
    <TABLE width="500" border="1" cellspacing="0" cellpadding="8">
        <TR><TH>本文</TH><TH>&nbsp;</TH><TH>&nbsp;</TH></TR>
        　　<TBODY>
        　　 {foreach $datas as $user_datas}
                <TR>
                    {*投稿文*}
                    <TD align="center">{$user_datas.contents}</TD>
                    {*編集ボタン*}
                    <TD align="center">
                        <form method="POST" action="update.php">
                           <input type="hidden" name="id" value="{$user_datas.id}">
                           <input type="hidden" name="user_id" value="{$user_datas.user_id}">
                           <input type="submit" value ="編集" >
                         </form>
                    </TD>
                    {*削除ボタン*}
                    <TD align="center">
                        <form method="POST" action="delete.php">
                           <input type="hidden" name="id" value="{$user_datas.id}">
                           <input type="hidden" name="user_id" value="{$user_datas.user_id}">
                           <input type=submit name=delete  value = "削除">
                         </form>
                    </TD>
                </TR>
             {/foreach}
            </TBODY>
    </TABLE>

    <a href="form.php" name="board">掲示板へもどる</a><br>
</body>
</html>