<?php
include('cnx/bdd.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Insérer un nouveau Bien</title>
</head>
<body>
    <article>
        <section>
            <form action="" method="POST" enctype="multipart/form-data">
                <h1>Insérer un Bien</h1>
    <?php
    if (isset($_POST['submit'])){ //si le formulaire est validé .Debut
        if(empty($_POST['bien'])){ // Si le champ BIEN est vide .DEBUT
            echo '<div class="error">Merci de nommer le bien </div>';
            }else { // Si le champ BIEN est vide .SUITE
                if (empty($_FILES['monImage']['tmp_name'])){
                    echo '<div class="error">Merci envoyer une image </div>';
                }else { //si l'image est vide .SUITE 
                    $dossierTempo = $_FILES['monImage']['tmp_name'];
                    $dossierSite = 'images/' .$_FILES['monImage']['name'];


                    $extension = strrchr($_FILES['monImage']['name'], '.');
                    $autorise = ['.jpg', '.jpg'];
                    if (in_array($extension, $autorise)){
                        $deplacer = move_uploaded_file($dossierTempo, $dossierSite);

                        $sql = 'INSERT INTO bien (bien, image) VALUES (:bien, :image)';
                        $req = $bdd->prepare($sql);
                        $req->execute( array(
                            ':bien' => $_POST['bien'],
                            ':image' => $_FILES['monImage']['name']
                        ));
                    } else {
                        echo "<div class='error'>Cette extention d'images n'est pas autorisée</div>";
                    }

                }
            }
        }
    ?>
                <input type="text" name="bien" id="" placeholder="Nom du bien">
                <p>Envoyer une Image</p>
                <div id="download">
                <input type="file" name="monImage" id="fichier" >
                <label for="fichier">
                    <div>
                    <i class="fa-solid fa-download"></i>
                    </div>
                </label>
                </div>
                <input type="submit" name="submit" id="" value="Insérer">
            </form>
        </section>
    </article>
    <script src="https://kit.fontawesome.com/67beedd5ac.js" crossorigin="anonymous"></script>
</body>
</html>