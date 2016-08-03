<?php
/* Smarty version 3.1.29, created on 2016-08-03 10:53:57
  from "C:\xampp\htdocs\techaca\tech_aca\board2\templates\smar_form.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a1b12568ff15_63565207',
  'file_dependency' => 
  array (
    'b4a3ca112b3311773e53a6ba04d9ccee3af1e19c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\techaca\\tech_aca\\board2\\templates\\smar_form.tpl',
      1 => 1470214432,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57a1b12568ff15_63565207 ($_smarty_tpl) {
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
      <textarea name="contents" cols="30" rows="4"></textarea><br>
    <input type="submit" action="form.php" value="投稿">
  </form>

  <HR>
　<form>
    <?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_datas_0_saved_item = isset($_smarty_tpl->tpl_vars['datas']) ? $_smarty_tpl->tpl_vars['datas'] : false;
$_smarty_tpl->tpl_vars['datas'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['datas']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['datas']->value) {
$_smarty_tpl->tpl_vars['datas']->_loop = true;
$__foreach_datas_0_saved_local_item = $_smarty_tpl->tpl_vars['datas'];
?>
           <br>ユーザー：<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['datas']->value['name'], ENT_QUOTES, 'UTF-8');?>

           <br>コメント：<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['datas']->value['contents'], ENT_QUOTES, 'UTF-8');?>


           
            <?php if (!isset($_smarty_tpl->tpl_vars['datas']) || !is_array($_smarty_tpl->tpl_vars['datas']->value)) $_smarty_tpl->smarty->ext->_var->createLocalArrayVariable($_smarty_tpl, 'datas');
if ($_smarty_tpl->tpl_vars['datas']->value['user_id'] = $_smarty_tpl->tpl_vars['session_id']->value) {?>
              　<br>
                <form method = "POST" action = "edit.php">
                <a href="edit.php"  name="edit">編集</a><br>
                <input type="hidden" name = "user_id" value = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['datas']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
">
                <input type="hidden" name = "id" value = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['datas']->value['id'], ENT_QUOTES, 'UTF-8');?>
">
            <?php }?>

           <br><br>
    <?php
$_smarty_tpl->tpl_vars['datas'] = $__foreach_datas_0_saved_local_item;
}
if ($__foreach_datas_0_saved_item) {
$_smarty_tpl->tpl_vars['datas'] = $__foreach_datas_0_saved_item;
}
?>
  </form>
      <a href="edit.php"  name="edit">編集</a><br>
      <a href="logout.php"  name="logout">ログアウトする</a><br>
  </form>
</body>
</html><?php }
}
