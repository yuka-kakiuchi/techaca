<?php
session_start();
require_once('MySmarty.class.php');
require_once 'db.php';

$smarty=new MySmarty();

    try {
        $id=$_POST['id'];
        $user_id=$_POST['user_id'];
        $contents=$_POST['contents'];

        $db = getDb();

        $stt=$db->prepare("UPDATE post SET contents='$contents' WHERE id='$id'");
        $stt->bindValue(':contents', $_POST['contents']);                                           
        $stt->execute();
        $row=$stt->fetch(PDO::FETCH_ASSO);
        
        //board.tplに表示させる
        $smarty->assign('id',$id);
        $smarty->assign('user_id',$user_id);
        $smarty->assign('contents',$row['contents']);
        $db=NULL;
        
    }catch(PDOException $e){
        $db=NULL;
        die("エラーメッセジ:{$e->getMessage()}");
}


$smarty->display('smar_edit.tpl');