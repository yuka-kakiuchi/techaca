<?php
/* Smarty version 3.1.29, created on 2016-08-01 08:34:35
  from "C:\xampp\htdocs\techaca\tech_aca\board2\templates\smar_form.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_579eed7b379a70_46239165',
  'file_dependency' => 
  array (
    'b4a3ca112b3311773e53a6ba04d9ccee3af1e19c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\techaca\\tech_aca\\board2\\templates\\smar_form.tpl',
      1 => 1470032275,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_579eed7b379a70_46239165 ($_smarty_tpl) {
?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>掲示板</title>
</head>
<body>
　<h1>掲示板</h1>


  <form  method="POST">
    本文<br>
    <textarea name="contents"></textarea><br>
    <input type="submit" action="form.php" value="投稿">
  </form>

  <HR>
　<from>
   <?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_d_0_saved_item = isset($_smarty_tpl->tpl_vars['d']) ? $_smarty_tpl->tpl_vars['d'] : false;
$_smarty_tpl->tpl_vars['d'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['d']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->_loop = true;
$__foreach_d_0_saved_local_item = $_smarty_tpl->tpl_vars['d'];
?>
       <br>ユーザー：<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['d']->value['user_id'], ENT_QUOTES, 'UTF-8');?>

       <br>コメント：<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['d']->value['contents'], ENT_QUOTES, 'UTF-8');?>
<br><br>
   <?php
$_smarty_tpl->tpl_vars['d'] = $__foreach_d_0_saved_local_item;
}
if ($__foreach_d_0_saved_item) {
$_smarty_tpl->tpl_vars['d'] = $__foreach_d_0_saved_item;
}
?>
  </from>


  <form method="POST">
      <a href = "edit.php" method="get" name="edit">投稿編集画面へ</a>
      <a href="logout.php"  name="logout">ログアウトする</a><br>
  </form>
</body>
</html><?php }
}
