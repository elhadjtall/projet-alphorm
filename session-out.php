<?php
//Poursuivre la session 
session_start();


//Detruire la session courante pour permettre à se deconnecter
session_destroy();

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
    <article>
        <section>
            <h1>Session out</h1>
            <p><a href="index.php">Se reconnecter</a></p>
        </section>
    </article>
    
</body>
</html>