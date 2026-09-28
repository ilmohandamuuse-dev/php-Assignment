<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body>

<?php
// Declare 2D associative array for students
// Note: Since "CA221" appears twice in the prompt table, a unique key ("CA221_2") is used internally so PHP doesn't overwrite it.
$students = array(
    "CA221"   => array("Name" => "Mohamed Ahmed Ali", "Phone" => "0648440403", "Address" => "Laba Dhagax, Wardhiigley"),
    "CA223"   => array("Name" => "Ahmed Abdi Jama",    "Phone" => "0647223201", "Address" => "Taleex, Hodan"),
    "CA221_2" => array("Name" => "Amina Nur Adan",   "Phone" => "0646990276", "Address" => "Macmacaanka, Dharkeynley")
);

// Print array elements as an HTML table
echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr>
        <th>ID</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Address</th>
      </tr>";

foreach ($students as $id => $info) {
    // Format "CA221_2" back to "CA221" for clean table display
    $display_id = ($id == "CA221_2") ? "CA221" : $id;

    echo "<tr>";
    echo "<td><b>" . $display_id . "</b></td>";
    echo "<td>" . $info['Name'] . "</td>";
    echo "<td>" . $info['Phone'] . "</td>";
    echo "<td>" . $info['Address'] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
      
</body>
</html>