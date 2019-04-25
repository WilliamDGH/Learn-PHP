<?php

  # CONDITIONALS

  /*
    ==
    ===
    <
    >
    <=
    >=
    !=
    !==
  */

  $num = "5";

  if($num == 5) {
    echo '5 passed';
  } elseif ($num == 6) {
    echo '5 passed';
  } else {
    echo 'Did not pass';
  }

  # NESTING IF

  $num = 5;

  if ($num > 4) {
    if ($num < 10) {
      echo '5 passed';
    }
  }

  /*
  LOGICAL OPERATORS

      and &&
      or ||
      xor
  */

  if ($num > 4 XOR $num < 10) {
    echo "$num passed";
  }

  # SWITCH

  $favColor = 'red';

  switch ($favColor) {
    case 'red':
      echo "Your favorite color is $favColor";
      break;
    case 'blue':
      echo "Your favorite color is $favColor";
      break;
    case 'green':
      echo "Your favorite color is $favColor";
      break;
    default:
      echo "Your favorite color is something else";
  }

 ?>
