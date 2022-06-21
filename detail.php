<?php
    // require_once('./dbConfig.php');

    // 接続
    
$user='postgres';
$password ='Hara1215';
$dbName='postgres';
$host='localhost';
$dsn="pgsql:host={$host};dbname={$dbName}";
$id= $_POST['id'];

?>
<?php
try {
  $pdo = new PDO($dsn, $user, $password);
  $dsn="pgsql:host={$host};dbname={$dbName}";
  $sql = "SELECT * FROM aidle WHERE aidle_no =".$id;
  $stm = $pdo->prepare($sql);
  $stm->execute();
  $result = $stm->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  die("接続に失敗しました" . $e->getMessage());
}
  
$pdo = null;
foreach ($result as $row){
  $id = $row['aidle_no'];
  $aidle_name = $row['aidle_name'];
  $aidle_birth = $row['aidle_birth'];
  $aidle_age = $row['aidle_age'];
  $aidle_from = $row['aidle_from'];
}
echo "番号:",$id;
echo '<br>';
echo "名前:",$aidle_name;
echo '<br>';
echo "誕生日:",$aidle_birth;
echo '<br>';
echo "年齢:",$aidle_age;
echo '<br>';
echo "出身地:",$aidle_from;

?>
<form action="test.php" method="post">
		<input type="submit" value="戻る">
		</form>