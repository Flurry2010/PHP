
<?php

$bestellung = [
    'Pizza' => [
        'Margherita' => [
            'normal' => 4,
            'groß' => 6
        ],
        'Funghi' => [
            'normal' => 5,
            'groß' => 7
        ],
        'Salami' => [
            'normal' => 5.5,
            'groß' => 7.5
        ],
        'Regina' => [
            'normal' => 5.5,
            'groß' => 7.5
        ],
        'Hawaii' => [
            'normal' => 6.5,
            'groß' => 8.5
        ],
    ],
    'getränk1' => [
        'Cola' => 2,
        'Fanta' => 2,
        'Spezi' => 2,
        'Wasser' => 1.5,
    ]
];


?>

<form action="" method="post">
    <input type="radio" id="mar" name="pizza" value='Margherita'>
    <label for="mar">Margherita</label><br>
    <input type="radio" id="fun"  name="pizza" value='Funghi'>
    <label for="fun">Funghi</label><br>
    <input type="radio" id="sala" name="pizza" value='Salami'>
    <label for="sala">Salami</label><br>
    <input type="radio" id="regi" name="pizza" value='Regina'>
    <label for="regi">Regina</label><br>
    <input type="radio" id="haw" name="pizza" value='Hawaii'checked>
    <label for="haw">Hawaii</label><br><br>

    <input type="radio" id="nor" name="groesse" value='normal'>
    <label for="nor">Normal</label>&nbsp;&nbsp;
    <input type="radio" id="gro" name="groesse" value='groß'checked>
    <label for="gro">Gross</label><br>
    <br><br>

    <input type="checkbox" id="col" name="getränk2[]" value='Cola'>
    <label for="col">Cola</label><br>
    <input type="checkbox" id="fan" name="getränk2[]" value='Fanta'>
    <label for="fan">Fanta</label><br>
    <input type="checkbox" id="spe" name="getränk2[]" value='Spezi'>
    <label for="spe">Spezi</label><br>
    <input type="checkbox" id="was" name="getränk2[]" value='Wasser'>
    <label for="was">Wasser</label><br>


    <input type='text' name='tischnr' placeholder='Tischnummer'>
    <br><br>
    <button type="submit">Bestellen</button>

</form>
<br>
<hr>
<br>


<?php
if (isset($_POST["tischnr"])) {

    $pizza = $_POST['pizza'];
    $größe = $_POST['groesse'];

    $preis = $bestellung['Pizza'][$pizza][$größe];

    if(isset ($_POST['getränk2'])){
        $getränk3 = $_POST['getränk2'];
        foreach ($getränk3 as $value) {

            $preis += $bestellung['getränk1'][$value];
        }
    }

    echo " Der Preis Ihrer Bestellung beträgt: $preis"."€";

}

?>

