<?php ob_start() ?>


<div class="row">
<div class="col-6">
    <img src="<?= URL ?>public/images/<?= $livre->getImage();?>" alt="">
</div>
<div class="col-6">
    <p>
        titre: <?= utf8_encode($livre->getTitre()); ?>
    </p>
    <p>
        nombre de page : <?= $livre->getNbPages(); ?>
    </p>
</div>
</div>


<?php
$content = ob_get_clean();
$titre = utf8_encode($livre->getTitre());
require "template.php";
?>