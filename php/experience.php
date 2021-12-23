<?php
$data=yaml_parse_file("data/experience.yaml");

?>

<h1> EXPÉRIENCE </h1>
<hr id="barre">

<?php

echo '<p>Stage de '.$data["Duree1"].' chez ' .$data["entreprise1"].' en '.$data["Annee1"].'.('.$data["Taches1"].' de materiels informatique.) </p>';

echo '<p>Stage de '.$data["Duree2"].' à la fédération de la Manche de '.$data["entreprise2"].' en '.$data["Annee2"].'.('.$data["Taches2"].')</p>';

echo '<p>Stage de '.$data["Duree3"].' au ' .$data["entreprise3"].' en '.$data["Annee3"].'.('.$data["Taches3"].') </p>';

echo '<p>Job saisonnier de '.$data["Duree4"].' à ' .$data["entreprise4"].' en '.$data["Annee4"].'.('.$data["Taches4"].') </p>';

echo '<p>Job saisonnier de '.$data["Duree5"].' à ' .$data["entreprise5"].' en '.$data["Annee5"].'.('.$data["Taches5"].') </p>';

?>

<a href="../doc/cvleo.pdf">Lien vers mon CV</a>
<br>