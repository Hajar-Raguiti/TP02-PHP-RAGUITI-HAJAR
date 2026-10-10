<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice9</title>
</head>
<body>
    <?php
        $notes = [
            "Amine" => 12,
            "Sara" => 16,
            "Youssef" => 8,
            "Lina" => 14,
            "Adam" => 10
        ];
    ?>
    <table border = 1>
        <thead>
            <tr>
                <th>Etudiants</th>
                <th>Notes</th>
                <th>Validité</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sommeNotes=0;
            $nmbEtud=0;
            $nmbValide=0;
            $meilleurNote=0;
            $meilleurEtud="";
            foreach ($notes as $etud => $note) {
                $sommeNotes+=$note;
                $nmbEtud++;
                if ($note<10) {
                    $valid = "Non Validé";
                }
                else {
                    $valid = "Validé";
                    $nmbValide++;
                }
                if ($note>$meilleurNote) {
                    $meilleurNote= $note;
                    $meilleurEtud = $etud;
                }
                
                
                echo"<tr>
                <td>".$etud."</td>
                <td>".$note."</td>
                <td>".$valid."</td>
                </tr>";}
            $moyenne=$sommeNotes/$nmbEtud;
            ?>
            
        </tbody>
        <?php
            echo"Le moyenne de la classe : ".$moyenne."<br>";
            echo"Le nombre des etudiants validé : ".$nmbValide."<br>";
            echo"Le meilleure etudiant  : ".$meilleurEtud." -> ".$meilleurNote."<br>";
        ?>
    </table>
</body>
</html>