<?php
    // require_once('./dbConfig.php');

    // 接続
    
$user='postgres';
$password ='Hara1215';
$dbName='postgres';
$host='localhost';

$id= $_POST['id'];
$aidle_name = $_POST['name'];
$aidle_birth = $_POST['birth'];
$aidle_age= $_POST['age'];
$aidle_from = $_POST['from'];

try {
    $dsn="pgsql:host={$host};dbname={$dbName}";

    $pdo = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    die("接続に失敗しました" . $e->getMessage());
}
$sql = "UPDATE aidle SET aidle_name='".$aidle_name."',aidle_birth='".$aidle_birth."',aidle_age=".$aidle_age.",aidle_from='".$aidle_from."' WHERE aidle_no=".$id;
if ($stmt = $pdo->prepare($sql)) {
        //$stmt->bindValue(':name', $name, PDO::PARAM_STR);
        //$stmt->bindValue(':birth', $birth, PDO::PARAM_INT);
        //$stmt->bindValue(':age', $age, PDO::PARAM_INT);
        //$stmt->bindValue(':from', $from, PDO::PARAM_STR);
        $stmt->execute();
}

$pdo = null;

echo $aidle_name . "を変更しました。";
?>
<form action="test.php" method="post">
     <input type="submit" value="戻る">
</form>