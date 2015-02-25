<!DOCTYPE html "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="robots" content="noindex,nofollow,noarchive" />
    <!--<meta http-equiv="refresh" content="10">-->
    <title>MAP</title>

    <script type="text/javascript"
      src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAMqBt4lNEd3TANruFoWgRwY53IG-avXhE&sensor=false">
    </script>

    <script type="text/javascript">
    function initialize() {
	var myOptions = {
		zoom: 17,
		center: new google.maps.LatLng(
<?php
	/* CV 最新の音声クリップ座標 */
	echo $timeline[0]['latitude'].",".$timeline[0]['longtude'];
?>
		),
		mapTypeId: google.maps.MapTypeId.ROADMAP
		};
	var map = new google.maps.Map(document.getElementById("map_canvas"),myOptions);
	var markers = [
<?php
	/* CV 音声クリップを出力（GoogleMap） */
	$i = 0;
	$len = count($timeline) - 1;
	foreach ($timeline as $value) {
	   if($len != $i ){
		echo "['".$value['text']."',".$value['latitude'].",".$value['longtude']."],\n";
	   } else {
		echo "['".$value['text']."',".$value['latitude'].",".$value['longtude']."]\n";
	   }
	   $i++;
	}
?>
        ];
	for (var i = 0; i < markers.length; i++) {
		var name = markers[i][0];
		var latlng = new google.maps.LatLng(markers[i][1],markers[i][2]);
		createMarker(name,latlng,map);
		}
     }
     function createMarker(name,latlng,map){
	var infoWindow = new google.maps.InfoWindow();
	var marker = new google.maps.Marker({position: latlng,map: map});
	google.maps.event.addListener(marker, 'click', function() {
			infoWindow.setContent(name);
			infoWindow.open(map,marker);   
			});
     } 
     google.maps.event.addDomListener(window, 'load', initialize);
     </script>
  </head>
  <body>

    <div id="map_canvas" style="height:100%;"></div>

  </body>
</html>
