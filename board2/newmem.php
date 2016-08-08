<?php
session_start();
require_once('MySmarty.class.php');
require_once 'db.php';
$smarty= new MySmarty();


 try {
    $db = getDb();

     //ユーザー名とパス両方書いてるか否か
     if (isset($_POST['login_id'])&&isset($_POST['login_name']) && isset($_POST['login_password'])) {
         //POSTを変数に代入
          $login_name =$_POST['login_name'];
          $login_id = $_POST['login_id'];
          $login_password = $_POST['login_password'];

         //ユーザーIDが半角英数字で記入されているかの確認
         if (preg_match("/^[a-zA-Z0-9]+$/", $_POST['login_id'])) {
             //パスワードが6文字以上かどうかの確認
             if (strlen($_POST['login_password']) >= 6) {
                 //ユーザーIDが重複していないかどうかの確認
                 if ($stt = $db->prepare('SELECT DISTINCT membert FROM id;')) {

                     $stt ->execute();

                     //会員情報をDBに登録
                     $stt = $db -> prepare('INSERT INTO member(id,name,password) VALUES(:login_id,:login_name,:login_password)');
                     $stt -> bindValue(':login_id', $_POST['login_id']);
                     $stt -> bindValue(':login_name', $_POST['login_name']);
                     $stt -> bindValue(':login_password', $_POST['login_password']);
                     $stt->execute();

                     //sessionに入力値を保存する
                     $_SESSION['login_name'] = $login_name;
                     $_SESSION['login_id'] = $login_id;
                     $_SESSION['login_password'] = $login_password;
                     $stt = NULL;
                     $db = NULL;
                     header('Location:form.php');
                     exit();
                 // ユーザIDが重複している場合の処理
                 } else {
                     print 'このユーザーは既に登録されています。';
                     $stt ->execute();
                 }
             //パスワードが６文字以下の場合
             } else {
                 print "パスワードが短すぎます。６文字以上で設定をしてください。";
             }
         //半角英数字でない場合
         } else {
             print '半角英数字で入力してください';
         }

     }

 }catch (PDOException $e){
    $db = NULL;
    die("エラーメッセージ：{$e->getMessage()}");
  }$smarty->display('smar_newmem.tpl');

?>