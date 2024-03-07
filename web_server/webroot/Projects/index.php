
<!-- Projects/index.php START -->

<?php
	$meta_information_description = 'Various programming projects, finished and under development.';
	include_once('../genericPageTop.php'); 

	$params = array(
		1,
		'Projects',
		10,
		"MakeCurry",
		"JavaNursery",
		"Gentzen's Quest",
		'Dynamic Grid',
		'Walking Is Hard',
		'EvoScape',
		'Cellular Soft Body',
		'Neural Net Evolution',
		'Fractal',
		'Natural Selection'
	);
	call_user_func_array('echoTitle', $params);
?>

<?php echoNewContentBox() ?>

<!--MAKE CURRY START-->
<h3 id="MakeCurry">Make Curry</h3>
<p>C++ Utility</p>
<?php include_once('MakeCurry/common.php'); ?>
<p><?php echoLink("Read more...", "/Projects/MakeCurry/") ?></p>
<p><a href="#">Back to the top</a>
<!--MAKE CURRY END-->

<?php echoNewContentBox() ?>

<!--JAVA NURSERY START-->
<h3 id="JavaNursery">JavaNursery</h3>
<p>Java Utility</p>
<?php include_once('JavaNursery/common.php'); ?>
<p><?php echoLink("Read more...", "/Projects/JavaNursery/") ?></p>
<p><a href="#">Back to the top</a>
<!--JAVA NURSERY END-->

<?php echoNewContentBox() ?>

<!--GENTZENS QUEST START-->
<h3 id="GentzensQuest">Gentzen's Quest</h3>
<p>Android Java App</p>
<?php include_once('GentzensQuest/common.php'); ?>
<p><?php echoLink("Read more...", "/Projects/GentzensQuest/") ?></p>
<p><a href="#">Back to the top</a>
<!--GENTZENS QUEST END-->

<?php echoNewContentBox() ?>

<!--DYNAMIC GRID START-->
<h3 id="DynamicGrid">Dynamic Grid</h3>
<p>Cross-platform C++ Data structure</p>
<?php include_once('DynamicGrid/common.php'); ?>
<p><?php echoLink("Read more...", "/Projects/DynamicGrid/") ?></p>
<p><a href="#">Back to the top</a>
<!--DYNAMIC GRID END-->

<?php echoNewContentBox() ?>

<!--WALKING IS HARD START-->
<?php include_once('WalkingIsHard/common.php'); ?>
<p><?php echoLink("Read more...", "/Projects/WalkingIsHard/") ?></p>
<?php include_once('WalkingIsHard/commonPicture.php'); ?>
<p><a href="#">Back to the top</a>
<!--WALKING IS HARD END-->

<?php echoNewContentBox() ?>

<!--EVOSCAPE START-->
<h3 id="EvoScape">EvoScape <span id="WIP">[WORK IN PROGRESS]</span></h3>
<p>Cross-platform Java 7</p>
<p>The goal of this project is to be able to procedurally generate planets with very high details and accurecy. The planets are devided in a geodesic grid to avoid blurring and artifacts. In the future it will probably be the basis of some kind of ecosystem simulation and/or game.</p>
<p><?php echoLink("Read more...", "/Projects/EvoScape/") ?></p>
<p><a href="/Projects/EvoScape/2015-06-23.png" target="_blank"><img src="/Projects/EvoScape/2015-06-23.png" alt="Screenshot" style="width:600px"></a></p>
<p><a href="#">Back to the top</a>
<!--EVOSCAPE  END-->

<?php echoNewContentBox() ?>

<!--CELLULAR SOFT BODY START-->
<h3 id="CellularSoftBody">Cellular Soft Body <span id="WIP">[WORK IN PROGRESS]</span></h3>
<p>Cross-platform Java 8</p>
<p>Artificial multi-cellular organisms which features neural networks and resource distibution in an evolutionary setting with soft-body physics.</p>
<p><?php echoLink("Read more...", "/Projects/CellularSoftBody/") ?></p>
<p><a href="/Projects/CellularSoftBody/screenshot_0.3.4.png" target="_blank"><img src="/Projects/CellularSoftBody/screenshot_0.3.4.png" alt="Screenshot of CellularSoftBody version 0.3.4" style="width:600px"></a></p>
<p><a href="#">Back to the top</a>
<!--CELLULAR SOFT BODY END-->

<?php echoNewContentBox() ?>

