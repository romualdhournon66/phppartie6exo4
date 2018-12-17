<!DOCTYPE html>
<html lang="FR">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <title>PHP Partie 6 exercice 4</title>
    </head>
    <body>
        <div class="container" id="page-top">
            <div class="row">
                <div class="col-xl-12">
                    <h1 align="center">PHP Partie 6 exercice 4</h1>
                    <h3 align="center">Exercice 4</h3>
                    <p align="center">Faire une page index.php. Tester sur cette page que tous les paramètres 
                        de cette URL existent et les afficher: index.php?language=PHP&server=LAMP</p>
                </div>
            </div>
            <p align="center"><a href="index.php?language=PHP&server=LAMP">Tester ici !</a></p>
            <?php
            if (isset($_GET['language']) AND isset($_GET['server'])) { // On teste si le paramètre language et server sont bien présent et si oui, on les affiche en echo ci-dessous
                echo '<p align="center">On utilise du language ' . $_GET['language'] . ' et avons installé ' . $_GET['server'] . ' ! La classe n\'est-ce pas ?</p>';
            } else { // s'il nous manque un des deux ou les deux paramètres, on affiche l'echo ci-dessous
                echo '<p align="center">Désolé, il manque un paramètre !</p>';
            }
            ?>
        </div>
    </body>
</html>

