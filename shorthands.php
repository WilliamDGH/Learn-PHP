<?php

  $loggedIn = true;

  // if ($loggedIn) {
  //   echo 'You are logged in';
  // } else {
  //   echo 'You are not logged in ';
  // }

  echo ($loggedIn) ? 'You are logged in<br>' : 'You are not logged in<br>';

  $isRegisterd = ($loggedIn) ? true : false;
  echo $isRegisterd;

  $age = 20;
  $score = 15;

  echo 'Your score is: '.($score > 10 ? ($age > 10 ? 'Average<br>' : 'Exceptional<br>') : ($age > 10 ? 'Horrible<br>' : 'Average<br>'));

 ?>

<div>
  <?php if ($loggedIn): ?>
    <h1>Welcome User</h1>
  <?php else: ?>
    <h1>Welcome Guest</h1>
  <?php endif ?>
</div>

<div>
  <?php foreach ($arr as $val):?>
    <?php echo $val ?>
  <?php endforeach ?>
</div>
