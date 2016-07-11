<?php
/* Smarty version 3.1.29, created on 2016-07-11 10:38:10
  from "C:\xampp\htdocs\techaca\board2\templates\smar_newmem.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57835af2270632_47139217',
  'file_dependency' => 
  array (
    '1cc2d6f140c3f6572726aa175e35dd700ada8a08' => 
    array (
      0 => 'C:\\xampp\\htdocs\\techaca\\board2\\templates\\smar_newmem.tpl',
      1 => 1468176388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57835af2270632_47139217 ($_smarty_tpl) {
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
            <input type="text" name="id" size="35" maxlength="20">
            </dd>
        <dt>ユーザー名</dt>
            <dd>
            <input type="text" name="name" size="35" maxlength="20">
            </dd>
        <dt>パスワード　(*6文字以上)</dt>
            <dd>
            <input type="password" name="password" size="10" maxlength="20">
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
