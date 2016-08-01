<?php
/* Smarty version 3.1.29, created on 2016-07-27 11:34:43
  from "C:\xampp\htdocs\techaca\tech_aca\board2\edit.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57988033760554_83679849',
  'file_dependency' => 
  array (
    '778d307416f7ab1ed0d48a14148acf4833fec4cd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\techaca\\tech_aca\\board2\\edit.php',
      1 => 1469609817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57988033760554_83679849 ($_smarty_tpl) {
echo '<?php
';?>session_start();
require_once('MySmarty.class.php');
require_once 'db.php';

$smarty=new MySmarty();

  //編集ボタンが押された場合の処理
  if(isset($_GET['edit'])){
    //本文が記入されているかどうかの確認
    if($_GET['contents']){
            try{
                $id=$_POST['id'];
                $user_id=$_POST['user_id'];
                $contents=$_POST['contents'];

                $db = getDb();

                $stt=$db->prepare("UPDATE post SET contents='$contents' WHERE id='$user_id'");
                $stt->bindValue(':contents', $_POST['contents']);
                //smar_form.tplに表示させる
                $smarty->assign('id',$user_id);
                $smarty->assign('user_id',$user_id);
                $smarty->assign('contents',$contents);


                $stt->execute();
                $db=NULL;


            }catch(PDOException $e){
                $db=NULL;
                die("エラーメッセジ:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['e']->value->getMessage(), ENT_QUOTES, 'UTF-8');?>
");
            }

        }$smarty->display('smar_edit.tpl');
    }



//<?php }
}
