<?php

// POSTとして送信されてきたときのみ実行
// （通常アクセスはGET, フォーム送信はPOST）
$fp = fopen('data.csv', 'a+b');

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    fputcsv($fp, [$_POST['name'], $_POST['text']]);
    rewind($fp);
}
while ($row = fgetcsv($fp)){
    $rows[] = $row;
}
fclose($fp);

?>

<!DOCTYPE html>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>掲示板</title>
    <h1>掲示板</h1>
<section>
    <form action="" method="post">
    {{ csrf_field() }}
        名前： <input type="text" name="name" value=""><br>
        本文： <input type="text" name="text" value=""><br>
        <button type="submit" >投稿</button>
    </form>
</section>
<section>
    <h2>投稿一覧</h2>
<?php if (!empty($rows)): ?>
    <ul>
<?php foreach ($rows as $row): ?>
        <li><?=$row[1]?> (<?=$row[0]?>)</li>
<?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>投稿はまだありません</p>
<?php endif; ?>
</section>

