<?php
if (isset($_POST["zahl"])) {
    $zahl = $_POST["zahl"];
    $eingabe = $_POST["zahl"];

    if ($_POST['umrech'] == 1) {
        $zahl /= 1.6;
        echo $eingabe.' Kilometer sind '. $zahl.' Meilen';
    } else {
        $zahl *= 1.6;
        echo $eingabe.' Meilen sind '. $zahl.' Kilometer';
    }
}

?>
<br>
<br>
<a href="index.php">zurück</a>
