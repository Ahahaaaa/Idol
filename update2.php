<?php 
    $id = $_GET['id'];
    $user='postgres';
$password ='Hara1215';
$dbName='postgres';
$host='localhost';

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
    $sql = UPDATE aidle SET  = (値1), (カラム名2) = (値2) WHERE (条件);
    if ($stmt = $pdo->prepare($sql)) {
        //$stmt->bindValue(':name', $name, PDO::PARAM_STR);
        //$stmt->bindValue(':birth', $birth, PDO::PARAM_INT);
        //$stmt->bindValue(':age', $age, PDO::PARAM_INT);
        //$stmt->bindValue(':from', $from, PDO::PARAM_STR);
        $stmt->execute();
    }

    $pdo = null;
?>
<form action="test.php" method="post">
		<input type="submit" value="戻る">
		</form>
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="update3.php">
     $_GET['ID'];

<ul>
      <li>
        <label>名前：<br>
        <input type="text" name="name" placeholder="名前を入れてください。">
        </label>
      </li>
      <li>
        <label>誕生日：<br>
        <input type="text" name="birth" placeholder="誕生日を入れてください。">
        </label>
      </li><li>
        <label>年齢：<br>
        <input type="text" name="age" placeholder="年齢を入れてください。">
        </label>
      </li>
      <li>
        <label>出身地：<br>
        <input type="text" name="from" placeholder="出身地を入れてください。">
        </label>
      </li>
      <li><input type="submit" value="変更する"></li>
    </ul>
  </form>

</body>
</html>