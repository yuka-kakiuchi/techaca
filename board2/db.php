<?php
function getDb(){
    //DBの接続情報
    $dsn = 'mysql:dbname=board2;host=localhost';
    $user = 'root';
    $password = 'uuuv3nPx3EfJ5ccE';

    try {
        $db = new PDO($dsn, $user, $password);    //データベース接続
        $db->exec('SET NAMES utf8');           //print '接続成功';
    } catch (PDOException $e) {                   //エラー対応処理
        die("接続エラー：{$e->getMessage()}");
    }
    return $db;
}