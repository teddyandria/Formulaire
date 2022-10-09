<?php

include 'thanks.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  action="thanks.php"  method="post">
    <div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="user_name" required>
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email" required>
    </div>

    <div>
        <label for="phone">Enter your phone number:</label>
        <input type="tel" id="phone" name="phone" pattern="[0-9]{3} - [0-9]{3} - [0-9]{4}" required>
    </div>
    <div>
        <label for="animals">Choose an animal</label>
        <select name="animals" id="animals" size="4" multiple required>
            <option value="Chien">Chien</option>
            <option value="Cafard">Cafard</option>
            <option value="Moustique">Moustique</option>
            <option value="Chameau">Chameau</option>
        </select>
    </div>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message" required></textarea>
    </div>
   
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>
</body>
</html>