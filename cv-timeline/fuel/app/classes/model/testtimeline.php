<?php
/* テスト用の登録データを全て取得 */
namespace Model;

class Testtimeline extends \Model {
	public static function get_results()
	{
		$results = \DB::query('SELECT * FROM demo_ao_timeline ORDER BY time DESC')->execute();
		return $results->as_array();
	}
}

