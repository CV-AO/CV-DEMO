<div class="timeline-block">
	<h2>Timeline</h2>
	<!--<p>Random text...</p>-->
	<div class='timeline' data-tl-autoinit data-tl-lineColor="rgb(255, 255, 255)" data-tl-background="rgb(255, 255, 255)" data-tl-color="#0084c2" data-tl-img="url('https://sailfishos.org/images/design/Sailfish-Apps-icon-story_thumb.jpg')">
	<!-- 要素追加部 -->
        <div id="ajload"></div>
	<?php
		$i = 0;
		$defdisp = 5;
		// 最新の5件のCLIPを初期表示(上にあるほど新しい)
		// ※最新分1件のみ、上段のajloadで読み込んでいる。
		foreach ($timeline as $value) {
			if ($i != 0 && $i < $defdisp) {
				echo '<div class="timeline-block">';
				echo '<h2>';
				echo $value['text'];
				echo '</h2>';
				echo '<!--<p>'.$value['filename'].'"</p>-->';
				echo '</div>';
			} else { }
			$i++;
		}
	?>
</div>
