<?php
    $groesse = null;
    $gewicht = null;

    if (isset ($_POST["zuruecksetzen"])){
        $_POST["zuruecksetzen"] = null;
        $_POST["gewicht"] = null;
        $_POST["groesse"] = null;
    }
    elseif (isset($_POST["gewicht"]) && isset($_POST["groesse"])) {
        $gewicht = $_POST["gewicht"];
        $groesse = $_POST["groesse"];

    }
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP Dynamische Webseite</title>
</head>
<body>

<form action="" method="post">

    <table>
        <tr>
            <td>
                <a>Gewicht: </a>
            </td>
            <td>
                <input type="number" value="<?php echo "$gewicht"; ?>" name="gewicht" placeholder="in kg">
            </td>
        </tr>
        <tr>
            <td>
                <a>Größe: </a>
            </td>
            <td>
                <input type="text" value="<?php echo "$groesse"; ?>" name="groesse" placeholder="in m">
            </td>
        </tr>
        <tr>
            <td>
                <input type="radio" id="radioMann" name="mw" value="mann" checked>Mann
            </td>
            <td>
                <input type="radio" id="radioFrau" name="mw" value="frau">Frau
            </td>
        </tr>
        <tr>
            <td>
                <button name="berechnen" type="submit">Berechnen</button>
            </td>
            <td>
                <button name="zuruecksetzen" value="set" type="submit" >Zurücksetzen</button>
            </td>
        </tr>
    </table>
</form>

<?php

if (isset($_POST["gewicht"]) && isset($_POST["groesse"])){

    $bmi = $gewicht / ($groesse*$groesse);
    $bmi = round($bmi, 0 , PHP_ROUND_HALF_UP);

    echo "<br><div> Ihr  BMI beträgt: $bmi </div><br>";

    if ($bmi < 19 && $_POST["mw"] == "frau" || $bmi < 20 && $_POST["mw"] == "mann"){
        echo "Sie haben Untergewicht!";
    }
}
?>



</body>
</html>