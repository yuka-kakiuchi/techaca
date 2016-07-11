<?php
session_start();
require_once('MySmarty.class.php');
require_once 'db.php';
$smarty=new MySmarty();

//------------------------------------
//
//
//今出ているエラーについて
//①if(isset以降で表示されなくなる
//②その前で、「exit();」をすると、表示される。条件分岐の部分を切り取りし、localhostを再読み込みすると正常に動く
//login.phpとnewMem.phpで同様のことが起きる
//
//
//-----------------------------------

if(isset($_POST["login"])) {
    try {
        $db = getDb();

        $user_id=$_POST['id'];
        $password=$_POST['password'];

        if(isset($_POST['id'])&&isset($_POST['password'])){
            $stt=$db->prepare("SELECT*FROM member WHERE id = '$user_id'");
            $stt->excute();






        }else
            print"正しく入力して下さい。";
        header("Location:login.php");
        exit();


    }catch(PDOException $e){
        $db=NULL;
        die("エラーメッセージ:{$e->getMessage()}");

    }

}else{
    print"全て入力してください。";
    header("Location:login.php");
    exit();
}


// ログインボタンが押された場合

$smarty->display('login.tpl');
?>