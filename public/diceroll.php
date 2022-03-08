<?php
$english = [
  1 => 'one',
  2 => 'two',
  3 => 'three',
  4 => 'four',
  5 => 'five',
  6 => 'six'
];

$roll1 = rand(1, 6);
$roll2 = rand(1, 6);

echo '<p>You rolled a ' . $english[$roll1] . ' and a ' . $english[$roll2] . '.</p>';

if ($roll1 == 6 || $roll2 == 6) {
  echo '<p>You win!</p>';
}
else {
  echo '<p>You didn\'t win, better luck next time!</p>';
}
