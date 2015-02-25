<?php
/* 最新の登録データのみを取得 */
namespace Model;

class Newtimeline extends \Model {
        public static function get_results()
        {
                $results = \DB::query('SELECT * FROM ao_timeline ORDER BY time DESC limit 1')->execute();
                return $results->as_array();
        }
}

