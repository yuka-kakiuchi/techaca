<?php
/* Smarty version 3.1.29, created on 2016-07-31 01:18:28
  from "C:\xampp\htdocs\techaca\tech_aca\board2\templates\smar_edit.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_579d35c423bcd8_25835452',
  'file_dependency' => 
  array (
    '0cb57905e817d90a508d10ba8d2908b0226519d9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\techaca\\tech_aca\\board2\\templates\\smar_edit.tpl',
      1 => 1469918543,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_579d35c423bcd8_25835452 ($_smarty_tpl) {
?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>投稿編集画面</title>
</head>
<body>
    
    <TABLE width="500" border="1" cellspacing="0" cellpadding="8">
        <TR><TH>本文</TH><TH>&nbsp;</TH><TH>&nbsp;</TH></TR>
        　　<TBODY>
        　　 <?php
$_from = $_smarty_tpl->tpl_vars['datas']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_user_datas_0_saved_item = isset($_smarty_tpl->tpl_vars['user_datas']) ? $_smarty_tpl->tpl_vars['user_datas'] : false;
$_smarty_tpl->tpl_vars['user_datas'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['user_datas']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['user_datas']->value) {
$_smarty_tpl->tpl_vars['user_datas']->_loop = true;
$__foreach_user_datas_0_saved_local_item = $_smarty_tpl->tpl_vars['user_datas'];
?>
                <TR>
                    
                    <TD align="center"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_datas']->value['contents'], ENT_QUOTES, 'UTF-8');?>
</TD>
                    <TD align="center"><input type=submit name=update method="GET" value = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_datas']->value['contents'], ENT_QUOTES, 'UTF-8');?>
 action = "update.php">更新</TD>
                    <TD align="center"><input type=submit name=delete method="GET" value = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_datas']->value['contents'], ENT_QUOTES, 'UTF-8');?>
 action = "delete.php">削除</TD>
                </TR>
             <?php
$_smarty_tpl->tpl_vars['user_datas'] = $__foreach_user_datas_0_saved_local_item;
}
if ($__foreach_user_datas_0_saved_item) {
$_smarty_tpl->tpl_vars['user_datas'] = $__foreach_user_datas_0_saved_item;
}
?>
            </TBODY>
    </TABLE>

    <a href="form.php" name="board">掲示板へもどる</a><br>
</body>
</html><?php }
}
