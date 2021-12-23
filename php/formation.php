<?php
$data=yaml_parse_file("data/formation.yaml");
?>

<h1> FORMATION </h1>
<hr>

<?php

echo '<p> Diplôme du '.$data["diplome1"].' au '.$data["etablissement1"].' à '.$data["lieu1"].' en '.$data["duree1"].'.</p>';

echo '<p> Diplôme du '.$data["diplome2"].' au '.$data["etablissement2"].' à '.$data["lieu2"].' en '.$data["duree2"].'.</p>';

echo '<p> Diplôme du '.$data["diplome3"].' au '.$data["etablissement2"].' à '.$data["lieu2"].' en '.$data["duree3"].'.</p>';

echo '<p> Actuellement en préparation du diplôme '.$data["diplome4"].' à '.$data["etablissement3"].' à '.$data["lieu3"].'.</p>';

?>

<a href="../doc/cvleo.pdf">Lien vers mon CV</a>
<br>
