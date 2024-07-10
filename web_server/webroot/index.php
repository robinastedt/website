<!-- /index.php START -->

<?php
	include_once("commonTop.php");
	include_once("utilities.php");
	$meta_information_description = 'Robin &Aring;stedt: My personal website showcasing ongoing programming projects as well music and texts made by me.';	
?>
<html>
	<head>
		<?php include_once("commonHead.php"); ?>

		<link rel="stylesheet" type="text/css" href="/css/front.css" />
		<link rel="stylesheet" type="text/css" href="/css/readability_switch_link.css" />
		<?php echoCSSFont('front'); ?>	
		<link rel="stylesheet" type="text/css" href="/css/notIE9.css" />
		<link rel="stylesheet" type="text/css" href="/css/semicolon_a.css" />
	</head>
	<body>
		<div id="wholepageBox">
			<div id="mainBox">
				<div id="titleBox"><a target="_blank" href="mailto:robin.astedt@gmail.com"><div class="title1">Robin &Aring;stedt</div><div class="title2">Contact</div></a></div>
				<div id="linkBox">
					<p><?php echoLink("Music", "/music/")?> | <?php echoLink("Projects", "/projects/")?> | <?php echoLink("Text", "/text/")?></p>
				</div>
			</div>
		</div>
		<?php echoReadabilitySwitchLink() ?>
		<?php include_once("commonBodyBottom.php"); ?>
	</body>
</html>

<!-- index.php END -->