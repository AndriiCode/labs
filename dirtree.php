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

function dirtree($dir, $step = 1){

    $dirs = scandir($dir);
    foreach($dirs as $d){
        if($d == ".." || $d =="."){
            continue;
        }
        for ($i = 0; $i<$step; $i++){
            echo "..";
        }
        echo "$d <br>   ";
        $newpath = $dir."/".$d;
        if (is_dir($newpath)){
        dirtree(($newpath), $step+1);
       
        }
    }
}
dirtree("fortests");

?>


</body>
</html>