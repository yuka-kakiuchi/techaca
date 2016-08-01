<?php 
session_start();
require_once('MySmarty.class.php');
require_once 'db.php';
$smarty=new MySmarty();


 if(isset($_GET['cintents'])){
    $delete_data = $_GET['contents']; 
 }
    try {
        $db = getDb();
       //削除するデータの方法を取得
        $stt = $db->prepare("SELECT * FROM post WHERE contents = '$delete_data'  ");


           //送信されたPOST情報を格納
            $login_id = $_POST['login_id'];
            $login_password = $_POST['login_password'];
            $login_name = $_POST['login_name'];
            

           

            


    }
}catch (PDOException $e) {
    $db = NULL;
    die("エラーメッセージ:{$e->getMessage()}");
}$smarty->display('edit.php');








 /*try {
      $db = getDb();
          if (isset($_GET['delete'])) {
            $delete = $_POST['delete'];

            //データベースからdeleteする投稿を取得
            $sql = 'DELETE FROM post where id = $id';
            $stt = $db->prepare($sql);
            $stt->bindParam(':delete_id', $id, PDO::PARAM_INT);
            $stt->execute();

            // 削除メッセージの表示
            echo "投稿を削除しました";
            $db = NULL;
            $stt = NULL;

        }
 }catch (PDOException $e) {
     $db = NULL;
     die("エラーメッセージ:{$e->getMessage()}");
 }$smarty->display('edit.php');
?>