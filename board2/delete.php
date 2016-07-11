<?php 
sesssion_start();
require_once('MySmarty.class.php');
require_once 'db.php';
$smarty=new MySmarty();


   

    if (isset($_GET['delete'])) {
        try {
            $db = getDb();
            $delete = $_POST['delete'];


            //データベースからdeleteする投稿を取得
            $sql = 'DELETE FROM post where id = $id';
            $stt = $db->prepare($sql);
            $stt->bindParam(':delete_id', $id, PDO::PARAM_INT);
            $stt->execute();

            // 削除メッセージの表示
            echo "投稿を削除しました";
            $db = NULL;


        } catch (PDOException $e) {
            $db = NULLL;
            die("エラーメッセージ:{$e->getMessage()}");
        }
    }
$smarty->display('edit.php');
?>