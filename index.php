<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="icon" href="asset/img/titre.ico" />
        <title>Mise en Prod</title>
        <link rel="stylesheet" href="asset/style/stylesheet.css">
        <?php include_once "./asset/php/prod.php"; ?>
    </head>
    <body>
        <div id="header"> 
            <h1> bienvenue sur LE MEP </h1>
        </div>
        <div id="corp">
            <p class="intro">pour répondre a la grande question de la mise en production !</p>
            <p class="question">on est <?php echo "$jourFR[$Jsem]</span>"; ?></p>
            <p class="reponce">
                <?php
                if ($Jsem >= 1 and $Jsem <= 3) { // si le jour de la semaine et lundi(1), mardi(2) ou mercredi(3)
                    echo "OUI tu peux vas y fonce !";
                    $coltext = "vert";
                } elseif ($Jsem >= 4 and $Jsem <= 5) {// si le jour de la semaine et jeudi(4) ou vendredit(5)
                    echo "Ses limites, mais bon tu peu toujours tenté";
                    $coltext = "orange";
                } elseif ($Jsem >= 6 and $Jsem >= 7) {// si le jour de la semaine et samedi(6) ou dimanche(7)
                    echo "NON ! non non et NON ! Il et strictement interdit de poussée en prod le week-end !";
                    $coltext = "rouge";
                } else { // cas improbable ou le jour de la semaine et 0 ou supérieur a 7
                    echo "euu la, c'est embarrassent, mais nous somme dans une situation fort bien étrange, regarde part la fenêtre !";
                }
                ?>
            </p>
        </div>
        <div class="principale">
            <div class="embedresize">
                <div>
                    <!--   url donnée a la balise : <?php echo $UrlGif; ?> -->
                    <video allowfullscreen="" frameborder="0" height="315" autoplay="true" loop="ture" src='<?php echo($UrlGif); ?>' width="560">Ici la description alternative</video>
                </div>
            </div>
        </div>
        <div id="fin">
            <a href="https://www.estcequonmetenprodaujourdhui.info/" target="blank">idée originale : estcequonmetenprodaujourdhui.info</a>
            <div class="mentions">
                <p><a href="https://giphy.com/" target="blank"><img src="asset/img/Powered.gif" alt="Giphy"></a></p>
            </div>
        </div>
        <footer>
            <p>V 1.0 (20/03/2019)</p>
        </footer>
    </body>
</html>