<!--NEURAL NET EVOLUTION START-->
<h3 id="NeuralNetEvolution">Neural Net Evolution</h3>
<p>Windows .NET 4.5</p>
<p>Artificial life simulation with organisms that evolve over time. They all possess an eye with several receptors which each ray trace their enviroment and measure red, green, blue and distance. This information is then sent to a neural network which is described by its DNA. Other input is its internal health. The net is then controlling its actuators, which includes motion, projected body color, a speed boost and a spike weapon. The two latter comes at a energy cost.</p>
<p>They can hunt for food either by killing each other or collecting the spawned food. Each time a piece of food is picked up it's respawned with lesser food content and slightly more red (from green), this to make it harder to survive over time. The organism to survive the longest gets brought over to the next generation and the best half of the rest of the population gets put into a gene pool and randomly mated to produce the offspring for the next iteration. The starting neural net/DNA is originally completely random, but through evolution progressevly gets smarter.</p>
<p><a href="/Projects/NeuralNetEvolution/NeuralNetEvolution.exe">Download</a> [2014-11-16]</p>
<p><a href="/Projects/NeuralNetEvolution/screenshot.png" target="_blank"><img src="/Projects/NeuralNetEvolution/screenshot.png" alt="Screenshot of Neural Net Evolution" style="width:600px"></a></p>
<p><a href="#">Back to the top</a>
<!--NEURAL NET EVOLUTION END-->

<?php echoNewContentBox() ?>

<!--FRACTAL START-->
<h3 id="Fractal">Fractal</h3>
<p>Windows .NET 4.0</p>
<p>A multi-threaded renderer for the Mandelbrot fractal with up to 128 bit precision.</p>
<p><a href="/Projects/Fractal/Fractal_1.2.0.1.zip">Download version 1.2.0.1</a> [2014-09-29]</br>
<a href="/Projects/Fractal/Fractal_1.0.0.0.zip">Download version 1.0.0.0</a> [2014-09-15]</p>
<p><a href="/Projects/Fractal/screenshot.png" target="_blank"><img src="/Projects/Fractal/screenshot_600px.png" alt="Screenshot of Fractal" style="width:600px"></a></p>
<p><a href="#">Back to the top</a>
<!--FRACTAL END-->

<?php echoNewContentBox() ?>

<!--NATURAL SELECTION START-->
<h3 id="NaturalSelection">Natural Selection</h3>
<p>Windows .NET 4.0</p>
<p>One of my earliest evolutionary AI projects where each cell is a 8 bit computer with its DNA as machine-code</p>
<p>
Every dot is an artificial lifeform whose brain is controlled by its DNA that is a series of 1-byte-machine-code. Their color is repressented by a hash-value derived from said series.</br>
For every step their brains executes one line in their dna and increments their pointer by one, much like a computer does. When it reaches the end of the dna it wraps around and starts from the first position again.</br>
In the beginning it spawns in several organisms with randomized dna with a length of 30 operations.</br>
</br>
The following rules governs their behavior:</br>
An organism can not move.</br>
An organisms can turn to face one of four directions.</br>
An organism can spend half its energy to replicate itself in an empty square it's facing. If not empty, it suffers an energy penalty. The replication then has a very small chance of mutating its DNA.</br>
An organism can consume another organism in the square it's facing. If empty, it suffers an energy penalty.</br>
Every operation, with exception to IF-statements costs energy.</br>
Every organism also has a 4 bit register which it can perform IF-statements on, it also transfers this information onto its offspring. Speaking of information storage, new offspring start facing away from their parents at the time of birth.</br>
All energy spent gets put into a Pool, which when it reaches a threshold spawns a new random organism carrying that energy.</br>
If an organism reaches below a certain energy threshold, it is regarded dead and can not perform any more instructions nor spend energy. Its only purpose is food for its competitors.</br>
IF-statements works so that the pointer is increased by 1 if the statement is true, otherwise 1+4, thus skipping the next 4 instructions.
</p>
<p><a target="_blank" href="https://www.youtube.com/watch?v=Z9rMIZJJWWU">Video</a> [YouTube]</p>
<p><a href="/Projects/NaturalSelection/NaturalSelection.zip">Download</a> [2013-11-26]</p>
<p><a href="/Projects/NaturalSelection/screenshot.png" target="_blank"><img src="/Projects/NaturalSelection/screenshot_600px.png" alt="Screenshot of Natural Selection" style="width:600px"></a></p>
<p><a href="#">Back to the top</a>
<!--NATURAL SELECTION END-->

<?php include_once("../genericPageBottom.php"); ?>

<!-- Projects/index.php END -->