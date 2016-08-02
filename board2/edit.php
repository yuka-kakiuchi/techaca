<?php
session_start();
require_once('MySmarty.class.php');
require_once 'db.php';

$smarty=new MySmarty();


    //DBに接続
    try{
        $db = getDb();

        //結合したテーブルからデータを取得し、投稿順に並べ替える
        $stt = $db -> prepare('SELECT contents From post ORDER BY id ');
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
        die("エラーメッセジ:{$e->getMessage()}");
    }$smarty->display('smar_edit.tpl');
