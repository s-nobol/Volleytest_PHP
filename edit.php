<?php

//ここでは送信されたデータをもとにSQLにデータを挿入してきます。
if(isset($_POST['FastText']) && isset($_POST['SecondText'])) {

　//データベースに書き込み
  try {
    $db =new PDO('データベース接続文字列','ユーザー名','パスワード');
    $write=$db->prepare('INSERT INTO android_test (name,text) VALUES(:name,:text)');
    $write->bindvalue(':name',$_POST['FastText']);
    $write->bindvalue(':text',$_POST['SecondText']);
    $write->execute();
    $db=null;

  } catch (Exception $e) {
  }
}
 ?>
