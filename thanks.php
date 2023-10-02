<?php

$errors = [];

if ($_SERVER['REQUEST METHOD'] === 'POST') {
    if (!isset($_POST['last_name']) || trim($_POST['first_name']) === '') {
        $errors[] = "Le nom est obligatoire";
    }
    if (!isset($_POST['first_name']) || trim($_POST['first_name']) === '') {
        $errors[] = "Le prénom est obligatoire";
    }
    if (!isset($_POST['subject']) || trim($_POST['subject'] === '')) {
        $errors[] = "Le sujet est obligatoire";
    }
    if (!isset($_POST['user_name']) || trim($_POST['user_name'] === '')) {
        $errors[] = "L'email est obligatoire";
    } elseif (!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "L'email n'est pas valide";

        if (!isset($_POST['phone_number']) || trim($_POST['phone_number'] === '')) {
            $errors[] = "Le numéro de téléphone est obligatoire";
        }
        if (!isset($_POST['user_message']) || trim($_POST['user_message'] === '')) {
            $errors[] = "Le méssage est obligatoire";
        }
        if (empty($errors())) {
            header('Location: thanks.php');
        }
    }
}


echo "Merci " . $_POST['first_name'] . " " . $_POST['last_name'] .
    " de nous avoir contacté à propos de " . $_POST['subject'] .
    ". Un de nos conseillers vous contactera soit à l’adresse " .
    $_POST['user_email'] . " ou par téléphone au " . $_POST['phone_number'] .
    " dans les plus brefs délais pour traiter votre demande : " . $_POST['user_message'];
