<?php
/* 全ての登録データを取得 */
namespace Model;

class Timeline extends \Model {
	public static function get_results()
	{
		$results = \DB::query('SELECT * FROM ao_timeline ORDER BY time DESC')->execute();
		return $results->as_array();
	}
}

