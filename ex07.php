<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice7</title>
</head>
<body>
    <section>
        <?php
            $nombre = 7;
            //Table de multiplication 7.
            echo"___Table de multiplication 7 de 1 à 10___ ";
            for ($i=1; $i <=10; $i++) { 
                echo"7 x ".$i." = ".$nombre*$i." <br>";
            }
        ?>
    </section>
    <section>
        <?php
            //pyramide
            echo"___Pyramide___ <br>";
            for ($i=1; $i <=6; $i++) { 
                for ($j=1; $j <=$i; $j++) { 
                    echo "*";
                }
                echo"<br>";
            }
        ?>
    </section>
</body>
</html>