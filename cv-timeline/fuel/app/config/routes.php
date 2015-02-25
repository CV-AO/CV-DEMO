<?php
return array(
	'_root_'  => 'timeline/index',  	// CV-Timeline
	//'_root_'  => 'index',         	// The default route
	'_404_'   => 'welcome/404',     	// The main 404 route
	'gmap' => 'timeline/gmap',      	// GoogleMap
	'contents' => 'timeline/contents',	// Contents(Timeline)
	'parts' => 'timeline/parts',            // Ajax parts
	'test' => 'timeline/test',		// Test Code
	'testgmap' => 'timeline/testgmap',	// Test GoogleMap
	'testparts' => 'timeline/testparts',	// Test Ajax parts
	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
);
