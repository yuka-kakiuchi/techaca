<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>電卓</title>
</head>
<body>
<font size="5">電卓</font>　
  <form method="post" action="calc.php">         <!--型を作る-->
    <input type="text" name="no1" size="10">        <!--1つ目の箱-->
    <select name="select">                           <!--四則演算選択-->
        <option value="plus">+</option>
        <option value="minus">-</option>
        <option value="multiply">×</option>
        <option value="division">÷</option>
     </select>
     <input type="text" name="no2" size="10">        <!--２つめの箱-->
　　　＝

<!--答えの部分-->
<?php
//number1とnumber2に値がセットされる時のみ処理をする
 if(isset($_POST['no1']) && isset($_POST['no2'])&&isset($_POST['select'])) {
     $answer = "";
        //数値かどうかの判断
        if (is_numeric($_POST['no1']) && is_numeric($_POST['no2'])) {
            //+の場合
                if ($_POST['select'] == 'plus') {
                     $answer = $_POST['no1'] + $_POST['no2'];
                }
             //-の場合
                else if ($_POST['select'] == 'minus') {
                          $answer = $_POST['no1'] - $_POST['no2'];
                 }
            //×の場合
                else if ($_POST['select'] == 'multiply') {
                          $answer = $_POST['no1'] * $_POST['no2'];
                 }
            //÷の場合
                 else if ($_POST['select'] == 'division') {
                     //0で割る場合
                      if ($_POST['no2'] == 0) {
                         print "0で割れません";
                      } else {
                 $answer = $_POST['no1'] / $_POST['no2'];
                      }
                 } else {
                     print "数字を入れてください";
                 }
         echo "$answer";
     } else {
         print "計算できません";
     }
 }
     ?>
   <!--答えの部分終わり-->

    <br/>
 <!--機能BOX-->
  <input type="submit" value="計算"/>
  <input type="reset" value="クリア">
</form>
</body>
</html>
