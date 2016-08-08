<?php
session_start();
require_once('MySmarty.class.php');
require_once 'db.php';
$smarty=new MySmarty();

  try{
      $db = getDb();

          //POSTで惣村されたデータの格納
          $id = $_POST['id'];
          $user_id = $_POST['user_id'];

          if(isset($id)&&isset($user_id)) {
              //ログイン状況の確認
              if ($user_id == $_SESSION['login_id']) {
              //更新される文が入力されている場合の処理
                  if (isset($_POST['contents'])) {
                      if ($_POST['contents'] != '') {
                          $contents = $_POST['contents'];
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
              }
      }
  }catch(PDOException $e){
      $db=NULL;
      die("エラーメッセジ:{$e->getMessage()}");
      
  }$smarty->display('smar_update.tpl');