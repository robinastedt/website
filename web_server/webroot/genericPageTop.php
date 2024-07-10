<!-- genericPageTop.php START -->

<?php
	include_once("commonTop.php");
	include_once("utilities.php");
?>

<html>
	<head>
		<?php include_once("commonHead.php"); ?>

		<?php $noCSS = $disableFont = isset($_GET["noCSS"]) ? $_GET["noCSS"] : 0; ?>

		<?php if($noCSS != 1) : ?>
			<link rel="stylesheet" type="text/css" href="/css/main.css" />
			<link rel="stylesheet" type="text/css" href="/css/readability_switch_link.css" />
			<?php echoCSSFont('main'); ?>
			<link rel="stylesheet" type="text/css" href="/css/notIE9.css" />
			<link rel="stylesheet" type="text/css" href="/css/semicolon_a.css" />
		<?php endif; ?>

	</head>
	<body>
		<div class="contentBox" id="topContentBox">

<!-- genericPageTop.php END -->
