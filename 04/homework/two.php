<?php
$height = 170;
$weight = 50;

$bmi = $weight / ($height * $height / 10000);

echo "BMI: " . $bmi . "<br>";

if ($bmi < 18.5) {
  echo "저체중";
} elseif ($bmi < 25) {
  echo "정상 체중";
} elseif ($bmi < 30) {
  echo "과체중";
} else {
  echo "비만";
}
?>
