<?php
$data=yaml_parse_file("data/experience.yaml");

?>

<h1> EXPÉRIENCE </h1>
<hr id="barre">

<?php

echo '<p>Stage de '.$data["Duree1"].' chez ' .$data["entreprise1"].' en '.$data["Annee1"].'.('.$data["Taches1"].' de materiels informatique.) </p>';

echo '<p>Stage de '.$data["Duree2"].' à la fédération de la Manche de '.$data["entreprise2"].' en '.$data["Annee2"].'.('.$data["Taches2"].')</p>';

echo '<p>Stage de '.$data["Duree3"].' au ' .$data["entreprise3"].' en '.$data["Annee3"].'.('.$data["Taches3"].') </p>';



?>