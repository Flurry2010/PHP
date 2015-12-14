<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        td {
            border: solid 1px black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>

<h3>Wochenübersicht</h3>
<ul>
    <li>Montag</li>
    <li>Dienstag</li>
    <li>Mittwoch</li>
    <li>Donnerstag
        <ol start="34">
            <li>07:25 Referat BSA</li>
            <li>12:00 <img src="nurger.jpg">Mittageseen</li>
        </ol>
    </li>
    <li>Freitag</li>
</ul>

<br>
<br>


<table style="border: solid 1px black ">
    <th>Webtechniken</th>
    <tr>
        <td></td>
        <td><h3>Programmierspachen</h3></td>
        <td><h3>im Webbrowser</h3></td>
    </tr>
    <tr>
        <td>HTML</td>
        <td rowspan="2">nein</td>
        <td rowspan="3">ja</td>
    </tr>
    <tr>
        <td>CSS</td>
    </tr>
    <tr>
        <td>JavaScript</td>
        <td rowspan="2">ja</td>
    </tr>
    <tr>
        <td>PHP</td>
        <td>nein</td>
    </tr>

</table>

<br>
<br>

<?php

$data = [
    'D100' => ['Antrieb:' => 'Frontantrieb', 'Verbrauch (l/100Km):' => 4.8],
    'D200' => ['Antrieb:' => 'Allrad', 'Verbrauch (l/100Km):' => 8],
    'D300' => ['Gewicht:' => '3000kg'],
    'D400' => ['Sitzplätze:' => 4, 'Verbrauch (l/100Km):' =>5.2]
];

$data['D500']=['Verbrauch (l/100Km):'=>10];
$data['D200']['Verbrauch (l/100Km):'] = 7;

//echo '<pre>';
//var_dump($data);
//echo '</pre>';

echo "<ol>";
foreach ($data as $key => $value) {
    echo "<li>$key</li>";
    echo "<ul>";
    foreach ($value as $key2 =>$eig) {

        echo "<li>$key2 $eig</li>";
    }
    echo "</ul>";
}
echo "</ol>";

$verbrauch=0;
$count=0;
foreach($data as $key => $value){
    if(isset ($value['Verbrauch (l/100Km):'])) {
        $count++;
        $verbrauch += $value['Verbrauch (l/100Km):'];
    }

}

echo"Dem Verrrbrauchsgeräääät ist " .($verbrauch/$count)." Liiiters";
?>


</body>
</html>






