<?php
session_start();
require_once('MySmarty.class.php');
require_once 'db.php';
$smarty=new MySmarty();

 if (isset($_POST['name']) && isset ($_POST['contents'])) {
    try {
        $db = getDb();
      
        $stt = $db->prepare('INSERT INTO post(name,contents) VALUES(:name,:contents)');
        $stt->bindValue(':name', $_POST['name']);
        $stt->bindValue(':contents', $_POST['contents']);
        $stt->execute();
        $stt = NULL;

        $stt = $db->prepare('SELECT * FROM member ORDER BY id');
        $stt->execute();
        //DBに登録されているデータを準備・出力
        while ($row = $stt->fetch(PDO::FETCH_ASSOC)) {
            //出力フォームの作成
            print "名前：" . e($row['name']);
            print("<br>");
            print "本文：" . e($row['contents']);
            print("<br><br>");
            $stt = NULL;
        }
       
    }catch (PDOException $e) {
      $db = NULL;
      die("エラーメッセージ：{$e->getMessage()}");
    }
     
 }else {
     print"全て入力してください";
 }
$smarty->display('smar_form.tpl');