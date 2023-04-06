<?php

$model['auto'] = array(
    "Fiat" => "500",
    "Alfa" => "147",
    "Lancial" => "Delta",
    "Ferrari" => "Testarossa",
    "Maserati" => "Biturbo"
);

// echo "<pre>";
// var_dump($model);
// var_export($model);
// print_r($model);
 

foreach ($model['auto'] as $key => $masina) : ?>

<p> Marca este :<?php echo $key ?> Modelul este :<?php echo $masina ?> </p>
<?php endforeach; ?>



<?php foreach ($model as $key => $masini) : ?>
    <?php foreach ($masini as $key => $model) : ?>
<p> Marca este :<?php echo $key ?> Modelul este :<?php echo $model ?> </p>
    <?php endforeach; ?>

<?php endforeach; ?>