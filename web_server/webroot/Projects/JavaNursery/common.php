<!-- Projects/JavaNursery/common.php START -->

<p>A Java implementation of a new concurrent control flow primitive as described in an <a target="_blank" href="https://vorpus.org/blog/notes-on-structured-concurrency-or-go-statement-considered-harmful/">article</a> by Nathaniel J. Smith.</p>

<p>The basic idea is that control flow enters a nursery and continues under it after all threads started inside the nursery scope have returned. The construct also deals with unchecked exceptions being thrown inside a child thread by interrupting the other children, waits for them to terminate and then propagating the exception up the stack.</p>

<!-- Projects/JavaNursery/common.php END -->
