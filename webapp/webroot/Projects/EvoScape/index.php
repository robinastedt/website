<?php 
	$meta_information_description = "EvoScape: The goal of this project is to be able to procedurally generate planets with very high details and accurecy.";
	include_once("../../genericPageTop.php"); 
	$params = array(
		2,
		'Projects',
		'EvoScape'
	);
	call_user_func_array('echoTitle', $params);
?>
	
	
	<?php echoNewContentBox() ?>
	
	<h3 id="EvoScape">EvoScape <span id="WIP">[WORK IN PROGRESS]</span></h3>
	<p>Cross-platform Java 7</p>
	<p>The goal of this project is to be able to procedurally generate planets with very high details and accurecy. The planets are devided in a geodesic grid to avoid blurring and artifacts. In the future it will probably be the basis of some kind of ecosystem simulation and/or game.</p>
	<p><a href="/Projects/EvoScape/2015-06-23.png" target="_blank"><img src="/Projects/EvoScape/2015-06-23.png" alt="Screenshot" style="width:600px"></a></p>
	
	<?php echoNewContentBox() ?>

	<h3>Version History</h3>



	<h4>2015-06-23 (2)</h4>
	<p>* Applied bilinear filtering to alpha maps, resulting in much smoother texture transitions without having to generate alpha maps with insane resolutions. Effects of this are much nice graphics, much faster texture generation times and a fat bump to frame rate.</p>
	<p><a href="/Projects/EvoScape/2015-06-23_3.png" target="_blank"><img src="/Projects/EvoScape/2015-06-23_3.png" alt="Screenshot" style="width:600px"></a></p>

	<h4>2015-06-23</h4>
	<p>* Implemented alpha map for different textures. Textures in use might change as I'm not overly pleased with them at the moment.</br>
	* Textures are taken from <a target="_blank" href="http://www.spiralgraphics.biz/">Spiral Graphics</a> and <a target="_blank" href="http://kay-vriend.blogspot.se/">K&auml;y's blog</a></br>
	* All textures should be free. Please <a href="mailto:robin.astedt@gmail.com">contact me</a> if I am mistaken.</p>
	<p><a href="/Projects/EvoScape/2015-06-23.png" target="_blank"><img src="/Projects/EvoScape/2015-06-23.png" alt="Screenshot" style="width:600px"></a></p>
	<p><a href="/Projects/EvoScape/2015-06-23_2.png" target="_blank"><img src="/Projects/EvoScape/2015-06-23_2.png" alt="Screenshot" style="width:600px"></a></p>

	<h4>2015-06-22</h4>
	<p>* First experiments with lighting</br>
	* Separate semi-transparent water mesh added</p>
	<p><a href="/Projects/EvoScape/2015-06-22.png" target="_blank"><img src="/Projects/EvoScape/2015-06-22.png" alt="Screenshot" style="width:600px"></a></p>
	<p><a href="/Projects/EvoScape/2015-06-22_2.png" target="_blank"><img src="/Projects/EvoScape/2015-06-22_2.png" alt="Screenshot" style="width:600px"></a></p>

	<h4>2015-06-16 (3)</h4>
	<p>* Changed from using flycam to rotating the planet</p>

	<h4>2015-06-16 (2)</h4>
	<p>* Implemented Worley noise for spheres</br>
	* Mixed Worley noise with FBM noise for new heightmap algorithm</br>
	* Prettier placeholder color function implemented</p>
	<p><a href="/Projects/EvoScape/2015-06-16_2.png" target="_blank"><img src="/Projects/EvoScape/2015-06-16_2.png" alt="Screenshot" style="width:600px"></a></p>

	<h4>2015-06-16</h4>
	<p>* Fixed texture blurring issue where some texture pixels did not properly align with their coresponding vertex</br>
	* Applied simple placeholder color function to heightmap</br>
	* Added support for properties in text file</p>
	<p><a href="/Projects/EvoScape/2015-06-16.png" target="_blank"><img src="/Projects/EvoScape/2015-06-16.png" alt="Screenshot" style="width:600px"></a></p>

	<h4>2015-06-15</h4>
	<p>* Applied noise as a heightmap to vertices</p>
	<p><a href="/Projects/EvoScape/2015-06-15.png" target="_blank"><img src="/Projects/EvoScape/2015-06-15.png" alt="Screenshot" style="width:600px"></a></p>

	<h4>2015-06-14 (2)</h4>
	<p>* Implemented Fractional Brownian Motion noise derived from OpenSimplex, applied new FBM noise on icosphere</p>
	<p><a href="/Projects/EvoScape/2015-06-14_2.png" target="_blank"><img src="/Projects/EvoScape/2015-06-14_2.png" alt="Screenshot" style="width:600px"></a></p>

	<h4>2015-06-14</h4>
	<p>* Applied <a target="_blank" href="https://gist.github.com/erlend-sh/4252353">Paintable Textures</a></br>
	* Applied <a target="_blank" href="https://gist.github.com/KdotJPG/b1270127455a94ac5d19">OpenSimplex</a> noise on icosphere</br>
	* Bug: texture blurs in the center of the original triangles of the icosahedron</p>
	<p><a href="/Projects/EvoScape/2015-06-14.png" target="_blank"><img src="/Projects/EvoScape/2015-06-14.png" alt="Screenshot" style="width:600px"></a></p>

	<h4>2015-06-13 (2)</h4>
	<p>* Applied handdrawn textures on icosphere</p>
	<p><a href="/Projects/EvoScape/2015-06-13_2.png" target="_blank"><img src="/Projects/EvoScape/2015-06-13_2.png" alt="Screenshot" style="width:600px"></a></p>

	<h4>2015-06-13</h4>
	<p>* First experiments with tessellating an icosahedron</p>
	<p><a href="/Projects/EvoScape/2015-06-13.png" target="_blank"><img src="/Projects/EvoScape/2015-06-13.png" alt="Screenshot" style="width:600px"></a></p>


	<p><a href="#">Back to the top</a></p>
	
	
<?php include_once("../../genericPageBottom.php"); ?>