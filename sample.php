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
    $sql = "INSERT INTO aidle(aidle_no, aidle_name, aidle_birth,aidle_age,aidle_from) VALUES(0,'".$name."','".$birth."',".$age.",'".$from."')";
    if ($stmt = $pdo->prepare($sql)) {
        $stmt->execute();
    }

    $pdo = null;

    echo $name . "を追加しました。";
?>
<form action="test.php" method="post">
		<input type="submit" value="戻る">
		</form>