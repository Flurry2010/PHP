<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<?php

error_reporting(0);
//error_reporting(E_ALL); Alles wird wieder erlaubt

$url = 'http://www.openthesaurus.de/synonyme/search?q=Mond&format=application/json'; #hier die URL angeben
$auth = base64_encode('dfleuren:Akira2011'); #Windows-Kennung
$proxy_resource = array(
    'http' => array(
        'proxy' => 'tcp://proxy:8080',
        'request_fulluri' => true,
        'header' => "Proxy-Authorization: Basic $auth",
    ),
);
$stream_content = stream_context_create($proxy_resource);
$json = file_get_contents($url, false, $stream_content);

$content = json_decode($json, true); #true nicht vergessen


//echo "<pre>";
//var_dump($content);
//echo "</pre>";

echo $_GET["q"] ."<br>";


echo "Mond";
echo "<ul>";
foreach ($content["synsets"] as $stelle => $termsArray) {
    foreach ($termsArray["terms"] as $stelle =>$termArray) {
        echo "<li>";
        echo $termArray["term"];
    }
    echo "</li>";
}
echo "<ul>";

?>
</body>
</html>
