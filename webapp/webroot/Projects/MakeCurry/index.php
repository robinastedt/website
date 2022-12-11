<?php
	include_once('../../genericPageTop.php');
	
	$params = array(
		2,
		'Projects',
		'MakeCurry'
	);
	call_user_func_array('echoTitle', $params);
	
	echoNewContentBox();
?>

<h3>What?</h3>

<?php include_once('common.php'); ?>

<h3>What's currying?</h3>

<p>Here's a nice <a target="_blank" href="https://en.wikipedia.org/wiki/Currying">wikipedia</a> article on the topic.</p>

<h3>Why?</h3>

<p>Mostly because I was bored, and as a fun exercise to learn C++.</p>

<h3>Where?</h3>
<p><a href="https://github.com/robinastedt/MakeCurry/" target="_blank">Github</a></p>

<?php echoNewContentBox() ?>
<h2>Example usage</h2>
<pre><code>
#include &lt;iostream&gt;
#include "MakeCurry.h"

int testFunc1(int x) {
    return x;
}

int testFunc2(int x, int y) {
    return x + y;
}

int testFunc3(int x, int y, int z) {
    return x + y + z;
}

int testFunc4(int x, int y, int z, int w) {
    return x + y + z + w;
}

int main(int argc, char** argv) {

    auto curryTest1 = make_curry(testFunc1);
    std::cout << curryTest1(1) << std::endl;

    auto curryTest2 = make_curry(testFunc2);
    std::cout << curryTest2(1)(1) << std::endl;

    auto curryTest3 = make_curry(testFunc3);
    std::cout << curryTest3(1)(1)(1) << std::endl;

    auto curryTest4 = make_curry(testFunc4);
    std::cout << curryTest4(1)(1)(1)(1) << std::endl;
}
</code></pre>

<?php
	include_once('../../genericPageBottom.php');
?>