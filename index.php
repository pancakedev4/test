<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
  echo 'Hello world';
  echo "<br>";
  echo 'Это скрипт php'; 
  echo "<br>";
  $x=2;
  $y=4;
  $z=$x+$y;
  $x+=$y;
  $name="Женя";
  $surName="Москвина";
  echo $z;
  echo "<br>";
  echo $x;
  echo "<br>";
  print $name;
  echo "<br>";
  echo $name . $surName;
  echo "<br>";
  echo "My name:" . $name;
  echo "<br>";
  echo $name , " " , $surName;
  ?>

</body>
</html>