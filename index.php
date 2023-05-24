<?php // relier notre fichier index.php à la base de donnée
include('cnx/bdd.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <!-- formulaire de connexion -->
    <article>
        <section>
            <form action="" method="POST">
                <h1>Gestion des Bricks</h1>
                <input type="text" name="pseudo" id="pseudo" placeholder="@pseudo">
                <input type="password" name="pass" id="pass" placeholder="@password">
                <input type="submit" name="submit" id="submit" value="Entrer">
            </form>
        </section>
    </article>
</body>
</html>