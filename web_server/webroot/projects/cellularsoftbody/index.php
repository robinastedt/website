<!-- projects/cellularsoftbody/index.php START -->

<?php 
	$meta_information_description = "Cellular Soft Body: Artificial multi-cellular organisms which features neural networks and resource distibution in an evolutionary setting with soft-body physics.";
	include_once("../../genericPageTop.php"); 
	$params = array(
		2,
		'projects',
		'cellularsoftbody'
	);
	call_user_func_array('echoTitle', $params);
?>
	
	
	
<?php echoNewContentBox() ?>
	

<h3 id="CellularSoftBody">Cellular Soft Body <span id="WIP">[WORK IN PROGRESS]</span></h3>
<p>Cross-platform Java 8</p>
<p>Artificial multi-cellular organisms which features neural networks and resource distibution in an evolutionary setting with soft-body physics.</br>
The blue example creature is controllable with the arrow keys. (Currently disabled from version 0.3.2)</p>
<p><a href="/projects/cellularsoftbody/CellularSoftBody_0.3.5.jar">Download version 0.3.5</a> (Java 8) [2015-03-04]</br>
<a href="/projects/cellularsoftbody/CellularSoftBody_0.3.4.jar">Download version 0.3.4</a> (Java 8) [2015-03-04]</br>
<a href="/projects/cellularsoftbody/CellularSoftBody_0.3.2.jar">Download version 0.3.2</a> (Java 7) [2015-03-04]</br>
<a href="/projects/cellularsoftbody/CellularSoftBody_0.3.0.jar">Download version 0.3.0</a> (Java 7) [2015-03-01]</br>
<a href="/projects/cellularsoftbody/CellularSoftBody_0.2.1.exe">Download version 0.2.1</a> (.NET 4.5) [2015-01-12]</br>
<a href="/projects/cellularsoftbody/CellularSoftBody_0.2.0.exe">Download version 0.2.0</a> (.NET 4.5) [2015-01-08]</br>
<a href="/projects/cellularsoftbody/CellularSoftBody_0.1.2.exe">Download version 0.1.2</a> (.NET 4.5) [2014-12-17]</br>
<a href="/projects/cellularsoftbody/CellularSoftBody_0.1.1.exe">Download version 0.1.1</a> (.NET 4.5) [2014-12-15]</p>

<?php echoNewContentBox() ?>

<h3>Version History</h3>

<h4>0.3.5 [2015-09-13]</h4>
<p>* Implemented a quadtree data structure for collision detection, greatly improving performance, especially for larger number of cells.<br/>
* Added more variables available with the get command in the console: "treebuildtime" and "cellrequests"</p>

<h4>0.3.4 [2015-09-13]</h4>
<p>* Organism object is now fully omitted and removed all legacy use of it.</p>
<p><a href="/projects/cellularsoftbody/screenshot_0.3.4.png" target="_blank"><img src="/projects/cellularsoftbody/screenshot_0.3.4.png" alt="Screenshot of CellularSoftBody version 0.3.4" style="width:600px"></a></p>
<p><a href="/projects/cellularsoftbody/screenshot_0.3.4_2.png" target="_blank"><img src="/projects/cellularsoftbody/screenshot_0.3.4_2.png" alt="Screenshot of CellularSoftBody version 0.3.4" style="width:600px"></a></p>

<h4>0.3.3 [2015-09-13]</h4>
<p>* New cells now properly checks if there are more cells around it that it could bind to. It achieves this by working its way around from its parent asking already bound neighbors for  their neighbors. This still needs more work however.<br/>
* Due to the improved binding algorithm some of the graphical glitches are now fixed.<br/>
* Phantom forces has been located to be caused when two cells grow into the same location where there's no room for both.<br/>
* Test organisms now start with a random color instead to make them stand out more from each other.<br/>
* Added more debugging functionality adding functions "debug drawskeleton" as well as "debug drawborder" to console.</p>

<h4>0.3.2 [2015-03-04]</h4>
<p>* Implemented core structure for DNA</br>
* First draft at cell division and growth based on DNA</br>
* Previously used "Organism" object now redundant and omitted as all interactions are done on a cellular level and the engine does not any longer need to keep track of which cells belongs to which organism.</br>
* Known bug: phantom forces in some generated organisms</br>
* Known bug: minor graphical gliches in some cell configurations</p>

<h4>0.3.1 [2015-03-01]</h4>
<p>* Added support to reuse previous used commands in console (up and down arrow-keys.)</p>

<h4>0.3.0 [2015-03-01]</h4>
<p>* Due to many visitors using Linux I decided to port the entire project from C# .NET to Java. This happened to be a great move as performance, especially for graphics, increased.</br>
* New console which accepts input! (great for debugging!)</br>
* Groundwork for cell growth implemented.</p>

<h4>0.2.1 [2015-01-12]</h4>
<p>* Implemented pain/pleasure (punish/reward) system that spreads through the organism.</br>
* Implemented graphics visualizing pain/pleasure</br>
* Note: No system invoking pleasure is implemented yet.</p>

<h4>0.2.0 [2015-01-08]</h4>
<p>* Major graphics engine redesign.</br>
* Organism outline is now drawn on a cellular level</br>
* Fixed some major graphical glitches caused when an organism was cut in half.</p>
<p><a href="/projects/cellularsoftbody/screenshot_0.2.0.png" target="_blank"><img src="/projects/cellularsoftbody/screenshot_0.2.0_600px.png" alt="Screenshot of CellularSoftBody version 0.2.0" style="width:600px"></a></p>

<h4>0.1.2 [2014-12-17]</h4>
<p>* Minor bug fixes and tweaking.</br>
* Testing new system where cells break apart from each other.</p>

<h4>0.1.1 [2014-12-15]</h4>
<p>* Improved graphics engine.</br>
* Minor bug fixes.</p>

<h4>0.1.0 [2014-12-13]</h4>
<p>* First draft of physics engine.</p>

<p><a href="#">Back to the top</a></p>

<?php include_once("../../genericPageBottom.php"); ?>

<!-- projects/cellularsoftbody/index.php END -->