<!-- projects/dynamicgrid/common.php START -->

<p>Dynamic storage in n dimensions supporting negative coordinates. Supports automatic memory allocation and both access by value or reference. The real magic happens in the way it interally stores the elements. It's built to minimize heap memory lookups and pointer derefencing, as well as utilizing the CPU cache as much as possible when several nearby coordinates are looked up sequentially by storing everything in a single std::vector by utilizing a nifty mapping technique from &#8484;<sup>n</sup> -> &#8469;.</p>

<!-- projects/dynamicgrid/common.php END -->