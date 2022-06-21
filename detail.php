<?php
    // require_once('./dbConfig.php');

    // 接続
    
$user='postgres';
$password ='Hara1215';
$dbName='postgres';
$host='localhost';

$id = $_POST['aidle_no]'];
$name = $_POST['aidle_name'];
$birth = $_POST['aidle_birth'];
$age= $_POST['aidle_age'];
$from = $_POST['aidle_from'];

    try {
        $dsn="pgsql:host={$host};dbname={$dbName}";
       
        $pdo = new PDO($dsn, $user, $password);
    } catch (PDOException $e) {
        die("接続に失敗しました" . $e->getMessage());
    }
  
    $pdo = null;

    echo $name;
    echo $birth;
    echo $age;
    echo $from;

?>
<form action="test.php" method="post">
		<input type="submit" value="戻る">
		</form>