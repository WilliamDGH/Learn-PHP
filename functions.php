<?php

  # Function is block of code that can be repeatedly called

  /*
  Camel Case - myFunction()
  Lower Case - my_function()
  Pascal Case - MyFunction()
  */

  // Create Simple Function
  function simpleFunction() {
    echo 'Hello World from a function';
    echo '<br>';
  }

  // Run Simple Function
  simpleFunction();

  // Function With Params
  function sayHello($name = 'World') {
    echo "Hello $name<br>";
  }

  sayHello();
  sayHello('Joe');
  sayHello('Bob');

  function addNumbers($num1, $num2) {
    return $num1 + $num2;
  }

  echo addNumbers(2,3)."<br>";

  // By Reference

  $myNum = 10;

  function addFive($num) {
    $num += 5;
  }

  function addTen(&$num) {
    $num += 5;
  }

  addFive($myNum);

  echo "Value: $myNum<br>";

  addTen($myNum);

  echo "Value: $myNum<br>";

 ?>
