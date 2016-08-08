<?php 
session_start();
require_once('MySmarty.class.php');
require_once 'db.php';
$smarty=new MySmarty();


    try{

        //送られてきたデータを変数に格納
        $id = $_POST['id'];
        $user_id = $_POST['user_id'];

        if(isset($id)&&($user_id)){


            if ($user_id == $_SESSION['login_id']) {
                $db = getDb();
                //削除ボタンを押されたpostデータを削除
                $stt = $db->prepare("DELETE FROM post WHERE id = :id ");
                $stt->bindValue(':id', $id);
                $stt->execute();

                print "削除しました";
                $db = NULL;

            }
        }else{
            print "エラーが発生しました";
        }
        
    }catch (PDOException $e) {
        $db = NULL;
        die("エラーメッセージ:{$e->getMessage()}");
}$smarty->display('smar_delete.tpl');

