<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$array = [3,8,12,24,31,45,51,60,71,85,93,102];
$number = 102;
$left = 0;
$right = count($array) - 1;
echo $right;
echo "<br>";
do {
    if ($array[$right] == $number){
        echo "found <br>";
        echo "$array[$right] ";
        break;
    }
    $mid = round(($left+$right)/2,0, PHP_ROUND_HALF_DOWN);
    
    if ($number == $array[$mid]){
        echo "found <br>";
        echo "$array[$mid] ";
    }
    else if($array[$mid] < $number){
       $left = $mid;
     
    }else if($array[$mid] > $number){
        $right = $mid;
      
}}
while($array[$mid] != $number)
    


?>
</body>
</html>