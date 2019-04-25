<?php

  # Loops

  /*
    For
    While
    Do...While
    Foreach
  */


  # For Loop
  for ($i=0; $i < 10; $i++) {
    echo 'For Loop '.$i;
    echo '<br>';
  }

  #While Loop
  $a = 0;
  while ($a < 10) {
    echo 'While Loop '.$a;
    echo '<br>';
    $a++;
  }

  #DO...While Loop
  $b = 0;
  do {
    echo 'Do...While Loop '.$b;
    echo '<br>';
    $b++;
  } while ($b < 10);

  #Foreach Loop
  $people = array('Brad', 'Jose', 'William');

  foreach ($people as $person) {
    echo $person;
    echo '<br>';
  }

  $people2 = array('Brad' => 'brad@gmail.com', 'Jose' => 'jose@gmail.com', 'William' => 'william@gmail.com');

  foreach ($people2 as $person => $email) {
    echo $person. '\'s email is ' . $email;
    echo '<br>';
  }
 ?>
