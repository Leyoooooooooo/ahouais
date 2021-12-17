<?php
$data=yaml_parse_file("data/apropos.yaml");
?>
<h1> A PROPOS </h1>
<hr id="barre">
<?php
echo '<h2>'.$data["accroche"].'</h1>';
echo '<p>'.$data["presentation"].'</p>';
echo '<img id="imgpropos" src="'.$data['image'].'">';

?>