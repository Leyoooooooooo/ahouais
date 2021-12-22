<?php
$content=file_get_contents("data/competence.yaml");
$data=yaml_parse($content);
?>

<h1>COMPÉTENCES</h1>
<hr>
<h2> Développement </h2>

<article class="elements">

    <section class="case">
    <p id="comp"> HTML : </p>

    <?php

    echo '<img src="'.$data['HTML'].'">';

    ?>

    </section>

    <section class="case">
    <p id="comp"> CSS : </p>

    <?php

    echo '<img src="'.$data['CSS'].'">';

    ?>

    </section>


    <section class="case">
    <p id="comp"> PHP : </p>

    <?php

    echo '<img src="'.$data['php'].'">';

    ?>

    </section>

    <section class="case">
    <p id="comp"> YAML :</p>

    <?php

    echo '<img src="'.$data['yaml'].'">';

    ?>

    </section>

    <section class="case">
    <p id="comp"> Python : </p>

    <?php

    echo '<img src="'.$data['python'].'">';

    ?>

    </section>

    <section class="case">
    <p id="comp"> SQL : </p>

    <?php

    echo '<img src="'.$data['SQL'].'">';

    ?>

    </section>


</article>
<br>
<hr>

<h2> Réseaux </h2>

<article class="elements">

    <section class="case">
    <p id="comp"> Cisco : </p>

    <?php

    echo '<img src="'.$data['Cisco'].'">';

    ?>

    </section>

    <section class="case">
    <p id="comp"> Unix : </p>

    <?php

    echo '<img src="'.$data['unix'].'">';

    ?>

    </section>

</article>
<br>
<hr>

<h2> Langues </h2>

<article class="elements">

    <section class="case">
    <p id="comp"> Anglais : </p>

    <?php

    echo '<img src="'.$data['Anglais'].'">';

    ?>

    </section>

    <section class="case">
    <p id="comp"> Espagnol : </p>

    <?php

    echo '<img src="'.$data['Espagnol'].'">';

    ?>

    </section>

<articles>


















