<?php
/* テスト用の最新データのみを取得 */
namespace Model;

class Testnewtimeline extends \Model {
        public static function get_results()
        {
                $results = \DB::query('SELECT * FROM demo_ao_timeline ORDER BY time DESC limit 1')->execute();
                return $results->as_array();
        }
}

