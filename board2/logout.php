<?php
 session_start();

//ログアウトボタンが押された時の処理
if($_POST["logout"]=="logout"){
    session_destroy();      // セッションクリア
    $_SESSION = array();   // セッション変数のクリア
}print "ログアウトしました。";

$smarty->display( 'logout.tpl' );
 ?>
