<?php
$nev = htmlspecialchars($_POST['nev']);
    echo "<h1> Név: $nev </h1>";

$nap = $_POST['nap'];
    echo "<h1> Nap: $nap </h1>";

$tananyag = $_POST['anyag'];
    echo "<h1> Tananyag: $tananyag </h1>";

$valasztas = $_POST['valasztas'];
    echo "<h1> Választás: $valasztas <h/1>";
?>    