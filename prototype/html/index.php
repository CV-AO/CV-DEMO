<?php
$link = mysql_connect('localhost','kumagai','kuma110H');
if(!$link){
	die('データベースに接続できません' . mysql_error());
}
$db_selected = mysql_select_db('test',$link);
if (!$db_selected){
    die('データベース選択失敗です。'.mysql_error());
}
$result = mysql_query("SELECT dic_isbn FROM test_dic");
if (!$result) {
    die('クエリーが失敗しました。'.mysql_error());
}

mysql_close($link);

//$results = mysql_fetch_allay($result);
//print_r($results);
while ($row = mysql_fetch_assoc($result)) {
//foreach ($results as $isbn => $dic_isbn) {
require_once "Services/Amazon.php";
$amazon = new Services_Amazon("AKIAJ7WN4P2G5GZNOTRQ", "rlyszNP6hA/KxNET9eu3YpiyQNWr9jFCIBaAJ7Ip", "topper110h-22");
$amazon->setLocale("JP");
$response = $amazon->ItemLookup($row["dic_isbn"],array(//'9784063871494'
//$response = $amazon->ItemLookup(array(
//	'ItemId' => '9784063871494',
	'ResponseGroup' => 'Images,ItemAttributes',
	'IdType' => 'ISBN', 
	'SearchIndex' => 'Books',
//	'AssociateTag' => 'topper110h-22',
));
//print_r($response);
echo "<img src='".$response['Item'][0]['LargeImage']['URL']."' width='200'>";
}
?>

