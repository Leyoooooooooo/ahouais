<?php
$data=yaml_parse_file("data/experience.yaml");

?>

<h1> EXPÉRIENCE </h1>
<hr id="barre">

<?php

echo '<p>'.$data["experience1"."entreprise"].'</p>';






?>