<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body>

<?php
$number = 2026;
$temp = $number;
$reverse = 0;

while ($temp > 0) {
    $remainder = $temp % 10;
    $reverse = ($reverse * 10) + $remainder;
    $temp = (int)($temp / 10);
}

echo "Original Number: $number <br>";
echo "Reversed Number: $reverse";
?>
      
</body>
</html>