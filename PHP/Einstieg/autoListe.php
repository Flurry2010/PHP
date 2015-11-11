
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<?PHP

//-- PHP Array aufbau
$array = array("Alfred" => array("Audi" => array ("Farbe" => "Lila","PS" => "180", "Alter" => "12 Jahre" )),
    "Ingrid" => array ("VW Käfer" => array ("Farbe" => "gelb","PS" => "110", "Alter" => "6 Jahre" )),
    "Lisa" => array ("VW Lupo" => array("Farbe" => "Rot","PS" => "90", "Alter" => "12 Jahre" )));


//-- PHP Array ausgabe für die Fehlersuche
echo "<pre>";
var_dump($array);
echo "</pre>";


//-- PHP Listen Ausgabe
echo "<ul>";
foreach ($array as $name => $autos) {
    echo "<li>$name";
    echo "<ol><li>";
    foreach ($autos as $auto => $eigenschaften) {
        echo "$auto";
        echo "<ul>";
        foreach ($eigenschaften as $key => $daten) {
            echo "<li> $key : $daten</li>";
        }
        echo "</ul></li>";
    }
    echo "</ol>";
}echo "</li></ul>";

?>


</body>
</html>