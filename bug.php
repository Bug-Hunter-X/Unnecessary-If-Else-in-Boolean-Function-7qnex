function foo(a, b) {
  if (a === b) {
    return true;
  } else {
    return false;
  }
}

//The above function is unnecessarily verbose.  A simpler version would be:

function foo(a, b) {
  return a === b; //Implicit return of boolean value
}