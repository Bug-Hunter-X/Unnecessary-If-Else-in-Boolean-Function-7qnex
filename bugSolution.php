function foo(a, b) {
  return a === b; //Implicit return of boolean value
}

// Example usage:
$result1 = foo(5, 5); // true
$result2 = foo(5, 10); // false
echo "Result 1: " . ($result1 ? 'true' : 'false') . "\n";
echo "Result 2: " . ($result2 ? 'true' : 'false');