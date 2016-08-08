<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>編集</title>
</head>

<body>
　  <form  action = update.php method="POST" >
    <textarea name = 'contents' cols = "30" rows = "4"></textarea><br>
    <input type = "hidden" name = "id" value = {$id}>
    <input type = "hidden" name = "user_id" value = {$user_id}>
    <input type=submit value="編集する">
</form>

<form action="form.php">
    <input type="submit" value="戻る">
</form>
</body>
</html>