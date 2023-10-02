<?php

echo "Merci " . $_POST['first_name'] . " " . $_POST['last_name'] .
    " de nous avoir contacté à propos de " . $_POST['subject'] .
    ". Un de nos conseillers vous contactera soit à l’adresse " .
    $_POST['user_email'] . " ou par téléphone au " . $_POST['phone_number'] .
    " dans les plus brefs délais pour traiter votre demande : " . $_POST['user_message'];
