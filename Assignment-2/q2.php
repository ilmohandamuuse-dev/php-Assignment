<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body>
      
<?php
// Declare 2D associative array for colors
$colors = array(
    "Light"  => array("Red" => "Light Red",  "Green" => "Light Green",  "Blue" => "Light Blue"),
    "Normal" => array("Red" => "Normal Red", "Green" => "Normal Green", "Blue" => "Normal Blue"),
    "Dark"   => array("Red" => "Dark Red",   "Green" => "Dark Green",   "Blue" => "Dark Blue")
);

// Print array elements as an HTML table
echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr>
        <th></th>
        <th>Red</th>
        <th>Green</th>
        <th>Blue</th>
      </tr>";

foreach ($colors as $row_name => $row_values) {
    echo "<tr>";
    echo "<td><b>" . $row_name . "</b></td>"; // Row header (Light, Normal, Dark)
    foreach ($row_values as $col_value) {
        echo "<td>" . $col_value . "</td>";   // Cell value
    }
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>