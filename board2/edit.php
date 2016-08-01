<?php
session_start();
require_once('MySmarty.class.php');
require_once 'db.php';

$smarty=new MySmarty();



/*投稿一覧を表示する
 * DBテーブルをつなげる
 *ログイン時のSEIONSからコンテンツを抽出し、投稿された順番に並べる
 *
 */
    //DBに接続
    try{
        $db = getDb();

        //結合したテーブルからデータを取得し、投稿順に並べ替える
        $stt = $db -> prepare('SELECT contents,id From post,member ORDER BY id ');
        $stt -> execute();
        
        //繰り返し出力処理
        $data = array();
        while ($row = $stt->fetch(PDO::FETCH_ASSOC)) {
            $data[] = $row;
        }
        
        //Smartyにcontentsという名前で配列を渡す
        $smarty -> assign('datas',$data);
        $db = NULL;

    }catch(PDOException $e){
        $db=NULL;
        die("エラーメッセジ:{$e->getMessage()}");
    }$smarty->display('smar_edit.tpl');


/*

try{
                $id=$_POST['id'];
                $user_id=$_POST['user_id'];
                $contents=$_POST['contents'];

                $db = getDb();

                $stt=$db->prepare("UPDATE post SET contents='$contents' WHERE id='$user_id'");
                $stt->bindValue(':contents', $_POST['contents']);
                //smar_form.tplに表示させる
                $smarty->assign('id',$user_id);
                $smarty->assign('user_id',$user_id);
                $smarty->assign('contents',$contents);


                $stt->execute();
                $db=NULL;

    }catch(PDOException $e){
                $db=NULL;
                die("エラーメッセジ:{$e->getMessage()}");
            }

        }$smarty->display('smar_edit.tpl');
    }
*/