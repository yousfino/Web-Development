<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <body>

    <h1>Function: uppercaseFirstandLast</h1>
    <?php
    function uppercaseFirstandLast($str) {
      $strLength = strlen($str);
      $firstLetter = substr($str, 0, 1);
      $firstLetter = strtoupper($firstLetter);
      $lastLetter = substr($str, -1);
      $lastLetter = strtoupper($lastLetter);
      $middleLetters = substr($str, 1, strlen($str)-2);
      $newString = $firstLetter . $middleLetters . $lastLetter;
      echo $newString;
    }
    echo uppercaseFirstandLast("youssef");
    ?>

    <h2>Function: findAverage_and_Median</h2>
    <?php
      function findAverage_and_Median($myArray) {
        sort($myArray);
        $count = count($myArray);
        $median = 0;
        $average = 0;
        if ($count % 2 == 0) {
      	   $median = ($myArray[$count/2] + $myArray[($count/2)-1])/2;
        } else {
      	   $median = $myArray[($count-1)/2];
        }

        $average = array_sum($myArray)/$count;
        echo "Median: " . $median . "<br>" . "Average: " . $average;
      }
      echo findAverage_and_Median(array(1, 2, 3, 4, 5, 7, 6, 2, 4, 1, 12, 15));
     ?>

  </body>
</html>
