<?php

ini_set('SMTP','smtp.monfai.fr');
ini_set("smpt_port", "25");
$headers = 'From: webmaster@example.com';




mail(
    "cyimena09@hotmail.com",
    "Confirmation de la commande",
    "Bonjour ceci est un message de confirmation",
    $headers);

echo "L'email à bien été envoyé";
?>
