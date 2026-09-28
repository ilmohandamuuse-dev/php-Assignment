<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body>
    <?php
    $name = "Mohamed Abdulahi Muuse";
     $age = 20;
      $grade = 4;
      echo "my name is " . $name . "<br>";

if ($age > 20) {
    echo "Failed";
}

elseif ($grade < 2){
    echo "Failed";
}

  else {
    echo "Passed";
  }  
  
  ?>
</body>
</html>