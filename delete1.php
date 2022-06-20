<?php

try {

    $user = "postgres";
    $password = "Hara1215";

    $dbh = new PDO("mysql:host=localhost; dbname=postgres; charset=utf8", "$user", "$password");

    $stmt = $dbh->prepare('DELETE FROM aidol WHERE aidle_no = :aidle_no');

    $stmt->execute(array(':aidle_no' => $_GET["aidle_no"]));

    echo "削除しました。";

} catch (Exception $e) {
          echo 'エラーが発生しました。:' . $e->getMessage();
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>削除完了</title>
  </head>
  <body>          
  <p>
      <a href="test.php">投稿一覧へ</a>
  </p> 
  </body>
</html>