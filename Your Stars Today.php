<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Lucky O Meter</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    $str = 'Welcome to your random star analysis. This page will generate a new analysis everytime you refresh, so don't get carried away by the results!';

    // Print the length of $str using strlen
    echo strlen($str);
    
    echo '<br>';
    // generates a random number between 1 to 10 
    $var = rand(1,10);
    for($i=1;$i<=$var;$i++){
    echo '⭐'.'   ';
}
switch ($var){
case 1,2:
  echo 'It's not the last straw! You just need to work harder today, so go for it.'; 
  break;
case 3,4:
  echo 'You are aided by the stars, so don't stop what you're doing!'; 
  break;
case 5,6:
  echo 'You are really persevering today! Maybe just a little more of your own efforts to set it right?'; 
  break;
case 7,8:
  echo 'Oh boy, the stars have really shined upon you today! You are in luck.'; 
  break;
case 9,10:
  echo 'Your day couldn't be better! If you tend to part ways on this argument, just know that it all turns out well for the good.'; 
  break;
default:
  echo 'Stars what?';
}
  ?>

</body>
</html>
