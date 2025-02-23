# Unnecessary If/Else in Boolean Function

This example demonstrates an unnecessary use of an if/else statement in a PHP function that returns a boolean value.  The if/else statement can be replaced with a simpler, more direct return statement. This improvement increases code readability and maintainability.

## Bug

The `foo` function uses an if/else statement to compare two values and return `true` or `false` accordingly. This is redundant because the comparison itself already produces a boolean result.

## Solution

The improved `foo` function uses an implicit return of the boolean result of the comparison.  This approach is cleaner, more concise, and directly expresses the function's purpose.