<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body>
      


<?php
// 1. Declare and initialize the array
$numbers = array(5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9);

// 2. Print all elements
echo "<b>1. Array Elements:</b><br>";
foreach ($numbers as $num) {
    echo $num . " ";
}
echo "<br><br>";

// 3. Calculate and print total of all elements
$total = array_sum($numbers);
echo "<b>2. Total of all elements:</b> " . $total . "<br><br>";

// 4 & 5. Calculate total of even and odd elements
$even_total = 0;
$odd_total = 0;

foreach ($numbers as $num) {
    if ($num % 2 == 0) {
        $even_total += $num; // Sum of even numbers
    } else {
        $odd_total += $num;  // Sum of odd numbers
    }
}

echo "<b>3. Total of even elements:</b> " . $even_total . "<br>";
echo "<b>4. Total of odd elements:</b> " . $odd_total . "<br><br>";

// 6. Find minimum element and its positions
$min_value = min($numbers);
$min_positions = array_keys($numbers, $min_value);

echo "<b>5. Minimum element:</b> " . $min_value . "<br>";
echo "Positions (Indices): " . implode(", ", $min_positions) . "<br><br>";

// 7. Find maximum element and its positions
$max_value = max($numbers);
$max_positions = array_keys($numbers, $max_value);

echo "<b>6. Maximum element:</b> " . $max_value . "<br>";
echo "Positions (Indices): " . implode(", ", $max_positions) . "<br>";
?>



</body>
</html>