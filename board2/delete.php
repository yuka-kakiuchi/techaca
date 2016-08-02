<?php 
session_start();
require_once('MySmarty.class.php');
require_once 'db.php';
$smarty=new MySmarty();


    try{
        $db = getDb();

        //削除ボタンを押されたpostデータを削除
        $stt = $db->prepare("DELETE FROM post WHERE id = :id ");
        $stt->bindValue(':id', $_POST['id'], PDO::PARAM_INT);
        $stt->execute();

        
    }catch (PDOException $e) {
        $db = NULL;
        die("エラーメッセージ:{$e->getMessage()}");
}$smarty->display('edit.php');

