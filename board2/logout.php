<?php
require_once('MySmarty.class.php');
require_once  'db.php';
$smarty = new MySmarty();

    session_start();

    // セッション変数のクリア
    $_SESSION = array();

    // セッションクリア
    session_destroy();

$smarty->display('smar_logout.tpl');

print "ログアウトしました。";


