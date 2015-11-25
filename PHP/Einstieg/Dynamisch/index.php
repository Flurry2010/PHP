<?PHP
$pages=[
    'home' => 'Allgemeines',
    'lists' => 'Listen',
    'table' => 'Tabellen'
];

if(isset($_GET['page'])) {
    $currentPage = $_GET['page'];
}else
    $currentPage = 'home';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css"/>
    <title></title>
</head>
<body>



<?php



require 'head.php';
echo "<div id='main'>";
require 'navigation.php';
require 'content.php';
echo "</div>";
require 'foot.php';

?>

</body>
</html>