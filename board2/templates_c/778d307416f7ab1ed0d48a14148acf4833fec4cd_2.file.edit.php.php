<?php
/* Smarty version 3.1.29, created on 2016-08-03 10:38:17
  from "C:\xampp\htdocs\techaca\tech_aca\board2\edit.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a1ad79eb79a7_80743278',
  'file_dependency' => 
  array (
    '778d307416f7ab1ed0d48a14148acf4833fec4cd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\techaca\\tech_aca\\board2\\edit.php',
      1 => 1470213194,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57a1ad79eb79a7_80743278 ($_smarty_tpl) {
echo '<?php
';?>session_start();
require_once('MySmarty.class.php');
require_once 'db.php';

$smarty=new MySmarty();


    //DBに接続
    try{
        $db = getDb();

        //結合したテーブルからデータを取得し、投稿順に並べ替える
        $stt = $db -> prepare('SELECT * From post ORDER BY id ');
        $stt -> execute();
        $data = $stt->fetch(PDO::FETCH_ASSOC);
            //繰り返し出力処理
            $data = array();
            while ($row = $stt->fetch(PDO::FETCH_ASSOC)) {
                $data[] = $row;
             }

            //Smartyにcontentsという名前で配列を渡す
            $smarty->assign('datas', $data);
            $db = NULL;
        
        

    }catch(PDOException $e){
        $db=NULL;
        die("エラーメッセジ:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['e']->value->getMessage(), ENT_QUOTES, 'UTF-8');?>
");
    }$smarty->display('smar_edit.tpl');
<?php }
}
