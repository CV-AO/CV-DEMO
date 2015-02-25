<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<!--<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8">-->
		<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<meta name="description" content="" />
		<!--<meta http-equiv="refresh" content="30">-->
		<!--[if lt IE 9]>
		<?php echo Asset::js("html5.js"); ?>
		<![endif]-->
		<title>DEMO</title>
		<?php echo Asset::js("prototype.js");
		echo Asset::js("jquery-1.10.2.min.js");
		echo Asset::js("jquery.periodicalupdater.js");
		echo Asset::js("jquery.bottom-1.0.js");
		echo Asset::js("imagesloaded.js");
		echo Asset::js("skrollr.js");
		echo Asset::js("init.js");
		echo Asset::js("timeline.js");
		echo Asset::css("timeline.css");
		echo Asset::js("menuitems.js");
		echo Asset::css("menuitems.css");
		echo Asset::js("textfill.js");
		echo Asset::js("prettify.js");
		echo Asset::css("prettify.css");
		echo Asset::js("run_prettify.js");
		echo Asset::js("buttons.js",array("defer id" => "github-bjs"));
		echo Asset::css("normalize.css");
		echo Asset::css("default.css");
		echo Asset::js("default.js");
		echo Asset::css("font-awesome.min.css");
		echo Asset::css("designer.css");
		echo Asset::js("designer.js");
		?>
                <script type='text/javascript' id='mainjs'>$(function() {
                        $('.header .company').textfill();
		});</script>
		<script type='text/javascript'>$(function() {
			// 自動更新
			// ajload要素にデータを追加していく
			$.PeriodicalUpdater(
				'/parts.php',
				{
					frequency: 1,
				},
				function(data){
					$('#ajload').after(data);
				});
        	});</script>
	</head>

	<body class='header_relative'>
	<div class='body '>
		<div class='header thin relative mobile_hide_logo ' style="">
			<div class='container'>
				<div class='company has_logo'>
					<a href="" style="color:#0084c2"><div><h1>DEMO</h1></div></a>
				</div>
				<ul class='menu'>
					<li class="" >
						<a href=''><span>Home</span></a>	
					</li>
					<li class="" >
						<a href='' data-mi-scrollTo="demo"><span>Demo</span></a>
					</li>
					<li class="">
						<a href='/test'><span>Test</span></a>
					</li>
				</ul>                 
				<div class="toggle_container">
					<div>
						<div class="toggle">
							<button><i class='fa fa-reorder'></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class='scroll'>

			<section class="homeSlideTall menuItem" id='demo' data-mi-title='Demo' data-mi-autoinit style='background: #00bfff'>
			<div id="container" style="position:absolute; width:100%; top:0; bottom:0;z-index:-1;"></div>

			<div class="bcg centered">
			<!--<h1></h1>-->
			<div class='timeline' data-tl-autoinit data-tl-orientation='[{"min":900, "orientation": "horizontal"}]' data-tl-lineColor="#0084c2" data-tl-background="#0084c2" data-tl-color="white">

			<!-- GMAP START -->
                        <div class="timeline-block">

                                <h2>MAP</h2>
                                <iframe src="./gmap" frameborder="0" allowfullscreen style="min-height: 200px;"></iframe>
                                <p>
				<?php
					//echo Html::anchor("gmap", "大きなMAPで見る");
				?></p>

                        </div>
			<!-- GMAP END -->

			<!-- ENTRY START -->
			<?php
				require("contents.php");
			?>
			<!-- ENTRY END -->

			<!--<div class="timeline-block" data-tl-date="15th July 2014 - 30th July 2014">

				<h2>Horizontal and Vertical Layouts</h2>
				<p>This time line comprising of 3 entries is configured to adapt to different screen sizes. On mobiles, it collapses into a vertical layout. At a specified pixel size it expands back to a horizontal view.</p>
			</div>-->

			</div>
			</div>
			</section>

			<section class='footer' id="footer" class="homeSlideTall">
			<div class="bcg centered" style="background: transparent;color:black;padding: 40px 0; ">
			<div class='text_content'>
				<p>CV by AO</p>
			</div>
			</div>
			</section>

		</div>
	</div>
	</body>
</html>
