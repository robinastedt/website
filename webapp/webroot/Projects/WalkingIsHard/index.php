<!-- Projects/WalkingIsHard/index.php START -->

<?php
	include_once('../../genericPageTop.php');
	
	$params = array(
		2,
		'Projects',
		'WalkingIsHard'
	);
	call_user_func_array('echoTitle', $params);
	
	echoNewContentBox();
?>

<?php include_once('common.php'); ?>
<p><a href="/Projects/WalkingIsHard/WalkingIsHard_2015-10-08.jar">Download</a> [2015-10-08]<br />
Source: <a href="https://github.com/robinastedt/WalkingIsHard" target="_blank">Github</a></p>
<?php include_once('commonPicture.php'); ?>
<?php echoNewContentBox(); ?>
<p><b>Controls:</b></p>
<p>Spacebar: Slow/Speed up time<br/>
R: Toggle rendering<br/>
Arrowkeys: Move camera</p>
<p><b>Application arguments:</b><br/>
To use these launch application from the terminal with "java -jar WalkingIsHard.jar [arguments]"</p>
<p>help : Shows this information.<br/>
nographics : disables all windows and graphics, improves perforance.<br/>
noprint : disables printouts in console.<br/>
save [filename] : Saves the simulation state to [filename] regularily.
load [filename] : Loads the simulation state from [filename] instead of initializing a random new one.<br/>
loadsave [filename] : Same as "save [filename] load [filename]"<br/>
saveinterval [interval > 0] : Determine the interval in generations between each save point.<br/>
keepoldsaves : Creates a copy of the save for that generation, to be able to revert back to an earlier generation.</p>


<?php include_once('../../genericPageBottom.php'); ?>

<!-- Projects/WalkingIsHard/index.php END -->