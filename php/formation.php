<?php
$data=yaml_parse_file("data/formation.yaml");
?>

<h1> FORMATION </h1>
<hr>

<?php

echo '<p> Diplôme du '.$data["diplome1"].' au '.$data["etablissement1"].' à '.$data["lieu1"].' en '.$data["duree1"].'</p>';

echo '<p> Diplôme du '.$data["diplome2"].' au '.$data["etablissement2"].' à '.$data["lieu2"].' en '.$data["duree2"].'</p>';



?>