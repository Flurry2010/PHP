<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP Dynamische Webseite</title>
</head>
<body>

<?php

echo maxNumber(3,5,6)."<br>";
echo maxNumber(1,7,3,-5,8)."<br>";
echo maxNumber()."<br>";

function maxNumber(){
    $argc = func_get_args();
    if ($argc == null){
        return null;
    }

    $max = $argc[0];
    foreach ($argc as $value){
        if ($max < $value){
            $max = $value;
        }
    }
    return $max;
}
?>

</body>
</html>