<?php
session_start();
require_once('MySmarty.class.php');
require_once 'db.php';
$smarty=new MySmarty();


   //DB接続
   try {
      $db = getDb();

        if(isset($_POST["login_id"]) && isset($_POST["login_password"]) && isset($_POST["login_name"])){
            //送信されたPOST情報を格納
            $login_id = $_POST['login_id'];
            $login_password = $_POST['login_password'];
            $login_name = $_POST['login_name'];
            

            $stt = $db->prepare("SELECT * FROM member WHERE id = '$login_id' AND password = '$login_password' AND name ='$login_name' ");
            $stt->execute();
            //ログインに成功した場合の処理
            if ($stt->fetch(PDO::FETCH_ASSOC)) {
                //SESSIONに格納
                $_SESSION['login_id'] = $login_id;
                $_SESSION['login_password'] = $login_password;
                $_SESSION['login_name'] =$login_name;
                header('Location:form.php');
                exit();

                //ログイン失敗時の処理
            }else {
                print"入力に間違いがあります";
            }
        }

   } catch (PDOException $e) {
       $db = NULL;
       die("エラーメッセージ:{$e->getMessage()}");
   }$smarty->display('smar_login.tpl');