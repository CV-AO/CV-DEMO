<?php
/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.7
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2014 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * Use Model
 */
use \Model\Timeline;
use \Model\Newtimeline;

/* Test Page Model */
use \Model\Testtimeline;
use \Model\Testnewtimeline;

/**
 * The Timeline Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Timeline extends Controller
{

	/**
	 * Timeline
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
		$data['timeline'] = Timeline::get_results();
		return Response::forge(View::forge('timeline/index',$data));
	}

	public function action_gmap()
	{
		$data['timeline'] = Timeline::get_results();
		return Response::forge(View::forge('timeline/gmap',$data));
	}

        public function action_contents()
        {
                $data['timeline'] = Timeline::get_results();
                return Response::forge(View::forge('timeline/contents',$data));
        }

        public function action_parts()
        {
                $data['newtimeline'] = Newtimeline::get_results();
                return Response::forge(View::forge('timeline/parts',$data));
        }

	/* Test Page */
        public function action_test()
        {
                $data['timeline'] = Testtimeline::get_results();
                return Response::forge(View::forge('timeline/test',$data));
        }

        public function action_testgmap()
        {
                $data['timeline'] = Testtimeline::get_results();
                return Response::forge(View::forge('timeline/testgmap',$data));
        }

        public function action_testparts()
        {
                $data['newtimeline'] = Testnewtimeline::get_results();
                return Response::forge(View::forge('timeline/testparts',$data));
        }
}

