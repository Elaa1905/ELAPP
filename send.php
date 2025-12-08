<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $navn   = trim($_POST["navn"]);
    $email   = trim($_POST["email"]);
    $besked   = trim($_POST["besked"]);
}

$navn   = htmlspecialchars($navn, ENT_QUOTES);
$email   = htmlspecialchars($email, ENT_QUOTES);
$besked   = htmlspecialchars($besked, ENT_QUOTES);

$til = "ELAKOYCU@OUTLOOK.DK";

$emne = "Ny besked fra kontaktformular";

$indhold = 
    "Navn: $navn\n".
    "Email: $email\n\n".
    "Besked: $besked\n$besked".;

$headers = "From: $email\r\nReply-To: $email";

mail($til, $emne, $indhold, $headers);

echo "<h2 style='font-family: sans-serif; text-align:center;'Tak for din besked, $navn! ✨</h2>";
echo "<p style='text-align:center;'>Jeg vender tilbage hurtigst muligt, hilsen Ela.</p";
?>