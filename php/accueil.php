<?php
$data=yaml_parse_file("../data/accueil.yaml");
?>



<h1> ACCUEIL </h1>
<hr>

<nav id="accueil">
<?php
echo '<h1>'.$data["prenom"].'</h1>';
echo '<h1>'.$data["nom"].'</h1>';
echo '<h1>'.$data["accroche"].'</h1>';
echo '<img id="moi" src="'.$data['image'].'">';
?>
</nav>















