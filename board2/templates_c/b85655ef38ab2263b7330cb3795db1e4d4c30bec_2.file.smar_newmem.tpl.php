<?php
/* Smarty version 3.1.29, created on 2016-07-31 04:01:31
  from "C:\xampp\htdocs\techaca\tech_aca\board2\templates\smar_newmem.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_579d5bfb423620_24129522',
  'file_dependency' => 
  array (
    'b85655ef38ab2263b7330cb3795db1e4d4c30bec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\techaca\\tech_aca\\board2\\templates\\smar_newmem.tpl',
      1 => 1469930487,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_579d5bfb423620_24129522 ($_smarty_tpl) {
?>
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
    <input type="submit" value="登録"><br>
   </form>
   <form action="login.php">
       <input type="submit" value="戻る">
   </form>
 </div>
</form>
</body>
</html><?php }
}
