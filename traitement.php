<?php
$email = $_POST['email'];
$message = $_POST['message'];

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  file_put_contents('emails.txt', $email . PHP_EOL, FILE_APPEND);

  echo '
  <!DOCTYPE html>
  <html lang="fr">
  <head>
    <meta charset="UTF-8">
    <title>Merci pour votre message</title>
    <style>
      body {
        background-color: #111;
        color: #eee;
        font-family: "Helvetica Neue", sans-serif;
        text-align: center;
        padding: 50px;
      }
      h1 {
        font-size: 2em;
        margin-bottom: 20px;
      }
      p {
        font-size: 1.2em;
        margin-bottom: 10px;
      }
      a button {
        margin-top: 30px;
        padding: 10px 20px;
        font-size: 1em;
        background-color: #e63946;
        color: white;
        border: none;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <h1>Merci pour votre message 🫧</h1>
    <p>📬 Email utilisé : <strong>' . htmlspecialchars($email) . '</strong></p>
    <p>Ton message a bien été reçu par l’équipe Backos Kombucha 🍓</p>
    <a href="index.html"><button>Retour au menu</button></a>
  </body>
  </html>';
} else {
  echo "<p>Email invalide.</p>";
}
?>
