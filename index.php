<?php // relier notre fichier index.php à la base de donnée
//Proteger notre notre page index par la fonction session_start
session_start();
include('admin/cnx/bdd.php');
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
<?php // Verifier les champs du formulaire avec la fonction empty et isset
if(isset($_POST['submit'])){
    if (empty($_POST['pseudo']) || empty($_POST['pass'])){
        echo '<div class="error">Merci de remplir de tous les champs </div>';
    } else{ // Verifier si les information rentrer correspond à celle de la base de donnée 
        // On utilise la requêtte sql 
        $sql = ' SELECT * FROM admin  
                WHERE pseudo = :pseudo AND pass = :pass';  // les conditions sql et mode de selection
        // Preparer notre requêtte sql 
        $req= $bdd->prepare($sql);
        // Executer notre requêtte
        $req->execute(
            array( // Créer un tableau de type array 
                ':pseudo' => $_POST['pseudo'], // Affecter les valeurs à des variables
                ':pass' => $_POST['pass'], 
            )
        );
        #Recupérer les donnée par la fonction fetch
        // On creer une variable $data 
        $data = $req->fetch(PDO::FETCH_ASSOC);

        // Compter les resultats 
        // On creer une variables $count
        $count = $req->rowCount();

        // Savoir s'il y'a un resultat dans la base qui est supérieur à 0
        if($count > 0) {
            $_SESSION['pseudo'] = $data['pseudo'];
            header('Location:admin/'); // Envoyer les information via la fonction header dans la table admin
        } else {
            echo '<div class="error">Acces refusé </div>';
        }
    }
}

?>
                <input type="text" name="pseudo" id="pseudo" placeholder="@pseudo">
                <input type="password" name="pass" id="pass" placeholder="@password">
                <input type="submit" name="submit" id="submit" value="Entrer">
            </form>
        </section>
    </article>
</body>
</html>