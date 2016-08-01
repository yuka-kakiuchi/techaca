<?php
/* Smarty version 3.1.29, created on 2016-07-31 07:08:53
  from "C:\xampp\htdocs\techaca\tech_aca\board2\templates\smar_login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_579d87e5ce77a5_84611048',
  'file_dependency' => 
  array (
    '614b6ca409e7747381b930fa02e9d5ae72cd2586' => 
    array (
      0 => 'C:\\xampp\\htdocs\\techaca\\tech_aca\\board2\\templates\\smar_login.tpl',
      1 => 1469941616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_579d87e5ce77a5_84611048 ($_smarty_tpl) {
?>
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
<?php }
}
