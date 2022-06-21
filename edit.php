<?php
$user='postgres';
$password ='Hara1215';
$dbName='postgres';
$host='localhost';

// 結果が1行取得できたら
if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $id = $row['id'];
    $title = $row['title'];
    $content = $row['content'];
    <input type="hidden" name="id" value="<?php echo $id; ?>" >
title:<br>
<input type="text" name="title" id="title" style="width:200px;height:50px;" value=<?php echo $title; ?>><br>
content:<br>
<input type="text" name="content" id="content" style="width:200px;height:100px;" value=<?php echo $content; ?>><br>
} else {
    // 対象のidでレコードがない => 不正な画面遷移
    echo "対象のデータがありません。";
}

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

