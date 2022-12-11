<?php
	include_once('../../genericPageTop.php');
	
	$params = array(
		2,
		'Projects',
		'GentzensQuest'
	);
	call_user_func_array('echoTitle', $params);
	
	echoNewContentBox();
?>

<h3>Gentzen's Quest</h3>

<?php include_once('common.php'); ?>

<p>Paper: <a href="#">Exploring the Concept of Abstracting
and Visualizing Formal Logic Proofs in
Games</a> [Coming soon].</p>
<p>Source: <a target="_blank" href="https://github.com/raxxor95/DATX02-18-35">GitHub</a>.</p>
<p>Play: <a target="_blank" href="https://play.google.com/store/apps/details?id=com.datx02_18_35">Google Play Store</a>.</p>


<?php
	include_once('../../genericPageBottom.php');
?>