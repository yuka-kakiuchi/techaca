<?php
session_start();
require_once('MySmarty.class.php');
require_once 'db.php';
$smarty=new MySmarty();

 try{
     $db=getDb();
       //ログイン状況の確認
       if(isset($_SESSION['login_id'])&&($_SESSION['login_password'])&&isset($_SESSION['login_name'])){
           //データをを変数に格納
           $user_id = $_SESSION['login_id'];
           $user_name = $_SESSION['login_name'];
           //データ入力があった際、DBに記録する処理
            if(isset($_POST['contents'])) {
                if ($_POST['contents']!='') {
                    $stt = $db->prepare('INSERT INTO post(contents,user_id) VALUES(:contents,:user_id)');
                    $stt->bindValue(':contents', $_POST['contents']);
                    $stt->bindValue(':user_id', $user_id);
                    $stt->execute();
                    $stt = NULL;
                }
            }

           $stt = $db->prepare('SELECT post.id,post.user_id,post.contents,member.name 
                                From post LEFT JOIN member ON post.user_id = member.id ORDER BY post.id');
           $stt->execute();
           
           //smartyで表示させるための処理
           $data = array();
           while ($row = $stt -> fetch(PDO::FETCH_ASSOC)) {
              $data[] = $row;
           }
           //Smartyに配列を渡す
           $smarty -> assign('data',$data);
           $smarty -> assign('user_id',$user_id);

       //ログインできていなかった時の処理
       }else {
           header('Location:login.php');
           print 'エラーが発生しました。もう一度ログインしてください';
           exit();
       }
 }catch(PDOExcepion $e){
            $db = NULL;
            die("エラーメッセージ:{$e->getMessage()}");

 }$smarty->display('smar_form.tpl');