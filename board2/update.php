<?php
session_start();
require_once('MySmarty.class.php');
require_once 'db.php';

$smarty=new MySmarty();

  try{
      $db = getDb();

      //変更内容の格納
      $contents = e($_SESSION["contents"]);

      //データの変更
      $sql = "UPDATE post SET contents = :$contents WHERE  ";
  }catch(PDOException $e){
      $db=NULL;
      die("エラーメッセジ:{$e->getMessage()}");
  }$smarty->display('smar_edit.tpl');