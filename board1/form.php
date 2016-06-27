<?php
  require_once 'db.php';
  require_once 'escape.php';
?>

<html>
 <head>
   <meta http-equiv="content-type" content="text/html; charset=UTF-8">
   <title>掲示板１</title>
 </head>




 <body>
 　<h1>掲示板</h1>
    <!--型作り-->
     <form method="post" action="form.php">
        <p>名前:<input type="text" name="name"></p>
           本文：<br>
         　 　<textarea name="contents"></textarea>
              <p><input type="submit" value="投稿する"></p>
        </form>


    <!--DBに接続し、表示するまでの工程-->
    <?php

      try{                  //データベースに接続
          $db=getDb();


          if (isset($_POST['name']) && isset ($_POST['contents'])) {
              $stt=$db->prepare('INSERT INTO post(name,contents) VALUES(:name,:contents)');   //準備　       　*prepare＝データベースに対し、発行したいSQLを指定
              $stt->bindValue(':name', $_POST['name']);                              //入力値セット　 *bindValue＝値をセットする
              $stt->bindValue(':contents', $_POST['contents']);
              $stt->execute();                                                        //命令を実行　
              $stt=NULL;
          }else{
             print"全て入力してください";
          }

              $stt=$db->prepare('SELECT * FROM post ORDER BY id');              //データを並べる　*ID順
              $stt->execute();                                                     //命令を実行
              while ($row = $stt->fetch(PDO::FETCH_ASSOC)) {         //繰り返し処理

                   //出力フォームの作成
                     print "名前：". e($row['name']);
                     print("<br>");
                     print "本文：". e($row['contents']);
                     print("<br><br>");
              }
              $stt=NULL;


        //エラー処理
            $db=NULL;
      }catch(PDOException $e) {
             die("エラーメッセージ:{$e->getMessage()}");
      }



    ?>
 </body>
</html>