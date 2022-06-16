<?php
$gobackURL = "searchform.html";

// 文字エンコードの検証
// if (!cken($_POST)){
//   header("Location:{$gobackURL}");
//   exit();
// }

// nameが未設定、空のときはエラー
if (empty($_POST)){
  header("Location:searchform.html");
  exit();
} else if(!isset($_POST["name"])||($_POST["name"]==="")){
  header("Location:{$gobackURL}");
  exit();
}

// データベースユーザ
$user = 'postgres';
$password = 'Hara1215';
// 利用するデータベース
$dbName = 'postgres';
// MySQLサーバ
$host = 'localhost';
// MySQLのDSN文字列
$dsn = "pgsql:host={$host};dbname={$dbName}";
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>レコードを取り出す（すべて)</title>
<link href="../../css/style.css" rel="stylesheet">
<!-- テーブル用のスタイルシート -->
<link href="../../css/tablestyle.css" rel="stylesheet">
</head>
<body>
<div>
  <?php
  $name = $_POST["name"];
  //MySQLデータベースに接続する
  try {
    $pdo = new PDO($dsn, $user, $password);
    // プリペアドステートメントのエミュレーションを無効にする
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    // 例外がスローされる設定にする
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // SQL文を作る
    $sql = "SELECT * FROM member WHERE name LIKE(:name)";
    // プリペアドステートメントを作る
    $stm = $pdo->prepare($sql);
    // プレースホルダに値をバインドする
    $stm->bindValue(':name', "%{$name}%", PDO::PARAM_STR);
    // SQL文を実行する
    $stm->execute();
    // 結果の取得（連想配列で受け取る）
    $result = $stm->fetchAll(PDO::FETCH_ASSOC);
    if(count($result)>0){
      echo "名前に「{$name}」が含まれているレコード";
      // テーブルのタイトル行
      echo "<table>";
      echo "<thead><tr>";
      echo "<th>", "番号", "</th>";
      echo "<th>", "名前", "</th>";
      echo "<th>", "誕生日", "</th>";
      echo "<th>", "年齢", "</th>";
      echo "<th>", "出身地", "</th>";;
      echo "</tr></thead>";
      // 値を取り出して行に表示する
      echo "<tbody>";
      foreach ($result as $row){
        // １行ずつテーブルに入れる
        echo "<tr>";
        echo "<td>", $row['aidle_no'], "</td>";
        echo "<td>", $row['aidle_name'], "</td>";
        echo "<td>", $row['aidle_birthday'],"</td>";
        echo "<td>", $row['aidle_age'], "</td>";
        echo "<td>", $row['aidle_from'], "</td>";
        echo "</tr>";
      }
      echo "</tbody>";
      echo "</table>";
    } else {
      echo "名前に「{$name}」は見つかりませんでした。";
    }
  } catch (Exception $e) {
    echo '<span class="error">エラーがありました。</span><br>';
    echo $e->getMessage();
  }
  ?>
  <hr>
  <p><a href="<?php echo $gobackURL ?>">戻る</a></p>
</div>
</body>
</html>
