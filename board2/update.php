<?php
session_start();
require_once('MySmarty.class.php');
require_once 'db.php';
$smarty=new MySmarty();

  try{
      $db = getDb();

      if(isset($_POST['contents'])) {

          //変更内容の格納
          $contents = $_POST["contents"];
          $id = $_POST['id'];
          $user_id = $_POST['user_id'];

          if ($_POST['contents'] != '') {
              //データの更新
              $stt = $db->prepare("UPDATE post SET contents = :contents WHERE id = :id ");
              $stt->bindParam(':contents', $contents);
              $stt->bindParam('id', $id);
              $stt->execute();
              //編集完了の表記
              print "編集しました。";
              $db = NULL;
          }
      }
  }catch(PDOException $e){
      $db=NULL;
      die("エラーメッセジ:{$e->getMessage()}");
      
  }$smarty->display('smar_update.tpl');