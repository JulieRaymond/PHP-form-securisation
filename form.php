<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <link href="style.css" rel="stylesheet" />
  <title>My form</title>
</head>

<body>
  <h1>This is my form</h1>
  <form action="/thanks.php" method="post">
    <div>
      <label for="nom">Nom :</label>
      <input type="text" id="nom" name="last_name" required />
    </div>
    <div>
      <label for="prenom">Prénom :</label>
      <input type="text" id="nom" name="first_name" required />
    </div>
    <div>
      <label for="courriel">Courriel :</label>
      <input type="email" id="courriel" name="user_email" required />
    </div>
    <div>
      <label for="tel">Numéro :</label>
      <input type="tel" id="tel" name="phone_number" required>
    </div>
    <div>
      <label for="subject">Sujets :</label>
      <select id="subject" name="subject" required>
        <option value="information">Informations</option>
        <option value="aide">Aide</option>
        <option value="assistance">Assistance</option>
        <option value="intervention">Intervention</option>
      </select>
    </div>
    <div>
      <label for="message">Message :</label>
      <textarea id="message" name="user_message" required></textarea>
    </div>
    <div class="button">
      <button type="submit">Envoyer votre message</button>
    </div>
  </form>
</body>

</html>