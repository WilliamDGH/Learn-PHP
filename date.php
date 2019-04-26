<?php

  echo date('d').'<br>';  // day
  echo date('m').'<br>';  // month
  echo date('y').'<br>';  // year
  echo date('w').'<br>';  // week

  echo date('d/m/y').'<br>';

  echo date('h').'<br>';  // Hour
  echo date('i').'<br>';  // Min
  echo date('s').'<br>';  // Seconds
  echo date('a').'<br>';  // AM or PM

  // Set Time Zone
  date_default_timezone_set('Australia/Brisbane');
  echo date('h:i:sa').'<br>';

  $timestamp = mktime(10, 14, 54, 9, 10, 1981);
  echo $timestamp.'<br>';
  echo date('d/m/y h:i:sa', $timestamp).'<br>';

  $timestamp2 = strtotime('7:00pm March 22 2016');
  echo $timestamp2.'<br>';
  echo date('d/m/y h:i:sa', $timestamp2).'<br>';

  $timestamp3 = strtotime('tomorrow');
  echo $timestamp3.'<br>';
  echo date('d/m/y h:i:sa', $timestamp3).'<br>';

  $timestamp4 = strtotime('next Monday');
  echo $timestamp4.'<br>';
  echo date('d/m/y h:i:sa', $timestamp4).'<br>';

  $timestamp5 = strtotime('+2 days');
  echo $timestamp5.'<br>';
  echo date('d/m/y h:i:sa', $timestamp5).'<br>';
 ?>
