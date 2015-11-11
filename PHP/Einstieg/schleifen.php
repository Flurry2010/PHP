<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?PHP
    echo "<title>PHP</title>";
    ?>
</head>
<body>


<!-- PHP Ausgabe über echo -->
<?php
echo "Hallo du Affe!!\n<br>";
echo "Bisse noch Voll?";

$titel = "Schwein";
$preis = '€ 9.50';
echo "Das Kilo $titel kostet $preis.<br>";
echo 'Das Kilo $titel kostet ' . $preis . "<br>";
echo 'Das Kilo $titel kostet $preis.<br>';
echo "'' und \$ <br>";
$tierliste = array("tier" => "Pferd");
echo "Das Kilo {$tierliste['tier']} kostet $preis.<br>";
?>

<!-- PHP Schleifen Übung -->
<?php

$header = "Kapitel 1";
echo "<h1>$header</h1>";


    for ($i = 1; $i < 10; $i++) {
        if ($i % 2 == 1) {
            echo "<span style= color:red>";
        }
        for ($j = 1; $j < $i; $j++) {
            echo "o";
        }
        if (($i % 2) == 1) {
            echo "</span>";
        }
        echo "<br>";
    }

    for ($i = 10; $i >= 1; $i--) {
        if ($i % 2 == 1) {
            echo "<span style= color:red>";
        }
        for ($j = $i; $j > 0; $j--) {
            echo "o";
        }
        if (($i % 2) == 1) {
            echo "</span>";
        }
        echo "<br>";
    }

?>

<!-- PHP Schleifen Übung optimiert -->
<?php
$header = "Kapitel 1";
echo "<h1>$header</h1>";

for ($h = 0; $h < 14; $h++) {
    if ($h % 2 == 0)
        echo "<div style='text-align: left;vertical-align: top;display: inline-block'>";
    else echo "<div style='text-align: right;vertical-align: top;display: inline-block'>";
    for ($i = 1; $i <= 16; $i++) {
        if ($i % 2 == 0) echo "<div style='color: red'>";
        else echo "<div style='color: black'>";
        for ($j = $i; $j > 0; $j--) echo "o";
        echo "&nbsp;";
        echo "</div>";
    }
    for ($i = 15; $i >= 1; $i--) {
        if ($i % 2 == 0) echo "<div style='color: red'>";
        else echo "<div style='color: black'>";
        for ($j = $i; $j > 0; $j--) echo "o";
        echo "&nbsp;";
        echo "</div>";
    }
    echo "</div>";
}
?>


</body>
</html>