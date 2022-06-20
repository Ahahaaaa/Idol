<?php
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
    }?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>変更</title>

    <div class="contact-form">
        <h2>変更</h2>
        <form action="update.php" method="post">
                <input type="hidden" name="id" value="<?php if (!empty($result['id'])) echo(htmlspecialchars($result['id'], ENT_QUOTES, 'UTF-8'));?>">
            <p>
                <label>お名前：</label>
                <input type="text" name="name" value="<?php if (!empty($result['name'])) echo(htmlspecialchars($result['name'], ENT_QUOTES, 'UTF-8'));?>">
            </p>
            <p>
                <label>メッセージ：</label>
                <input type="text" name="message" value="<?php if (!empty($result['message'])) echo(htmlspecialchars($result['message'], ENT_QUOTES, 'UTF-8'));?>">
            </p>

            <input type="submit" value="編集する">

        </form>
    </div>
        <a href="index.php">投稿一覧へ</a>
</body>
</html>
以下のようにデータを変更して、編集するボタンを選択します。

