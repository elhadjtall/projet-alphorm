<?php
//On contunie notre session start
session_start();
// On verifie la présence de session
if(isset($_SESSION['pseudo'])) {
    $pseudo = $_SESSION['pseudo'];
} else { //On envoie les information dans le formulaire index.php du projet
    header('Location:../index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gestions des Bricks</title>
</head>
<body>
    
</body>
</html>