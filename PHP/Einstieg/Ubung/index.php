
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<form action="berechnung.php" method="post" style="border: solid 1px black; padding: 10px">
   <input type="text" name="zahl" placeholder="Zahlen">
    <input type="radio" id="kilo" name="umrech" value="1" checked>
    <label for="kilo">Kilometer</label>
    <input type="radio" id="mile" name="umrech" value="0">
    <label for="mile">Meilen</label>

    <button type="submit">Umrechen</button>
</form>

</body>
</html>
