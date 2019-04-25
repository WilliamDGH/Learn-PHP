<?php

  $people = array('Kevin', 'Jeremy', 'Sara');
  $ids = array(23, 55, 12);

  $cars = ['Honda', 'Toyota', 'Ford'];

  echo $people[1];
  echo '<br>';

  $cars[3] = 'Chevy';
  echo $cars[3];
  echo '<br>';

  $cars[] = 'BMW';
  echo $cars[count($cars) - 1];
  echo '<br>';

  print_r($cars);
  echo '<br>';
  var_dump($cars);
  echo '<br>';


  $people2 = array('Brad' => 35, 'Jose' => 32, 'William' => 37);
  echo $people2['Brad'];
  echo '<br>';
  $ids2 = [22 => 'Brad', 44 => 'Jose', 63 => 'William'];
  echo $ids2[22];
  echo '<br>';

  print_r($people2);
  echo '<br>';

  $cars3 = array(
    array('Honda', 20, 10),
    array('Toyota', 30, 20),
    array('Ford', 23, 12)
  );

  echo $cars3[1][0];
  echo '<br>';
  print_r($cars3);
  echo '<br>';
 ?>
