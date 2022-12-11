
O(nlogn)
Sort circles by their clockwise tangent line that goes through origo and put into priority queue

O(n)
Loop until priority queue empty {
	Add laser angle along first tangent line to list
	Remove circles  from queue as long as laser intersects them
}