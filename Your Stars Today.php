<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Lucky O Meter</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
  <?php
    $str = 'AAAWelcome to your random star analysis.'.'<br>'.' This page will generate a new analysis everytime you refresh, so do not get carried away by the results!';
    // Print Welcome Note :)
    echo $str;
    echo '<br>';
    echo '<br>';
    // generates a random number between 1 to 5
    $var = rand(1,5);
    for($i=1;$i<=$var;$i++){
    echo '⭐'.'   ';
  }
  echo '<br>';
  echo '<br>';
switch ($var){
case 1:
  echo 'It is not the last straw! You just need to work harder today, so go for it. Break a leg!'; 
  break;
case 2:
  echo 'You are aided by the stars, so do not stop what you are doing! I am putting my two cents in it.'; 
  break;
case 3:
  echo 'You are really persevering today! Maybe just a little more of your own efforts to set it right?'; 
  break;
case 4:
  echo 'Oh boy, the stars have really shined upon you today! You are in luck. Can I have a penny for your thoughts?'; 
  break;
case 5:
  echo 'Your day could not be better! If you tend to part ways on this argument, just know that it all turns out well for the good.'; 
  break;
default:
  echo 'Stars what?';
}
  ?>
</body>
</html>
