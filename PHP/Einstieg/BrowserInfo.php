<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<?PHP




$info =  $_SERVER['HTTP_USER_AGENT'];
echo "$info";
echo "<br>";
echo "<br>";
$browser = 'unbekannten';


//-- PHP findet Strings in einem Array
//if (preg_match('/chrome/i', $info)) {
//    $browser = 'Chrome';
//}
//
//elseif (preg_match('/firefox/i', $info)) {
//    $browser = 'firefox';
//}
//
//elseif (preg_match('/trident/i', $info)) {
//    $browser = 'InetExplorer';
//}

//-- PHP findet Strings in einem Array
if (strpos($info, 'Chrome')!== false){
    $browser = 'Google Chrome';
}

elseif(strpos($info, 'Firefox')!== false){
    $browser = 'Firefox';
}

elseif(strpos($info, 'Trident')!== false){
    $browser = 'Internet Explorer';
}


echo "Sie benutzen einen $browser Browser";


?>

</body>
</html>