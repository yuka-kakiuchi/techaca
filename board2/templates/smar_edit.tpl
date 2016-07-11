<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>投稿編集画面</title>
</head>
<body>
    {*データを編集する画面*}
    <form action="edit.php" method="POST">
        <textarea name="contents">{$contents}</textarea>
        <input type="hidden" name="id" value="{$id}">
        <input type="hidden" name="user_id" value="{$user_id}">
        <input type="submit" value="更新">
    </form>
    <a href="board.php" name="board">掲示板へもどる</a><br><
</body>
</html>