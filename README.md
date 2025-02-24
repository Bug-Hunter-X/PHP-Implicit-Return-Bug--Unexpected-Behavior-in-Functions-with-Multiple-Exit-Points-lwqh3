# PHP Implicit Return Bug

This repository demonstrates a common, yet easily overlooked, error in PHP: the implicit return behavior when a function doesn't explicitly return a value from all possible execution paths.  If the programmer expects a value to always be returned, a missing explicit return can lead to unexpected behavior or errors.

The `bug.php` file shows a function with an implicit return;  `bugSolution.php` demonstrates the fix by adding an explicit return statement to handle all cases.  This ensures the function always behaves as intended, regardless of the input or conditions encountered. 