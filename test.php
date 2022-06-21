<?php


$user='postgres';

$password ='Hara1215';

$dbName='postgres';

$host='localhost';

$dsn="pgsql:host={$host};dbname={$dbName}"; //;charset=utf-8';
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>レコードを取り出す（すべて）</title>
</head>
<body>
<div>
  <?php
  //MySQLデータベースに接続する
  try {
    $pdo = new PDO($dsn, $user, $password);
    
    // プリペアドステートメントのエミュレーションを無効にする
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    // 例外がスローされる設定にする
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "データベース{$dbName}に接続しました。", "<br>";
    // SQL文を作る（全レコード）
    $sql = "SELECT * FROM aidle";
    // プリペアドステートメントを作る
    $stm = $pdo->prepare($sql);
    // SQL文を実行する
    $stm->execute();
    // 結果の取得（連想配列で返す）
    $result = $stm->fetchAll(PDO::FETCH_ASSOC);
    // テーブルのタイトル行
    echo "<table>";
    echo "<thead><tr>";
    echo "<th>", "番号", "</th>";
    echo "<th>", "名前", "</th>";
    echo "<th>", "誕生日", "</th>";
    echo "<th>", "年齢", "</th>";
    echo "<th>", "出身地", "</th>";
    echo "</tr></thead>";

    // 値を取り出して行に表示する
    echo "<tbody>";
    foreach ($result as $row){
      // １行ずつテーブルに入れる
      echo "<tr>";
      echo "<td>", $row['aidle_no'], "</td>";
      echo "<td>", $row['aidle_name'], "</td>";
      echo "<td>", $row['aidle_birth'], "</td>";
      echo "<td>", $row['aidle_age'], "</td>";
      echo "<td>", $row['aidle_from'], "</td>";?>
      <td><a href="edit.php?id=<?php echo $row['aidle_no']; ?>">編集</a></td>
+     <td><a href="delete.php?id=<?php echo $row['aidle_no']; ?>">削除</a> ?>  <tr> 
	<td>
		<form action="edit.php" method="post">
		<input type="submit" value="変更する">
    <input type="hidden" name="id" value="<?=$row['aidle_no']?>">
		</form>
		</form>
	</td>
	<td>
    
		<form action="delete2.php" method="post">
		<input type="submit" value="削除する">
		<input type="hidden" name="id" value="<?=$row['aidle_no']?>">
		</form>
	</td>
    <td>
		<form action="detail.php" method="post">
		<input type="submit" value="詳細">
		</form>
	</td>
</tr> 

     <?php echo "</tr>";
    }
    
    echo "</tbody>";
    echo "</table>";
  } catch (Exception $e) {
    echo '<span class="error">エラーがありました。</span><br>';
    echo $e->getMessage();
    exit();
  }
  ?>
  <form method="POST" action="insert_member.php">
    <input type="submit" value="追加する">
  </form>
</div>
</body>
</html>