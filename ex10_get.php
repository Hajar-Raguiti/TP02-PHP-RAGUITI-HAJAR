<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 10 - GET</title>
</head>
<body>
    <?php
    if (isset($_GET['nom'],$_GET['prenom'],$_GET['groupe'])) {
        $nom = trim($_GET['nom']);
        $prenom = trim($_GET['prenom']);
        $groupe = trim($_GET['groupe']);

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