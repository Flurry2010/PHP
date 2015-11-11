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
$browser = 'unbekannt';

if (preg_match('/chrome/i', $info)) {
    $browser = 'Chrome';
}

elseif (preg_match('/firefox/i', $info)) {
    $browser = 'firefox';
}

elseif (preg_match('/trident/i', $info)) {
    $browser = 'InetExplorer';
}

echo "Sie benutzen den $browser als Brwoser";








?>

</body>
</html>