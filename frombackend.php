<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset)($_POST['nev']) {
    $nev = htmlspecialchars($_POST['nev']);
    echo "<h1> Név: $nev </h1>";
    
} else{
    echo "<h1>Nem jó</h1>"
}

$email = $_POST['email'];
echo "<h1> Email: $email </h1>";
$kor = $_POSTT['kor'];
echo "<h1> Kor: $kor </h1>";

?>