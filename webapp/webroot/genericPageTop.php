<!--GENERIC TOP START-->

<?php include_once("utilities.php"); ?>

<html><head>

		<?php 
			$noCSS = $_GET["noCSS"];
			echo "\n";
			echo '<!--[if IE]><META http-equiv="refresh" content="0;URL=/UnsupportedBrowser/"><![endif]-->';
			echo "\n";
			echo '<title>Robin &Aring;stedt</title>';
			echo "\n";
			if ($noCSS != 1) echo '<link rel="stylesheet" type="text/css" href="/css/main.css">';
			echo "\n";
			if ($noCSS != 1) echo '<link rel="stylesheet" type="text/css" href="/css/readability_switch_link.css">';
			echo "\n";
			if ($noCSS != 1) echoCSSFont('main');
			echo "\n";
			if ($noCSS != 1) echo '<link rel="stylesheet" type="text/css" href="/css/notIE9.css" />';
			echo "\n";
			echo '<meta name="keywords" content="Robin &Aring;stedt, Programming, Music, Poetry, Java, .NET, C#, Projects">';
			echo "\n";
			echo '<meta name="author" content="Robin &Aring;stedt">';
			echo "\n";
			echo '<meta name="description" content="'.$meta_information_description.'">';
			echo "\n";
			include_once("analytics.php"); 
		?>
		
</head><body>

<div class="contentBox" id="topContentBox">
	
<!--GENERIC TOP END-->

