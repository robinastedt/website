<?php
	include_once('../../genericPageTop.php');
	
	$params = array(
		2,
		'Projects',
		'JavaNursery'
	);
	call_user_func_array('echoTitle', $params);
	
	echoNewContentBox();
?>

<?php include_once('common.php'); ?>

<p>As you can see below in the example code, child threads can even arbitrarily spawn new threads themselves without breaking the control flow, by passing down the nursery object to the called functions. This is safe as long as the Nursery object itself doesn't leak outside the nursery scope, which should not be possible as long as it's only passed along to children within the nursery, and no other concurrency primitive is used within the nursery scope.</p>

<p>To be able to use any results of the child threads non-statically a child thread can be started with a Supplier<T> instead of a Runnable, and the result becomes available in a blocking asynchronous data structure which can be accessed within the nursery scope. The scope itself can also return any type of value as a result of the computations taking place inside which becomes available as soon as the scope collapses.</p>

<p>Source: <a href="https://github.com/robinastedt/JavaNursery" target="_blank">Github</a></p>

<?php echoNewContentBox() ?>
<h2>Example usage</h2>
<pre><code>
import com.astedt.robin.util.concurrency.AsynchronousReference;
import com.astedt.robin.util.concurrency.nursery.Nursery;

import java.util.Random;

public class NurseryTest {
    public static void main(String[] args) {

        Nursery.open((Nursery nursery) -> {
            nursery.start(() -> System.out.println("Inline test 1"));
            nursery.start(() -> System.out.println("Inline test 2"));
        });

        Nursery.open((Nursery nursery) -> {
            nursery.start(() -> {
                nursery.start(() -> 
                    System.out.println("Nested scopes test 1"));
                nursery.start(() -> 
                    System.out.println("Nested scopes test 2"));
            });
            nursery.start(() -> System.out.println("Nested scopes test 3"));
        });

        // A Nursery can also store results from children,
        // and then work on them asynchronously
        // If there's some result to be returned within the scope,
        // it is also passed on as a result of the scope itself.
        int result = Nursery.open((Nursery nursery) -> {
            AsynchronousReference<Integer> result1 
                = nursery.start(NurseryTest::intSupplier);
            AsynchronousReference<Integer> result2 
                = nursery.start(NurseryTest::intSupplier);

            // The result of the children can not be accessed
            // until it's finished. 
            // The get function of the AsynchronousReference
            // blocks until the result becomes available
            return result1.get() + result2.get();
        });
        System.out.println(result);


        // An example of one or more threads failing
        try {
            Nursery.open((Nursery nursery) -> {
                nursery.start(NurseryTest::exceptionThrower);
                nursery.start(NurseryTest::exceptionThrower);
                nursery.start(NurseryTest::exceptionThrower);
                nursery.start(NurseryTest::exceptionThrower);
                nursery.start(NurseryTest::exceptionThrower);
            });
        } catch (Exception e) {
            e.printStackTrace();
        }
    }

    private static int intSupplier() {
        int result = 0;
        for (int i = 0; i < 1000; i++) {
            result += i;
            try {
                Thread.sleep(1); // The illusion of working hard
            } catch (InterruptedException e) {
                return -1;
            }
        }
        return result; // Returns 499500
    }

    private static void exceptionThrower() {
        try {
            Thread.sleep(new Random().nextInt(2000));
        } catch (InterruptedException e) {
            return;
        }
        throw new NullPointerException();
    }
}
</code></pre>

<?php
	include_once('../../genericPageBottom.php');
?>
