<?php


$user='postgres';

$password ='Hara1215';

$dbName='postgres';

$host='localhost';

$dsn="pgsql:host={$host};dbname={$dbName}";
?>
<?php
try {
    $dsn="pgsql:host={$host};dbname={$dbName}";
   
    $pdo = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    die("接続に失敗しました" . $e->getMessage());
}
    $sql = "DELETE FROM aidle WHERE aidle_no = :aidle_no";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(':aidle_no' => $_POST["id"]));
    
    //$stmt->execute();
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