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
                    {*本文/編集/削除*}
                    <TD align="center">{$user_datas.contents}</TD>
                    <TD align="center"><input type=submit name=update method="GET" value = {$user_datas.contents} action = "update.php">更新</TD>
                    <TD align="center"><input type=submit name=delete method="GET" value = {$user_datas.contents} action = "delete.php">削除</TD>
                </TR>
             {/foreach}
            </TBODY>
    </TABLE>

    <a href="form.php" name="board">掲示板へもどる</a><br>
</body>
</html>