<?php 
echo 'Merci ' . $_POST['user_name'] . ' de nous avoir contacté à propos de ' . $_POST['animals'] . '.' . PHP_EOL;

echo "Un de nos conseillers vous contactera soit à l'adresse " . $_POST['user_email'] . ' ou par téléphone au ' . $_POST['phone'] . ' dans les plus bref délais pour traiter votre demain :' . PHP_EOL;
echo $_POST['user_message'];
?>