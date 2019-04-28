<?php

  # substr()
  # Returns a portion of a string

  $output1 = substr('Hello', 1, 3);
  $output2 = substr('Hello', -2);
  echo $output1.'<br>';
  echo $output2.'<br>';

  # strlen()
  # Returns the length of a string

  $output3 = strlen('Hello World');
  echo $output3.'<br>';

  # strpos()
  # Finds the position of the first occurence of a sub string
  $output4 = strpos('Hello World', 'o');
  echo $output4.'<br>';

  # strrpos()
  # Finds the position of the last occurence of a sub string
  $output5 = strrpos('Hello World', 'o');
  echo $output5.'<br>';

  # trim()
  # Strips whitespacce

  $text = 'Hello World            ';
  var_dump($text);

  $trimmed = trim($text);
  var_dump($trimmed);
  echo '<br>';

  # strtoupper
  # Makes everything to uppercase

  $output6 = strtoupper('Hello World');
  echo $output6.'<br>';

  # strtolower
  # Makes everything to lowercase

  $output7 = strtolower("Hello World");
  echo $output7.'<br>';

  # ucwords()
  # Capitalize every word

  $output8 = ucwords('hello world');
  echo $output8.'<br>';

  # str_replace()
  # Replace all occurences of a search string with a replacement

  $text2 = 'Hello World';
  $output9 = str_replace('World', 'Everyone', $text);
  echo $output9.'<br>';

  # is_string()
  # Check if string

  $val = 'Hello';
  $output10 = is_string($val);
  echo $output10.'<br>';

  $values = array(true, false, null, 'abc', 33, '33', 22.4, '22,4', '', ' ', 0, '0');
  foreach ($values as $value) {
    if (is_string($value)) {
      echo "$value is a string<br>";
    }
  }

  # gzcompress()
  # Compress a string

  $string = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

  $compressed = gzcompress($string);
  echo $compressed."<br>";

  $original = gzuncompress($compressed);
  echo $original.'<br>';

 ?>
