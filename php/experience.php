<?php
$data=yaml_parse_file("data/experience.yaml");

?>

<h1> EXPÉRIENCE </h1>
<hr id="barre">

<?php

echo '<p>Stage de '.$data["Duree1"].' chez ' .$data["entreprise1"].' en '.$data["Annee1"].'</p>';
echo '<p>('.$data["Taches1"].' de materiels informatique.) </p>';





?>