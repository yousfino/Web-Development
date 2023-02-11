<?php

if(isset($_COOKIE['visitTimes'])){

$_COOKIE['visitTimes']+=1;
setcookie("visitTimes", $_COOKIE['visitTimes']);
date_default_timezone_set('US/Eastern');
$date = date("l F jS  h:i:s A e Y");
setcookie("lastVisit", $date);
echo "Hello, this is the " . $_COOKIE['visitTimes'] . " time that you are visiting my webpage";
echo "<br />";
echo "Your last visit was on: " . $_COOKIE["lastVisit"];
} else{
$_COOKIE['visitTimes']=1;
setcookie("visitTimes", $_COOKIE['visitTimes'] , time()+3600*24);
echo " Welcome to my webpage! It is your first time that you are here. </br>";
}
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
