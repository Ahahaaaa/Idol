<?php
    // require_once('./dbConfig.php');

    // 接続
    
$user='postgres';
$password ='Hara1215';
$dbName='postgres';
$host='localhost';

// $number = $_POST['number'];
$name = $_POST['name'];
$birth = $_POST['birth'];
$age= $_POST['age'];
$from = $_POST['from'];

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