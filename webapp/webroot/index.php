
<?php include_once("utilities.php"); ?>
<html>
	<head>
		<!--[if IE]><META http-equiv="refresh" content="0;URL=/UnsupportedBrowser/"><![endif]-->
		<title>Robin &Aring;stedt</title>
		<link rel="stylesheet" type="text/css" href="/css/front.css">
		<link rel="stylesheet" type="text/css" href="/css/readability_switch_link.css">
		<?php echoCSSFont('front'); ?>	
		<link rel="stylesheet" type="text/css" href="/css/notIE9.css" />
		<meta name="keywords" content="Robin &Aring;stedt, Programming, Music, Poetry, Java, .NET, C#, Projects">
		<meta name="author" content="Robin &Aring;stedt">
		<meta name="description" content="Robin &Aring;stedt: My personal website showcasing ongoing programming projects as well music and texts made by me.">
		<?php include_once("analytics.php"); ?>
	</head>
	<body>
		<div id="wholepageBox">
			<div id="mainBox">
				<div id="titleBox"><a target="_blank" href="mailto:robin.astedt@gmail.com"><div class="title1">Robin &Aring;stedt</div><div class="title2">Contact</div></a></div>
				<div id="linkBox">
					<p><?php echoLink("Music", "/Music/")?> | <?php echoLink("Projects", "/Projects/")?> | <?php echoLink("Text", "/Text/")?></p>
				</div>
			</div>
		</div>
		<?php echoReadabilitySwitchLink() ?>
	</body>
</html>