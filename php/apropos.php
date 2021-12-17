<?php
$data=yaml_parse_file("../data/apropos.yaml");
?>
<h1> A PROPOS </h1>
<hr id="barre">
<?php
echo '<h1>'.$data["accroche"].'</h1>';
echo '<h1>'.$data["presentation"].'</h1>';
echo '<img id="imgpropos" src="'.$data['image'].'">';

?>

gros enculé

ooooooooooooooj