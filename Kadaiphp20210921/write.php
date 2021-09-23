<?php

$name = $_POST['name'];
$title = $_POST['title'];
$comment = $_POST['comment'];

// チェックボックスの選択肢を送りたかった
// if (isset($_POST['answer']) && is_array($_POST['answer'])) {
//     $answer = implode("、", $_POST["answer"]);
// }

//ファイルに書き込み
$str = $name . ',' . $title . ',' . $comment . "\n";

$csv = fopen('data/file.csv','a');
fwrite($csv, $str);
fclose($csv);

?>

<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>
    <h1>コメントを受け付けました。ありがとう。これから気持ちよく働けるチームにしていきましょう</h1>

    <ul>
        <li><a href="input.php">戻る</a></li>
    </ul>

</body>

</html>