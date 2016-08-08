<?php
session_start();
require_once('MySmarty.class.php');
require_once 'db.php';
$smarty=new MySmarty();


    //DBに接続
    try{
       //データを変数に格納 
       $id = $_POST['id'];
       $user_id = $_POST['user_id'];

        $db = getDb();

        //DBから本文を取得
        $stt = $db->prepare("SELECT contents FROM post WHERE id = '$id' ");
        $stt->execute();
        $row = $stt->fetch(PDO::FETCH_ASSOC);
        //smartyに抽出したものを渡す
        $smarty->assign('id',$id);
        $smarty->assign('user_id',$user_id);
        $smarty->assign('contents',$row['contents']);
        $db = NULL;
        
    }catch(PDOException $e){
        $db=NULL;
        die("エラーメッセジ:{$e->getMessage()}");
    }$smarty->display('smar_edit.tpl');
