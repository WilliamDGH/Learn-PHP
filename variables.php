<?php
  $string1 = 'Hello World';
  $string2 = 'from php';
  $string3 = 'They\'re Here';

  $num1 = 4;
  $float1 = 4.4;
  $bool1 = true;

  $output1 = $string1 . " " . $string2;
  $output2 = "$string1 $string2";

  echo $output2;

  define('GREETING', 'Hello Everyone');

  echo '<br>';
  echo GREETING;
 ?>
