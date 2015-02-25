<meta http-equiv="refresh" content="10" >
<h1>CV Demo. 開発確認用</h1>
<table border="2">
<tr>
	<td>ID</td>
	<td>緯度</td>
	<td>経度</td>
	<td>取得日時(YYYYMMDDhhmmss)</td>
	<td>解析結果</td>
	<td>音声ファイル名</td>
</tr>
<?php
//	print_r($timeline);
	foreach ($timeline as $value) {
		echo "<tr>";
  		echo "<td>".$value['id']."</td>";
		echo "<td>".$value['latitude']."</td>";
		echo "<td>".$value['longtude']."</td>";
		echo "<td>".$value['time']."</td>";
  		echo "<td>".$value['text']."</td>";
		echo "<td>".$value['filename']."</td>";
		echo "</tr>";
	}
?>
</table>
