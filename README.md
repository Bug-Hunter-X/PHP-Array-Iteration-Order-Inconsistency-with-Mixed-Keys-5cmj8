# PHP Array Iteration Order Inconsistency with Mixed Keys

This repository demonstrates a potential issue in PHP concerning the order of elements when iterating over arrays containing a mix of numeric and string keys. The unexpected behavior is showcased in `bug.php`, while the solution and explanation are provided in `bugSolution.php`. 

PHP's internal array handling doesn't guarantee a specific order when both string and numeric keys are present. This can lead to unforeseen problems in your code, especially when relying on a particular iteration sequence.

The solution focuses on using techniques to maintain predictable iteration order, ensuring your code's behavior is consistent and reliable.