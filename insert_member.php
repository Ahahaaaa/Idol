<!-- <html>
<body>
    <form>
<ul>
      <li>
        <label>名前：<br>
        <input type="text" name="name" placeholder="名前を入れてください。">
        </label>
      </li>
      <li>
        <label>誕生日：<br>
        <input type="text" name="day" placeholder="誕生日を入れてください。">
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
      <li><input type="submit" value="追加する"></li>
    </ul>
  </form>
  <form action="display.php" method="post">
 <input type="submit" value="戻る">

</body>
</html> -->
<?php
    // require_once('./dbConfig.php');

    // 接続
    
$user='postgres';

$password ='Hara1215';

$dbName='postgres';

$host='localhost';

    try {
        $dsn="pgsql:host={$host};dbname={$dbName}";
       
        $pdo = new PDO($dsn, $user, $password);
    } catch (PDOException $e) {
        die("接続に失敗しました" . $e->getMessage());
    }?>
    <form>
<ul>
      <li>
        <label>名前：<br>
        <input type="text" name="name" placeholder="名前を入れてください。">
        </label>
      </li>
      <li>
        <label>誕生日：<br>
        <input type="text" name="day" placeholder="誕生日を入れてください。">
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
      <li><input type="submit" value="追加する"></li>
    </ul>
  </form>


    // レコード追加
    <?php
    $sql = "INSERT INTO aidle (id, name, birth,age,from) VALUES (null, :name, :birth, :age, ;from)";
    if ($stmt = $pdo->prepare($sql)) {
        $stmt->bindValue(':name', $aidle_name, PDO::PARAM_STR);
        $stmt->bindValue(':birth', $aidle_birth, PDO::PARAM_INT);
        $stmt->bindValue(':age', $aidle_age, PDO::PARAM_INT);
        $stmt->bindValue(':from', $aidle_from, PDO::PARAM_STR);
        $stmt->execute();
    }

    $pdo = null;

    echo $name . "を追加しました。";
?>
<form action="display.php" method="post">
 <input type="submit" value="戻る">