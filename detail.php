<?php
    // require_once('./dbConfig.php');

    // 接続
    
$user='postgres';
$password ='Hara1215';
$dbName='postgres';
$host='localhost';
?>
<?php
try {
  $dsn="pgsql:host={$host};dbname={$dbName}";
  $sql = "SELECT * FROM aidle WHERE aidle_no = :aidle_no";
  $pdo = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
  die("接続に失敗しました" . $e->getMessage());
}
  
    $pdo = null;

   

?>
<form action="test.php" method="post">
		<input type="submit" value="戻る">
		</form>