<?php 

$errors = [];

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $contact = array_map('trim', $_POST);

       if (empty($contact['user_name'])){
        $errors[] = 'Veuillez indiquer votre nom.';
       } 
       if (empty($contact['user_email'])){
        $errors[] = 'Veuillez indiquer de email.';
       }
       if (!filter_var($contact['user_email'], FILTER_VALIDATE_EMAIL)){
        $errors [] = 'Le format d\'email est incorrecte';
       }
       if (empty($contact['phone'])){
        $errors[] = 'Veuillez indiquer votre numéro de téléphone.';
       }
       if (empty($contact['animals'])){
        $errors[] = 'Veuillez choisir un animal';
       }
       if (empty($errors)){
        echo 'Merci ' . $_POST['user_name'] . ' de nous avoir contacté à propos de ' . $_POST['animals'] . '.' . PHP_EOL;
        echo "Un de nos conseillers vous contactera soit à l'adresse " . $_POST['user_email'] . ' ou par téléphone au ' . $_POST['phone'] . ' dans les plus bref délais pour traiter votre demain :' . PHP_EOL;
        echo $_POST['user_message'];
        
       }
    }

?>