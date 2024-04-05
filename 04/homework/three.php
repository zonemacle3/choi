<?php
$a = 9;
$b = 6;
$c = 8;

if ($a > $b) {
  if ($a > $c) {
    if ($b > $c) {
      echo "큰 순서는 $a, $b, $c 이다.";
    } else {
      echo "큰 순서는 $a, $c, $b 이다.";
    }
  } else {
    echo "큰 순서는 $c, $a, $b 이다.";
  }
} else {
  if ($b > $c) {
    if ($a > $c) {
      echo "큰 순서는 $b, $a, $c 이다.";
    } else {
      echo "큰 순서는 $b, $c, $a 이다.";
    }
  } else {
    echo "큰 순서는 $c, $b, $a 이다.";
  }
}
?>
