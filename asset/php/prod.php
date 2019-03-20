<?php
/*
  permet de récupérer un gif aléatoire parmit une liste de tag donnée en fonction  du jour de la semaine
 * 
 * exemple pour lundit 
 * on donne un tag aléatoire parmit le tablerau de tag proposer
 * on récupére une liste de 20 gif grace a l'API de giphy. 
 * et on séléctione un parmit les 20 proposer pour l'aficher au format .MP4

  Api Key:
  zoApkEYzkyd30ZoO9JT7LDXvbHoOdnFO
 */

/* Gestion de la date (jour de la semaine seulement */
$Jsem = date("N");
$jourFR = [
    1 => "<span class='vert'>Lundi",
    2 => "<span class='vert'>Mardi",
    3 => "<span class='vert'>Mercredi",
    4 => "<span class='orange'>Jeudi",
    5 => "<span class='orange'>Vendredi",
    6 => "<span class='rouge'>Samdi",
    7 => "<span class='rouge'>Dimache"];


/* Creation du tableau de teg en fonction du jours */
if ($Jsem >= 1 and $Jsem <= 3) { // si le jour de la semaine et lundi(1), mardi(2) ou mercredi(3)
    $TabTag = ["yes", "oui", "thumbs-up", "affirmative", "positive", "do-it", "great", "clapping"];
} elseif ($Jsem >= 4 and $Jsem <= 5) {// si le jour de la semaine et jeudi(4) ou vendredit(5)
    $TabTag = ["run", "probably", "secret", "risky", "hot", "danger", "Red-zone"];
} elseif ($Jsem >= 6 and $Jsem >= 7) {// si le jour de la semaine et samedi(6) ou dimanche(7)
    $TabTag = ["no", "not-allowed", "no-entry", "forbidden", "wrong-way", "do-not", "explosion"];
} else { // cas improbable ou le jour de la semaine et 0 ou supérieur a 7
    $TabTag = ["flop", "bug", "explosion"];
}


/* récupération du tag et change */
$tagid = array_rand($TabTag);
$tag = $TabTag[$tagid];
/* $tag = str_replace(' ', '-', $tag);
  var_dump($tag); */


/* récupération de la liste de gif et sélection d'un seul de ces gif */
$url = "http://api.giphy.com/v1/gifs/search?q=$tag&api_key=zoApkEYzkyd30ZoO9JT7LDXvbHoOdnFO&limit=20";
$gif = (json_decode(file_get_contents($url)));
$obj = array_rand($gif->data);
//var_dump($obj);
$UrlGif = $gif->data[$obj]->images->fixed_width->mp4;
//var_dump($UrlGif);