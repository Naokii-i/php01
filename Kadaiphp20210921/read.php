












<?php

// #1 ファイルの読み込み
$f = fopen("data/file.csv", "r");

// #2 テーブルのHTMLを生成
echo "<table>
        <tr>
            <th>名前</th>
            <th>タイトル</th>
            <th>コメント</th>
        </tr>";

// #3 csvのデータを配列に変換し、HTMLに埋め込んでいる
while($line = fgetcsv($f)) {
    echo "<tr>";
    for ($i=0;$i<count($line);$i++) {
        echo "<td>" . $line[$i] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

// #4 ファイルを閉じる
fclose($f);
?>