<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercices PHP</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
            $exos=["tva.php","positif.php","42.php","heure.php","pyramide.php","capitales.php","13.php","password.php","incrementation.php","pays.php","leet.php"];
            foreach($exos as $exo){
                echo "<article>";
                include("exos/".$exo);
                echo "</article>";
            }
        ?>
    </body>
</html>

