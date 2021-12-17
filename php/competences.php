<?php
$content=file_get_contents("data/competence.yaml");
$data=yaml_parse($content);

echo '<img id="cisco" src="'.$data['Cisco'].'">';
echo '<img id="htmlimg" src="'.$data['HTML'].'">';
echo '<img id="css" src="'.$data['CSS'].'">';
echo '<img id="php" src="'.$data['php'].'">';
echo '<img id="yaml" src="'.$data['yaml'].'">';
echo '<img id="python" src="'.$data['python'].'">';
echo '<img id="sql" src="'.$data['SQL'].'">';
echo '<img id="unix" src="'.$data['unix'].'">';
echo '<img id="anglais" src="'.$data['Anglais'].'">';
echo '<img id="espagnol" src="'.$data['Espagnol'].'">';

?>