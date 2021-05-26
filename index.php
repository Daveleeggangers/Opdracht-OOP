<?php

require 'Pokemon.php';

$Pikachu = new Pokemon('Gemiro', 'Electric', '60', 'Electric Ring', 'Pika Punch', 'Fire', 'Fighting');
$Charmeleon = new Pokemon('Jonna', 'Fire', '60', 'Head Butt', 'Flare', 'Water', 'Lightning');

print_r($Pikachu->Pokemon1());
print_r($Charmeleon->Pokemon2());

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>lief</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
        <img src="pickachu.jpg" id="pickachu" width="150" height="180">
        <button onclick="Function()" class="btn btn-success">Electric Ring</button>
        <button type="button" class="btn btn-warning">Pika Punch</button>
        <img src="charmeleon.png" id="charmeleon" width="150" height="180">
        <button type="button" class="btn btn-success">Head Butt</button>     
        <button type="button" class="btn btn-warning">Flare</button>
</body>
<script src="script.js"></script>
</html>