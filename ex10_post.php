<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 10 - POST</title>
</head>
<body>
    <?php
    if (isset($_POST['nom'],$_POST['prenom'],$_POST['groupe'])) {
        $nom = trim($_POST['nom']);
        $prenom = trim($_POST['prenom']);
        $groupe = trim($_POST['groupe']);

        $nomNv = htmlspecialchars($nom, ENT_QUOTES, 'UTF-8');
        $prenomNv = htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8');
        $groupeNv = htmlspecialchars($groupe, ENT_QUOTES, 'UTF-8');

        echo "Bienvenue ".$nomNv." ".$prenomNv." , votre groupe : ".$groupeNv." ";
    }
    else {
        echo "Erreur : Donnees introuvable .";
    }

    ?>
</body>
</html>