<?php
//ユーザー名とパス両方書いてるか否か
if (isset($_POST['id'])&&isset($_POST['name']) && isset($_POST['password'])){

    //ユーザーIDが半角英数字で記入されているかの確認
    if (preg_match("/^[a-zA-Z0-9]+$/",$_POST['id'])){

        //パスワードが短すぎないかの確認
        if (strlen($_POST['password']) > 6) {

            //ユーザーIDが重複していないかどうかの確認
            if ($stt = $db->prepare("SELECT DISTINCT membert FROM id;")) {
                //会員情報をDBに登録
                $stt = $db->prepare('INSERT INTO member(id,name,password) VALUES(:id,:name,:password)');
                $stt->bindValue(':id', $_POST['id']);
                $stt->bindValue(':name', $_POST['name']);
                $stt->bindValue(':password', $_POST['password']);
                $stt->execute();
                $stt = NULL;
                $db=NULL;
                header('Location:form.php');
                exit;
            } else {
                header('Location:newmem.php');
                echo 'このユーザーは既に登録されています。';
                exit;
            }

        }else{
            header('Location:newmem.php');
            print "パスワードが短すぎます。６文字以上で設定をしてください。";
            exit;
        }

    }else {
        header('Location:newmem.php');
        print '半角英数字で入力してください';
        exit;
    }

}else{
    //最初に入力されていないものがある時の処理
    //header('Location:newmem.php');
    print"全て入力してください";
    //exit;
}
